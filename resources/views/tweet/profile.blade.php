@extends('layouts.app')

@section('content')
<div class="lg:flex  lg:justify-between">
    <div class="lg:w-32">
       @include('tweet.sidebae')
    </div>
    <div class="lg:flex-1 lg:mx-10">
    	<div class="flex flex-col">
      <img src="{{ asset('img/img.jpeg') }}" class="border border-red-500 rounded-lg" >
      
      <a class="" href=""><img src="https://img.icons8.com/fluent/150/000000/twitter.png"class="bg-gray- rounded-full mb-3 -m-16 relative ml-4  "/></a>
       <form action="/profile/{{$user->name}}/follow" method="post" class=" w-full text-right px-18 -mt-24  w-full text-right px-18 lg:-mt-24  relative  relative">
       
            @csrf
             <button type="submit" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-6 rounded-full ">
                        {{auth()->user()->following($user) ? "unfollow":"follow"}}

                    </button>
            </form></div>
            <div class="my-16">
      <h6 class="font-bold mx-16  my-0 ">{{$user->name}}</h6>
      <p class="mx-16 w-full">The official Twitter feed of http://amazon.in</p></div>
      
  </div>

    
    <div class="lg:w-18  bg-blue-300 rounded-lg ">
        @include('tweet.follow')
    </div>
</div>@endsection