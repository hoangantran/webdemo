<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;

class DangKy extends Controller
{
    public function Register(Request $request) {
    	$name = $request->name;
    	$email = $request->email;
    	$username = $request->username;
    	$password = bcrypt($request->password);
    	$checkUser = DB::table('users')->where('username', $username)->first();
    	if($checkUser){
			return view('form-register');
    	}
    	else{
    		DB::table('users')->insert(
		    ['name' => $name,
		     'email' => $email,
		     'username' => $username,
		     'password' => $password
			]);
			return view('form-login');
    	}
    }
}
