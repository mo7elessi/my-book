<?php

namespace App\Http\Controllers\Dashboard\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\PublishingHouse;
use App\Http\Requests\BookRequest;
use App\models\Author;
use App\models\Book;
use App\models\Categorie;

use Illuminate\Support\Facades\Storage;
class BookController extends Controller
{
	public function create(){
		$nameAuthor =Author::select('nameAuthor','image')->get();
		foreach ($nameAuthor as $nameAutho){
			$img_link = Storage::url($nameAutho->image);
			$nameAutho->image= $img_link;
		}
		$categories =Categorie::select('categoryName')->get();
		return view('dashboard/book/addBook')
		->with('nameAuthor' , $nameAuthor)
		->with('categories' , $categories);
	}
	public function store(BookRequest $request){
		$nameBook = $request['nameBook'];
		$nameAuthor = $request['nameAuthor'];
		$category = $request['category'];
		$isbn = $request['isbn'];
		$yor = $request['yor'];
		$numberPage = $request['numberPage'];
		$language = $request['language'];
		$description = $request['desc'];
		$image = $request['image'];
		$book = new Book();
		$book->description=$description;
		$book->nameBook=$nameBook;
		$book->nameAuthor=$nameAuthor;
		$book->category=$category;
		$book->isbn=$isbn;
		$book->yearOfRelease=$yor;
		$book->numberPage=$numberPage;
		$book->language=$language;
		$image = $request -> file('image');
		$path='uploads/images/';
		$name = time(1,1000)+rand() . ' . '. $image->getClientOriginalExtension();
		Storage::disk('local')->put($path.$name,$image);
		$book->image=$path.$name;

		$author =Author::select('id')
		->where('nameAuthor',$nameAuthor)
		->get();
		foreach ($author as $id ){
			$book->author_id=$id->id;
		}
		$category_id =Categorie::select('id')
		->where('categoryName',$category)
		->get();
		foreach ($category_id as $id ){
			$book->categorie_id=$id->id;
		}
		//isbn
		$isbn =Book::select('nameBook','isbn')
		->where('isbn',$isbn)
		->get();
		$c = count($isbn);
		foreach ($isbn as $i){
			$name = $i->nameBook;
		}
		if ($nameBook == $name  && $c > 0) {
			session()->flash('error','Sorry it cant be the same version for the same book!');
			return redirect('dashboard/book/addBook');
		}else{
			$result =$book->save();	
			return redirect()->back()->with('add_status',$result);
		}
		
		
	}
	public function index(Request $request){
		$paginate= 10;
		$book =Book::select('*')
		->paginate($paginate);
		foreach ($book as $boo){
			$img_link = Storage::url($boo->image);
			$boo->image= $img_link;
		}
		$value = $request['searchBook'];
		$book = Book::where('nameBook', 'LIKE', '%'.$value.'%')
		->orWhere('nameAuthor', 'LIKE', '%'.$value.'%')
		->orWhere('isbn', 'LIKE', '%'.$value.'%')
		->orWhere('yearOfRelease', 'LIKE', '%'.$value.'%')
		->orWhere('language', 'LIKE', '%'.$value.'%')
		->orWhere('category', 'LIKE', '%'.$value.'%')
		->orWhere('description', 'LIKE', '%'.$value.'%')
		->paginate(10);
		return view('dashboard/book/showBook')
		->with('books' , $book);
	}

	public function distroy($id){
		$delBook =Book::where('id',$id)->delete();
		return redirect()->back();
	}
	public function edit($id){
		$bookUpdate =Book::withTrashed()->select('*')->where('id',$id)->get();
		$nameAuthor =Author::select('nameAuthor','image')->get();
		$nameCategory =Categorie::select('categoryName')->get();
		return view('dashboard/book/updateBook')
		->with('bookUpdate' , $bookUpdate)
		->with('nameAuthor' , $nameAuthor)
		->with('nameCategory' , $nameCategory);
	}
	public function update(Request $request,$id){
		$nameBook = $request['nameBook'];
		$nameAuthor = $request['nameAuthor'];
		$category = $request['category'];
		$isbn = $request['isbn'];
		$yor = $request['yor'];
		$numberPage = $request['numberPage'];
		$language = $request['language'];
		$description = $request['desc'];
		$image = $request['image'];

		$book =Book::where('id',$id)->first();

		$book->nameBook=$nameBook;
		$book->nameAuthor=$nameAuthor;
		$book->category=$category;
		$book->isbn=$isbn;
		$book->yearOfRelease=$yor;
		$book->numberPage=$numberPage;
		$book->language=$language;
		$book->description=$description;

		
		$author =Author::select('id')
		->where('nameAuthor',$nameAuthor)
		->get();
		foreach ($author as $id ){
			$book->author_id=$id->id;
		}
		$category_id =Categorie::select('id')
		->where('categoryName',$category)
		->get();
		foreach ($category_id as $id ) {
			$book->categorie_id=$id->id;
		}

		$isbn =Book::select('nameBook','isbn')
		->where('isbn',$isbn)
		->get();
		$c = count($isbn);
		foreach ($isbn as $i){
			$name = $i->nameBook;
		}
		if ($nameBook == $name  && $c > 0) {
			session()->flash('error','Sorry it cant be the same version for the same book!');
			return redirect('dashboard/book/addBook');
		}else{
			$result =$book->save();	
			return redirect()->back()->with('add_status',$result);
		}
		


}
}

