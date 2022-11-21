<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model{
	use SoftDeletes;

   public function author(){
		return $this -> belongsTo('App\models\Author');
	}
	public function category(){
		return $this -> belongsTo('App\models\Book');
	}
	public function publishingHouse(){
		return $this -> belongsTo('App\models\PublishingHouse');
	}
}
