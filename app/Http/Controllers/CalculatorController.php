<?php

namespace App\Http\Controllers;

use App\Http\Resources\CalculatorResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CalculatorController extends Controller
{

    /**
     * Calculate the numbers being provided.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calculate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['e' => $validator->errors()]);
        }

        $validated = $validator->validate();

        $number1 = (float)$request->input('number1');
        $number2 = (float)$request->input('number2');

        $result = $number1 + $number2;

        // dd($result);

        return response()->json(['result' => $result]);





    }
}
