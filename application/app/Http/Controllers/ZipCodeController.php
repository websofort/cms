<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use App\Models\ZipCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ZipCodeController extends Controller
{
    //
    public function getZipCodes(Request $request)
    {
        $search = $request->get('search');
        $zipCodes = ZipCode::where('zip_code', 'LIKE', "%{$search}%")
            ->limit(25)
            ->get(['zip_code', 'city']);
        return response()->json($zipCodes);
    }

}
