<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getPlaneRegister($id)
    {
    	return view('register');

    	// get register form save sesstion data;2
    }

    public function postPlaneRegister(Request $request)
    {
    	$request->validate([
    		'register.firstname' => 'required|max:120',
    		'register.lastname' => 'required|max:120',
    		'register.email' => 'required|email',
    		'register.phone' => 'required|regex:/(09)[0-9]{8}/',
    		'register.password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/',
    	]);
    	dd($request->all());

    }
}
