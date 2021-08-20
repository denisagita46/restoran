<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\models\table_menu;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;

class Menucontroller extends Controller
{
    //for to dashbaord
    public function index(Request $request) 
    {

        $table_menu = table_menu::paginate(5);
		return view('menu.list_menu', compact('table_menu'));

    }

	// for form user 
    public function create(Request $request) {
	     
        return view('menu.add_menu');
	}
	
	public function search(Request $request)
    {
        //$cari = $request->get('User');
        $nama_menu = $request->nama_menu;
        $table_menu = table_menu::where('nama_menu','like',"%".$nama_menu."%")->paginate(10);
    
        //dd($menuku);
        return view('menu.list_menu', compact('table_menu'));
    }

	// for add controller 
    public function save(request $request) {
	
		$table_menu = new table_menu;
		
		$table_menu->kategori_menu = $request->input('kategori_menu');
		$table_menu->nama_menu = $request->input('nama_menu');
		$table_menu->harga = $request->input('harga');
		$table_menu->deskripsi = $request->input('deskripsi');
		$table_menu->save();

        return redirect(route('menu'))->with(['success' => "menu created successfully!"]);
	    
    }
	
}
