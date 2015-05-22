<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupPost extends Model {

	protected $fillable = [
		'user_id',
		'category_id',
		'title',
		'body',
		'highlight'
	];

	public function groupcategory(){
		return $this->belongsTo('App\GroupCategory','category_id');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}


}
