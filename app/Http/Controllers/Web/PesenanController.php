<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\models\table_menu;
use Illuminate\Http\Request;

class PesenanController extends Controller
{
    //
	 public function index(Request $request) {
		
		$menu = table_menu::all();
		
		//dd($menu);
		return view('Pesanan.add_pesanan', ['menu' => $menu]);

    }
}
