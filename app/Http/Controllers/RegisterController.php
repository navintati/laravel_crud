<?php

namespace App\Http\Controllers;
use App\Models\Registermodal;
use App\Http\Controllers\Controller; 	// Include Compalsory else you will get CSRF Error

use Illuminate\Http\Request;

use Session;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('register.index');
    }

    public function insert(Request $request)
    {
    	// echo "<pre>"; print_r($_POST); die();
    	$this->validate($request, [
    		'firstname'	=> 'required',
			'lastname'	=> 'required',
			'password'	=> 'required',
			'username'	=> 'required',
			'gender'	=> 'required',
			'email'		=> 'required',
			'date_of_birth'		=> 'required',
			'confpass'	=> 'required',
			'mobile'	=> 'required'
    	]);

    	// Get Pst Data
        $postData = $request->all();
		// echo "<pre>PostData "; print_r($postData); die();

        //insert post data
        Registermodal::create($postData);

        // Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('register.index');

    }


}
