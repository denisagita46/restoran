<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;

use Redirect; //untuk redirect


use Illuminate\Http\Request;
use App\Users;
use DB;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login')->with('sukses','Anda Berhasil Login');
    }

    public function postlogin(Request $request)
    {
      // echo "$request->email.$request->password "; die;
    	if(Auth::attempt($request->only('email','password'))){
            $akun = DB::table('users')->where('email', $request->email)->first();
            //dd($akun);
            if($akun->role =='Administrator'){
                Auth::guard('Administrator')->LoginUsingId($akun->id);
                return redirect('/admin')->with('sukses','Anda Berhasil Login');
            } else if($akun->role =='Kepala Laboratorium'){
                Auth::guard('divisi')->LoginUsingId($akun->id);
                return redirect('/list_divisi')->with('sukses','Anda Berhasil Login');
            }
    	}
    	return redirect('/login')->with('error','Akun Belum Terdaftar');
    }

    public function logout()
    {
      
    	return redirect('login')->with('sukses','Anda Telah Logout');
    }


}