<?php

namespace App\Http\Controllers;

use App\Http\Resources\CalculatorResource;
use Illuminate\Http\Request;

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
        // dd('hello');

        $number1 = (float)$request->input('number1');
        $number2 = (float)$request->input('number2');

        $result = $number1 + $number2;

        // dd($result);

        return $result;




    }
}
