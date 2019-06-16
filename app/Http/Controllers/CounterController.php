<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        return view('counter')->with('count', 0);
    }

    public function increase($count)
    {
        $count++;

        return view('counter')->with('count', $count);
    }

    public function decrease($count)
    {
        $count--;

        return view('counter')->with('count', $count);
    }



    public function randomView()
    {
        return view('random')->with('randomNumber', 0);
    }





    
    public function random(Request $request)
    {
        $min = $request->from;
        $max = $request->to;
        $randomNumber = rand($min, $max);
       
      

        return view('random')->with('randomNumber', $randomNumber);
    }
}
