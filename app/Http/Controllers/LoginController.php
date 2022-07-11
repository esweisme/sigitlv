<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
    	//dd($request);
    	if (Auth::attempt($request->only('email','password'))){
    		#return redirect('admin/dashboard');
        	return redirect('dashboard');
    	}
        #$pass = Hash::make('@mankan123');
    	return redirect('login')->with('msg', 'silahkan cek kembali username dan password');
    }

    public function logout(Request $request)
    {
    	Auth::logout();
       
    	return redirect('login')->with('msg', "berhasil logout");
    }

	public function dashboard()
    {
		$post = \App\Models\Post::all();
		$pesan = \App\Models\Pesan::all();
		return view ('admin.dashboard', compact('pesan','post'));
	}



}
