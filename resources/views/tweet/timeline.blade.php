@if(Auth::check())
<div class="flex p-2 flex-col ">
    @foreach($t as $ts)
    <div class="flex mt-4">
    <div class="flex-shrink-0  ">
    <a class=""><img src="https://img.icons8.com/fluent/48/000000/twitter.png"class="bg-red-800 rounded-full mx-4" width="50" height="50"  /></a>   </div>
    <div class="flex flex-col mx-2  ">
    <label class="  ">{{$ts->user->name}}</label>
    <p class="font-normal   text-justify">{{$ts->post}}</p></div>
</div>
<hr class="mt-8 bg-red-800"/>
        @endforeach



</div>
@endif





    