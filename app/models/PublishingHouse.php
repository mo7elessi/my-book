<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PublishingHouse extends Model
{
 	use SoftDeletes;
 	public function author(){
		return $this -> hasMany('App\models\author','publishinghouse_id','id');
	}
	
	public function book(){
		return $this -> hasMany('App\models\Book');
	}
	


}
