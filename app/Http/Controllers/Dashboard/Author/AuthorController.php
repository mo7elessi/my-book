<?php

namespace App\Http\Controllers\Dashboard\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\models\PublishingHouse;
use App\Http\Requests\AuthorRequest;
use App\models\Author;
use App\models\Book;
use Illuminate\Support\Facades\Storage;
class AuthorController extends Controller{

  public function create(){
    $namepub =PublishingHouse::select('namePublishingHouse','image')->get();
    foreach ($namepub as $namepu){
     $img_link = Storage::url($namepu->image);
     $namepu->image= $img_link;
   }
   return view('dashboard/author/addAuthor')->with('namepub' , $namepub);
 }
 public function store(AuthorRequest $request){
  $nameAuthor = $request['nameAuthor'];
  $publishing = $request['publishing'];
  $gender = $request['gender'];
  $country = $request['country'];
  $city = $request['city'];
  $address = $request['address'];
  $dob = $request['dob'];
  $email = $request['email'];
  $phone = $request['phone'];
  $about = $request['about'];

  $author = new Author();

  $author->nameAuthor=$nameAuthor;
  $author->namePublishingHouse=$publishing;
  $author->gender=$gender;
  $author->country=$country;
  $author->city=$city;
  $author->address=$address;
  $author->email=$email;
  $author->phone=$phone;
  $author->about=$about;
  $author->dob=$dob;


  $author_id =PublishingHouse::select('id')
  ->where('namePublishingHouse',$publishing)
  ->get();
  foreach ($author_id as $id ) {
   $author->publishinghouse_id=$id->id;
 }
 $image = $request -> file('image');
 $path='uploads/images/';
 $name = time(1,1000)+rand() . ' . '. $image->getClientOriginalExtension();
 Storage::disk('local')->put($path.$name,$image);
 $author->image=$path.$name;
 $result = $author->save();
 return redirect()->back()->with('add_status',$result);
}
public function index(Request $request){
  $paginate = 10;
  $author =Author::with('book')->select('*')->paginate($paginate);
  foreach ($author as $autho){
    $img_link = Storage::url($autho->image);
    $autho->image= $img_link;
  }
  $value = $request['searchAuthor'];
    $author = Author::where('nameAuthor', 'LIKE', '%'.$value.'%')
    ->orWhere('namePublishingHouse', 'LIKE', '%'.$value.'%')
    ->orWhere('country', 'LIKE', '%'.$value.'%')
    ->paginate(10);

  return view('dashboard/author/showAuthor',['authors' => $author]);
}

public function distroy($id){
  $delAuthoe =Author::where('id',$id)->delete();
  return redirect()->back();
}
public function edit($id){
  $authorUpdate =Author::select('*')->where('id',$id)->get();
  $names =PublishingHouse::select('namePublishingHouse','image')->get();
  foreach ($names as $namepu){
    $img_link = Storage::url($namepu->image);
    $namepu->image= $img_link;
  }
  return view('dashboard/author/updateAuthor')
  ->with('authorUpdate' , $authorUpdate)->with('names',$names);
}
public function update(Request $request,$id){
  $nameAuthor = $request['nameAuthor'];
  $publishing = $request['publishing'];
  $gender = $request['gender'];
  $country = $request['country'];
  $city = $request['city'];
  $address = $request['address'];
  $dob = $request['dob'];
  $email = $request['email'];
  $phone = $request['phone'];
  $about = $request['about'];

  $author =Author::withTrashed()->where('id',$id)->first();
  $author_id =PublishingHouse::select('id')
  ->where('namePublishingHouse',$publishing)
  ->get();
  foreach ($author_id as $id ) {
   $author->publishinghouse_id=$id->id;
 }
 
  $author->nameAuthor=$nameAuthor;
  $author->namePublishingHouse=$publishing;
  $author->gender=$gender;
  $author->country=$country;
  $author->city=$city;
  $author->address=$address;
  $author->email=$email;
  $author->phone=$phone;
  $author->about=$about;
  $author->dob=$dob;
  $result = $author->save();
  return redirect()->back()->with('add_status',$result);
}


}
