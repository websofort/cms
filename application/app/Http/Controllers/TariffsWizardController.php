<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use App\Models\ZipCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Terminal\Location;

class TariffsWizardController extends Controller
{
    //
    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
    }

    public function handleTariffSteps(Request $request)
    {

        $step = $request->query('step');


        if (!$step) {
            return redirect()->route('tariffs.steps', ['step' => 1]);
        }

        $pageTitle = __('Tariff Wizard');

        switch ($step) {
            case 1:
                $oldData = session()->get('step1_data', []);

                $view = $this->activeTemplate . 'components.tariffs-step-1';
                return view($view, compact('oldData', 'pageTitle'));

            case 2:
                $oldData = session()->get('step2_data', []);
                $step1Data = session()->get('step1_data', []);
                $view = $this->activeTemplate . 'components.tariffs-step-2';

                if (!$step1Data) {
                    $view = $this->activeTemplate . 'components.tariffs-step-1';
                    $oldData = [];
                    return view($view, compact( 'pageTitle','oldData'));
                }
                return view($view, compact('oldData', 'pageTitle','step1Data'));
            case 3:
                $step1Data = session()->get('step1_data', []);
                $step2Data = session()->get('step2_data', []);
                $oldData = session()->get('step3_data', []);
                $location = ZipCode::where('zip_code', $step1Data['zip_code'])->where('street',$step1Data['street'])->first();

                $view = $this->activeTemplate . 'components.tariffs-step-3';
                if (!$step1Data){
                    $view = $this->activeTemplate . 'components.tariffs-step-2';
                    $oldData = [];
                    return redirect()->route('tariffs.steps', ['step' => 1]);
                }
               /* if ($step1Data && !$step2Data) {
                    $view = $this->activeTemplate . 'components.tariffs-step-2';
                    $step1Data = session()->get('step1_data', []);
                    $oldData = [];
                    return redirect()->route('tariffs.steps', ['step' => 2]);
                }*/
                return view($view, compact('pageTitle','step1Data','step2Data','oldData','location'));

            default:

                abort(404);
        }
    }

    /**
     * Process Step 1 form submission.
     */
    public function processStep1(Request $request)
    {

        $validatedData = $request->validate([
            'household-size' => 'required',
            'power-consumption' => 'required',
            'zip-code' => 'required',
            'smart-meter' => 'required',
        ]);

        $parts = explode(',', $validatedData['zip-code']);

        $zipCode = isset($parts[0]) ? trim($parts[0]) : '';
        $street = isset($parts[1]) ? trim($parts[1]) : '';
        $validatedData['zip_code'] = $zipCode;
        $validatedData['street'] = $street;
        session()->put('step1_data', $validatedData);


        return redirect()->route('tariffs.steps', ['step' => 2]);

    }

    /**
     * Process Step 2 form submission.
     */
    public function processStep2(Request $request)
    {
        $validatedData = $request->validate([
            'smart-meter' => 'nullable',
        ]);

        session()->put('step2_data', $validatedData);


        return redirect()->route('tariffs.steps', ['step' => 3]);
    }

    //step3
    public function processStep3(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'surname' => 'required',
            'birthday' => 'required',
            'telephone' => 'required',
            'location' => 'required',
            'street' => 'required',
            'house-number' => 'required',
        ]);

        session()->put('step3_data', $validatedData);
        session()->forget(['step1_data', 'step2_data','step3_data']);
        return redirect()->route('home');
    }

    //step4
}
