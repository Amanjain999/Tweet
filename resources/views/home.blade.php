@extends('layouts.app')

@section('content')


<div class=" lg:flex  lg:justify-between ">
    <div class="lg:w-64  ">
       @include('tweet.sidebae')

    </div>
    

    <div class="lg:flex-1 lg:mx-8 border border-gray-400 h-full  lg:-mt-8  ">

        @include('tweet.publish')
        @include('tweet.timeline')

    </div>
    <div class="lg:w-18 h-full mt-2 ">
        @include('tweet.search')
        <div class="bg-gray-200 rounded-lg mt-6">
        @include('tweet.happen')
        @include('tweet.follow')
        </div>
    </div>
</div>

@endsection
