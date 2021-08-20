<?php
namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;


class DivisiController extends Controller
{

    //for to dashbaord
    public function index(Request $request) {

       
		return view('divisi.list_divisi');
		//return response()->json($users);

    }

	// for form user 
    public function create_divisi(Request $request) {
	     
        return view('divisi.add_divisi');
    }

	// for add controller 
    public function save(request $request) {
	
		$user = new user;
		
		$user->name = $request->input('name');
		$user->telepon = $request->input('telepon');
		$user->flag = $request->input('flag');
		$user->email = $request->input('email');
		$user->password = $request->input('password');
		$user->save();

        return redirect(route('admin.users'))->with(['success' => "User created successfully!"]);
	    
    }
	
	//for to export excel 
	public function export_excel()
	{
		return Excel::download(new UserExport, 'user.xlsx');
	}
}