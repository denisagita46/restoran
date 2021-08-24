<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardKasirController extends Controller
{
    //
    public function dashboard() {
		
		return view('dahsboard_kasir.dashboard');

    }
}
