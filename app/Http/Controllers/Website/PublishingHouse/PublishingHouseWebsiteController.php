<?php

namespace App\Http\Controllers\Website\PublishingHouse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\models\PublishingHouse;
use Illuminate\Support\Facades\Storage;

class PublishingHouseWebsiteController extends Controller
{
    public function index(){
		$publisher =PublishingHouse::select('*')->get();
		foreach ($publisher as $publish){
			$img_link = Storage::url($publish->image);
			$publish->image= $img_link;
		}
		
		return view('website/publishingHouse')
		->with('publishers' , $publisher);
	}
		public function showPublishingHouseDetails($id){
		$publisher =PublishingHouse::select('*')->withTrashed()->where('id',$id)->get();
		return view('website/publishingHouseDetails')
		->with('publishingHouses' , $publisher);
	}
}
