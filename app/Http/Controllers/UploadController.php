<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class UploadController extends Controller
{
    public function import(){

        return view('upload');
    }

    public function ImportFile(Request $request)

    {

    		$file = Input::file('file');
    		$file_name =  $file->getClientOrginalName();
    		$file->move('files', $file_name );
    		$results = Excel::load($file_name, function($reader)

    		{

    			$reader->all();


    		})->get();


    		return view('clients', ['clients' => $result]);

    
}

}
