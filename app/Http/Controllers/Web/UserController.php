<?php
namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use App\Models\table_divisi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;


class UserController extends Controller
{

    //for to dashbaord
    public function index() {

	$users = User::paginate(5);
	return view('pengguna.list_pengguna', compact('users'));
	//return response()->json($users);

    }

    public function create(Request $request) {
	     
        return view('pengguna.add_pengguna');
	}
	
	public function search(Request $request)
    {
        //$cari = $request->get('User');
        $name = $request->name;
        $users = User::where('name','like',"%".$name."%")->paginate(10);
        
        //dd($users);
        return view('pengguna.list_pengguna', compact('users'));
    }

	// for add controller 
    	public function save(request $request) {
	
		$user = new user;
		
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		$user->password = $request->input('password');
		$user->role = $request->input('role');
		$user->save();

        return redirect(route('pengguna'))->with(['success' => "User created successfully!"]);
	    
    }
	
	//for to export excel 
	public function export_excel()
	{
		return Excel::download(new UserExport, 'Report_pengguna.xlsx');
	}
	
	public function hapus($id)
	{
    		$user = User::find($id);
    		$user->delete();
    		return redirect(route('pengguna'))->with(['success' => "delete successfully!"]);
	}
	
	public function view_pengguna($id)
	{
		$user = User::find($id);
		//dd($mobil);
		return view('pengguna.view_pengguna', ['user' => $user]);
	}


}
