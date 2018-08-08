<!doctype html>

<html lang="{{ app()->getLocale() }}">
  	<head>

  		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     	<title>{{ config('APP_NAME', 'Simple Crud') }}</title>

     	{{-- Styles --}}
     	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     	<link href="{{ asset('css/web.css') }}" rel="stylesheet">
    	
     	{{-- jQuery first, then Popper.js, then Bootstrap JS --}}
      	<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}" defer></script>
      	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" defer></script>
  	</head>
  	<body>

  		<main class="container">

  			<div>

	  			<h1>{{ config('APP_NAME', 'Simple Crud') }}</h1>

	  		</div>

	  		<hr>

		    <!-- include('layouts.app._alerts') -->
		    @yield('content')
	    </main>

 	</body>
</html>