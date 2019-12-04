<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class AuthController extends Controller
{
     public function slogin(){
    	return view('slogin');
    }

    public function loginstore(Request $request){
    	$email = $request->email;
    	$password = md5($request->password);
    	// select * from emplyees where email= and password = 
    	$obj = Employee::where('email','=',$email)
    			       ->where('password','=',$password)
    			       ->first();
    	if($obj){ // if successful
    		$request->session()->put('userid', $obj->id);
    		$request->session()->put('username', $obj->name);
    		$request->session()->put('userrole', $obj->role);
    		return redirect()->to('timeline');
    	}
    	else{
    		echo 'invalid email or password';
    	}


    }
}
