<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class formValid extends Controller
{
    function showForm(){
        return view('registrationValid');
    }
    function signup(Request $request){
            //single rule form validate
            // $validate=$request->validate([
            //     'email'=>'required',
            //     'password'=>'required',
            // ]);
            //multi rule specified as Array
             $validate=$request->validate([
                 'email'=>['required','min:20'],
                 'password'=>['required'],
             ]);
               //multi rule specified as Array usig delimete
             $validate=$request->validate([
                 'email'=>'required'|'min:20',
                 'password'=>'required',
             ]);



        $input=$request->except('_token');
        print_r($input);
        return view('registrationValid',['data'=>$input]);
    }
}
