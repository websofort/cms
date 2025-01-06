<?php

namespace App\Http\Controllers;

use App\Models\Street;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StreetController extends Controller
{
    //

    public function getStreet($zip_code,Request $request)
    {
        $search = $request->get('search');
        $streets = Street::where('zip_code_id',$zip_code)
        ->where('street_name', 'LIKE', "%{$search}%")
            ->limit(25)
            ->pluck('street_name');
        return response()->json($streets);
    }
}
