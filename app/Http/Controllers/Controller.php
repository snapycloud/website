<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;

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
    		'firstname' => 'required|max:120',
    		'lastname' => 'required|max:120',
    		'email' => 'required|email',
    		'phone' => 'required|regex:/(09)[0-9]{8}/',
    		'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/',
    	]);

    	User::create($request->all());
    	dd($request->all());

    }
}
