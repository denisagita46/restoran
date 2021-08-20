<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\models\table_pelanggan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;

class Pelanggancontroller extends Controller
{

	public function index() 
	{
		$table_pelanggan = table_pelanggan::paginate(5);
		return view('pelanggan.list_pelanggan', compact('table_pelanggan'));
    }
	
	public function create() {
	     
        return view('pelanggan.add_pelanggan');
	}

	public function search(Request $request)
    {
        //$cari = $request->get('User');
        $nama_pelanggan = $request->nama_pelanggan;
        $table_pelanggan = table_pelanggan::where('nama_pelanggan','like',"%".$nama_pelanggan."%")->paginate(10);
    
        //dd($pelanggan);
        return view('pelanggan.list_pelanggan', compact('table_pelanggan'));
    }

	// for add controller 
    public function save(request $request) {
	
		$table_pelanggan = new table_pelanggan;
		
		$table_pelanggan->nama_pelanggan = $request->input('nama_pelanggan');
		$table_pelanggan->telepon = $request->input('telepon');
		$table_pelanggan->jenis_kelamin = $request->input('jenis_kelamin');
		$table_pelanggan->email = $request->input('email');
		$table_pelanggan->alamat = $request->input('alamat');
		$table_pelanggan->save();

        return redirect(route('pelanggan'))->with(['success' => "Pelanggan created successfully!"]);
	    
    }
}
