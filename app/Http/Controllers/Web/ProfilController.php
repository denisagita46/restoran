<?php
namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProfilController extends Controller
{

    //for to profil user
    public function index(Request $request) {

       
		return view('profil.list_profil');
		//return response()->json($users);

    }

	// for list profil 
    public function create_profil(Request $request) {
	     
        return view('profil.list_profil');
    }

}