<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $table="tweets";
    protected $fillable = [
        'post', 'user_id',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function follow(){
    	return $this->belongsTo(Follow::class);
    }

}
