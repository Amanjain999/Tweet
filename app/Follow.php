<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table="follow";
    protected $primaryKey="user_id";
    protected $fillable = [
        'follower_id', 'user_id',
    ];
    // public function user(){
    // 	return $this->belongsTo(User::class);
    // }
    
    
}
