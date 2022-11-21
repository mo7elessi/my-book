<?php

namespace App\Http\Controllers\Website\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\models\Author;
use App\models\Book;
use App\models\Categorie;

class BookWebsiteController extends Controller
{
    	public function indexBookWithCategories(){
		$category = Categorie::with('book')
		->withTrashed()
		->select('*')
		->get();
		$paginate= 6;
		$book =Book::select('*')
		->paginate($paginate);
		return view('website/home')->with('categories',$category)->with('allBooks',$book); 
	}

	public function showBookDetails($id){
		$bookDetail =Book::with('author')->withTrashed()->select('*')->where('id',$id)->get();
		return view('website/bookDetails')
		->with('bookDetails' , $bookDetail);
	}
	public function searchBook(Request $request){
		$value = $request['searchBook'];
		$book = Book::where('nameBook', 'LIKE', '%'.$value.'%')
		->orWhere('nameAuthor', 'LIKE', '%'.$value.'%')
		->orWhere('isbn', 'LIKE', '%'.$value.'%')
		->orWhere('yearOfRelease', 'LIKE', '%'.$value.'%')
		->orWhere('description', 'LIKE', '%'.$value.'%')
		->orWhere('language', 'LIKE', '%'.$value.'%')
		->orWhere('category', 'LIKE', '%'.$value.'%')
		->get();
		return view('website/searchResult')->with('books' , $book);
	}   
}
