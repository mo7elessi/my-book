<?php

namespace App\Http\Controllers\Website\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\models\Author;
use Illuminate\Support\Facades\Storage;
class AuthorWebsiteController extends Controller
{
   public function index(){
		$author =Author::select('*')->get();
		foreach ($author as $autho){
			$img_link = Storage::url($autho->image);
			$autho->image= $img_link;
		}
		return view('website/author')->with('authors', $author);
	}
	public function showAuthorDetails($id){
		$authorDetail =Author::select('*')->withTrashed()->where('id',$id)->get();
		return view('website/authorProfile')
		->with('authors' , $authorDetail);
	}
}
