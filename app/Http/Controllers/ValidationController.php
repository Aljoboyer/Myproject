<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ValidationController extends Controller
{
    public function valid(){

    	return view('valid');
    }

     public function store(Request $request){


    	$validateData = $request->validate([

    	'name' => 'required|regex:/^[\pL\-]+\s?[\pL\-]*$/',
    	'email' => 'required|email',
    	'birth_date' => 'required|date',
    	'salary' => 'required|integer|between:5000,10000',
    	'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#?!@$%^&*-]/',
        'confirm_password' => 'required|same:password',



    	]);
    }
    

}
