<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\PublishingHouse;
use App\Http\Requests\HomeRequest;
use App\models\Categorie;
use App\models\Author;
use App\models\Book;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{

	public function create(){
	return view('dashboard/home/addCategory');
	}

	public function store(HomeRequest $request){
		$nameCategory = $request['nameCategory'];
		$desc = $request['desc'];
		$category = new Categorie();
		$category->categoryName=$nameCategory;
		$category->description=$desc;
		$result = $category->save();
		return redirect()->back()->with('add_status',$result);
	}


	public function index(Request $request){
		$paginate =10;
		$countPubhouse = PublishingHouse::count();
		$countAuthor = Author::count();
		$countBook = Book::count();	
		$countCategory =Categorie::count();
		$category =Categorie::select('*')->paginate($paginate);
		$value = $request['searchCategory'];
			$category = Categorie::where('categoryName', 'LIKE', '%'.$value.'%')
			->orWhere('description', 'LIKE', '%'.$value.'%')
			->paginate($paginate);

		return view('dashboard/home/dashboard')
		->with('categorys' , $category)
		->with('countPubhouse' , $countPubhouse)
		->with('countAuthor' , $countAuthor)
		->with('countBook' , $countBook)
		->with('countCategory',$countCategory);
	}

	public function edit($id){
		$category =Categorie::select('*')->where('id',$id)->get();
		return view('dashboard/home/updateCategory')
		->with('category' , $category);
	}

	public function update(HomeRequest $request,$id){
		$nameCategory = $request['nameCategory'];
		$desc = $request['desc']; 
		$result =Categorie::withTrashed()->where('id',$id)->first();
        $result->categoryName=$nameCategory;
		$result->description=$desc;
		$r = $result->save();
		return redirect()->back()->with('add_status',$r);
	}


	public function distroy($id){
		$result =Categorie::where('id',$id)->delete();
		return redirect()->back();
	}
	

}


