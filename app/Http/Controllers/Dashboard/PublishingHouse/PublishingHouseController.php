<?php

namespace App\Http\Controllers\Dashboard\PublishingHouse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\models\PublishingHouse;
use App\models\Author;
use App\models\Book;
use App\Http\Requests\publishingHouseRequest;
use Illuminate\Support\Facades\Storage;

class PublishingHouseController extends Controller{

	public function create(){
		return view('dashboard/publishingHouse/addPublishingHouse');
	}
	public function store(publishingHouseRequest $request){
		$namePublishingHouse = $request['publisher'];
		$founder = $request['founder'];
		$country = $request['country'];
		$phone = $request['phone'];
		$headquarters = $request['headquarters'];
		$yeaounded = $request['yeaounded'];
		$about = $request['about'];
		$publisher = new PublishingHouse();
		$publisher->namePublishingHouse=$namePublishingHouse;
		$publisher->nameFounder=$founder;
		$publisher->country=$country;
		$publisher->headquarter=$headquarters;
		$publisher->yearFounded=$yeaounded;
		$publisher->phone=$phone;
		$publisher->about=$about;
		$image = $request -> file('image');
		$path='uploads/images/'; 
		$name = time(1,1000)+rand() . ' . '. $image->getClientOriginalExtension();
		Storage::disk('local')->put($path.$name,$image);
		$publisher->image=$path.$name;
		$result= $publisher->save();
		return redirect()->back()->with('add_status',$result);
	}

	public function index(Request $request){
		$paginate =10;
		
		$publisher =PublishingHouse::with('author')
		->select('*')
		->paginate($paginate);

		foreach ($publisher as $publish){
			$img_link = Storage::url($publish->image);
			$publish->image= $img_link;
		}

		$value = $request['searchPublishingHouse'];
		$publisher = PublishingHouse::where('namePublishingHouse', 'LIKE', '%'.$value.'%')
		->orWhere('country', 'LIKE', '%'.$value.'%')
		->orWhere('nameFounder', 'LIKE', '%'.$value.'%')
		->paginate(10);
		return view('dashboard/publishingHouse/showPublishingHouses')
		->with('publishers' , $publisher);

	}

	public function edit($id){
		$publisher =PublishingHouse::select('*')->where('id',$id)->get();
		return view('dashboard/publishingHouse/updatePublishingHouse')
		->with('publisher' , $publisher);
	}

	public function update(Request $request,$id){
		$namePublishingHouse = $request['publisher'];
		$founder = $request['founder'];
		$country = $request['country'];
		$phone = $request['phone'];
		$headquarters = $request['headquarters'];
		$yeaounded = $request['yeaounded'];
		$about = $request['about'];
		$result =PublishingHouse::withTrashed()->where('id',$id)->first();
		$result->namePublishingHouse=$namePublishingHouse;
		$result->nameFounder=$founder;
		$result->country=$country;
		$result->headquarter=$headquarters;
		$result->yearFounded=$yeaounded;
		$result->phone=$phone;
		$result->about=$about;
		$r = $result->save();
		return redirect()->back()->with('add_status',$r);
	}


	public function distroy($id){
		$result =PublishingHouse::where('id',$id)->delete();
		return redirect()->back();
	}

}
