<?php

namespace App\Http\Controllers;
use App\Http\Requests\TweetRequest;
use Illuminate\Http\Request;
use App\Tweet;
use App\User;
use Auth;
class TweetController extends Controller
{
    public function __construct()
    {
    }
    public function store(TweetRequest $request)
    {
    	$tweet=new Tweet;
    	$tweet->post=$request->post;
    	$tweet->user_id=Auth()->user()->id;
    	$tweet->save();
        //return response()->json($tweet);
    	return redirect('/home');

    }
   
}
