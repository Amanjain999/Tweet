<h3 class="text-xl font-bold ml-8 mt-4">Who to follow</h3>
        <ul class="mt-4 ml-8 ">
       @foreach($users as $user)
       
            <li class="flex flex-row w-full">
                 <a class="" href=""><img src="https://img.icons8.com/fluent/48/000000/twitter.png"class="bg-red-800 rounded-full mb-3"/></a>
                 <div class=" flex ">
                <a href="/profile/{{$user->name}}" class=" mb-3 px-4 w-full py-1 font-bold">{{$user->name}}</a>
                <form action="/profile/{{$user->name}}/follow" method="post" class="  text-right px-2 ">
                    @csrf
                    <button type="submit" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-6 rounded-full ">
                        {{auth()->user()->following($user) ? "Unfollow":"Follow"}}

                    </button>
                
            </form>
            </div>
            </li>
            @endforeach
        </ul>