<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ Cookie::get('theme') }}">
<head>
	<meta charset="utf-8">

	<title>@yield('title')</title>
	<meta name="description" content="Kevin Kulla is a Canadian figurative painter born and based in Peterborough, Ontario.">
	<meta name="author" content="Kevin Kulla">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
	<meta name="color-scheme" content="dark light">


	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">


</head>

<body class="backend">
	<header>
		<a href="{{ url('/') }}"><h1>Kevin<br /><span class="nameSpacing">Kulla</span></h1></a>

		<div class="theme-toggle">
			<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="inherit" width="18px" height="18px"><title>Light Theme Icon</title><rect fill="none" height="24" width="24"/><path d="M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S14.76,7,12,7L12,7z M11,1v4h2V1L11,1z M11,19v4h2v-4L11,19z M23,11l-4,0v2 l4,0V11z M5,11l-4,0l0,2l4,0L5,11z M16.24,17.66l2.47,2.47l1.41-1.41l-2.47-2.47L16.24,17.66z M3.87,5.28l2.47,2.47l1.41-1.41 L5.28,3.87L3.87,5.28z M6.34,16.24l-2.47,2.47l1.41,1.41l2.47-2.47L6.34,16.24z M18.72,3.87l-2.47,2.47l1.41,1.41l2.47-2.47 L18.72,3.87z"/></svg>

			<input type="checkbox" id="toggle" class="checkbox" {{ (Cookie::get('theme') === 'dark-theme' ? 'checked' : '' ) }} />
    		<label for="toggle" class="switch"></label>

    		<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="inherit" width="18px" height="18px"><title>Dark Theme Icon</title><rect fill="none" height="24" width="24"/><path d="M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36c-0.98,1.37-2.58,2.26-4.4,2.26 c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z"/></svg>
    	</div>

    	<div class="create">
			<a href="{{ route('collection.create') }}"> Add a Collection </a>
			<a href="{{ route('painting.create') }}"> Add a Painting </a>
		</div>

	</header>

	<hr class="mobile">

	<main>

		@show

			@section('content')

		@show

		</section>

	</main>

	<footer>
		<p>&copy; {{ $year }}—Kevin Kulla</p>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript">
		terracotta.initalize();
	</script>
</body>
</html>