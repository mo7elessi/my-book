<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model{
	use SoftDeletes;

	public function book(){
		return $this -> hasMany('App\models\Book');
	}
	public function publishingHouse(){
		return $this -> belongsTo('App\models\PublishingHouse');
	}
}
