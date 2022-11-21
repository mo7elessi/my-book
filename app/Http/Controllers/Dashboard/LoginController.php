<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	function login(Request $req){
		$validatedData = $req->validate([
			'name' => 'required',
			'password' => 'required'
		]);

		$result = DB::table('login')
		->where('name',$req->input('name'))
		->get();

		$res = json_decode($result,true);
		print_r($res);

		if(sizeof($res)==0){
			$req->session()->flash('error','Name does not exist !');
			echo "Name Does not Exist.";
			return redirect('login');
		}
		else{
			echo "Hello";
			$encrypted_password = $result[0]->password;
			if($encrypted_password==$req->input('password')){
				echo "You are logged in Successfully";
				$req->session()->put('user',$result[0]->name);
				return redirect('dashboard');
			}
			else{
				$req->session()->flash('error','Password Incorrect !');
				echo "Name Id Does not Exist.";
				return redirect('login');
			}
		}
	    return view('dashboard/login');

	}
}
