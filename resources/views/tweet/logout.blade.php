<div class=" my-24">

	<div class=" px-4 -ml-6 flex fixed -my-48  flex-col  box-border rounded-lg shadow-xs border border-gray-400" id="dialog">
		<div class="flex flex-row  ">
			<img alt="" draggable="true" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png" class=" mb-2 mt-2 rounded-full">
			<div class="flex flex-col">
				<span class=" mx-4 pt-2">{{auth()->user()->name}}</span>
				<span class="text-gray-500 mx-4 truncate w-1/2">{{auth()->user()->email}}</span> 
			</div>
			<div class="self-center  text-blue">
			     <svg viewBox="0 0 24 24" width="20" height="20" class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-1xvli5t r-1n0xq6e r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M9 20c-.264 0-.52-.104-.707-.293l-4.785-4.785c-.39-.39-.39-1.023 0-1.414s1.023-.39 1.414 0l3.946 3.945L18.075 4.41c.32-.45.94-.558 1.395-.24.45.318.56.942.24 1.394L9.817 19.577c-.17.24-.438.395-.732.42-.028.002-.057.003-.085.003z"></path></g></svg>
		  </div>

		</div>
		<hr class="border border-gray-300  bg-gray-300">
		 <span class="py-3 px-2 ">Add an Existing Account</span>
		 <hr class="border border-gray-300  bg-gray-300">
		 <span class=" px-2 py-3">Logout {{auth()->user()->email}}</span>
		<div>
			<svg viewBox="0 0 24 24" width="20" height="20" class="ml-16 -mb-3 transform rotate-180 r-9uu7rm r-jwli3a r-4qtqp9 r-yyyyoo r-2pyi3h r-n6v787 r-1xvli5t r-dnmrzs r-u8s1d r-1plcrui r-uoibet r-lrvibr r-lrsllp" style=" left: calc(98px);"><g><path d="M12.538 6.478c-.14-.146-.335-.228-.538-.228s-.396.082-.538.228l-9.252 9.53c-.21.217-.27.538-.152.815.117.277.39.458.69.458h18.5c.302 0 .573-.18.69-.457.118-.277.058-.598-.152-.814l-9.248-9.532z"></path></g></svg>
		</div>
		 
	</div>

	<div class="flex mt-6 fixed justify-around  my-2 mx-2  hover:bg-blue-100 hover:border rounded-full" id="logout" >
		<img alt="" draggable="true" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png" class="py-2 px-2 rounded-full">
		<div class="flex flex-col">
		<span class="mt-2 mx-2">
		{{auth()->user()->name}}</span>
		<span class="text-gray-500 mx-2 truncate w-1/2">{{auth()->user()->email}}</span> 
	</div>
	<div class="self-center  ">
		<svg viewBox="0 0 24 24" width="20" height="20" class="  hover:bg-blue-100 hover:border rounded-full -ml-16 r-4qtqp9 r-yyyyoo r-ip8ujx r-dnmrzs r-1p4rafz r-bnwqim r-1plcrui r-lrvibr"><g><path d="M20.207 8.147c-.39-.39-1.023-.39-1.414 0L12 14.94 5.207 8.147c-.39-.39-1.023-.39-1.414 0-.39.39-.39 1.023 0 1.414l7.5 7.5c.195.196.45.294.707.294s.512-.098.707-.293l7.5-7.5c.39-.39.39-1.022 0-1.413z"></path></g></svg>
	</div>	
</div>
	
</div>
<style>
    #dialog{
        background-color: white;
    }
    </style>
<script>
	$('#dialog').hide(true);
	$('#logout').click(function(){
			$('#dialog').slideToggle('slow')

			
			
		})
	
	</script>
