<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\models\table_meja;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;

class Mejacontroller extends Controller
{
    //
    public function index() 
    {
        $table_meja = table_meja::paginate(5);
		return view('meja.list_meja', compact('table_meja'));
    }

    public function create(Request $request) 
    {
        return view('meja.add_meja');
    }
    
    public function save(request $request) {
	
		$table_meja = new table_meja;
		
		$table_meja->nomor_meja = $request->input('nomor_meja');
		$table_meja->lokasi = $request->input('lokasi');
		$table_meja->save();

        return redirect(route('meja'))->with(['success' => "meja created successfully!"]);
	    
    }
}
