<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $role = Auth::user()->role;
        if($role == "kasir"){
            return redirect()->to('kasir');
        } else if($role == "kitchen"){
            return redirect()->to('kitchen');
        } else {
            return redirect()->to('logout');
        }
    }
}
