<?php

namespace App\Http\Controllers;
use App\Tweet;
use App\User;
use App\Follow;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tweet=Tweet::where('user_id',Auth::user()->id)->latest()->get();
        $users=User::where('id', '!=', Auth::user()->id)->get();
         $followerTweet=Tweet::whereIn('user_id', auth()->user()->follows()->pluck('follower_id'))->get();
        $ids=auth()->user()->follows()->pluck('follower_id');
        $h=$ids->push(auth()->user()->id);
        $t=Tweet::whereIn('user_id',$ids)->latest()->get();
       
        return view('home',compact('tweet','users','t'));
    }

}
