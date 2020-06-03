<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <a href="https://icons8.com/icon/5MQ0gPAYYx7a/twitter"></a>
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!----------------------------------------Jquery ------------->
    <script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
</head>
<body>
    <div id="app">
       
        <section class="mb-2 px-8 py-3 ">
            <img src="https://img.icons8.com/fluent/48/000000/twitter.png" class="fixed" />
        </section>
  
        <section class="px-8">
        <main class="">
            @yield('content')
        </main>
    </section>
    <section>
    @yield('nav')
    </section>
   
    </div>
</body>
</html>
