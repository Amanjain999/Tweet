<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Follow;
use Auth;
class FollowController extends Controller
{
    public function store(User $user,Request $request){
    	
        if(auth()->user()->following($user)){
                auth()->user()->Unfollow($user);
        }
        else{
                auth()->user()->follow($user);
        }
    	return back();
    }
    public function getProfile(User $user)
    {
    	$users=User::where('id', '!=', Auth::user()->id)->get();

    	return view('tweet.profile',compact('user','users'));
    }
}
