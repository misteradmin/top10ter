<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'article_id', 'user_id','comment'
    ];

    public function user(){
		return $this->belongsTo('App\User');
	}
}
