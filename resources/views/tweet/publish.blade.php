<h1  class="font-bold text-xl ml-4 mt-4 ">Home</h1>
<hr class=" my-2 border border-gray-200 h-1 bg-gray-200">
    <div class="  mb-8 " >
        <div class="flex flex-row ">
            <a ><img src="https://img.icons8.com/fluent/48/000000/twitter.png"class="bg-red-800 rounded-full mx-4" width="50" height="50"  /></a>
            <form action="/tweet" method="post"  class="w-full">
        	   @csrf
                <textarea name="post" class="w-full mt-3 " placeholder="What is happening ?" style="resize:none"></textarea>
                <footer class="flex justify-end mt-2 px-2">
                    <button type="submit" class="bg-blue-500 rounded-full px-4 py-2 shadow text-white font-bold">Tweet</button>
                </footer>
            </form>
    </div>

        @error('post')
        {{$message}}
        @enderror

    </div>
    <hr class="my-2 border border-gray-200 h-2 bg-gray-200">