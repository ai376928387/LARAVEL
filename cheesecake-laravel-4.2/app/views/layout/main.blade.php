<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/style.css') }}
	<title>Cheesecake Grab</title>
</head>
<body>
		@if (Session::has('global'))
		<p>{{ Session::get('global') }}</p>
		@endif

		@include('layout.navigation')


		<div class="container">
			@yield('content')
		</div>
		
		{{ HTML::script('js/jquery-1.11.2.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}


</body>
</html>