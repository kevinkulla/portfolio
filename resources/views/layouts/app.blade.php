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

	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('site.webmanifest') }}">
	<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">


	<link rel="stylesheet" href="{{ asset('css/styles.css') }}" media="screen">


</head>

<body>
	<header>
		<h1><a href="{{ url('/') }}">Kevin<br /><span class="nameSpacing">Kulla</span></a></h1>
		<nav>
			<ul class="navigationLinks">
				<li>
					<a href="#" class="collections">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#5F454A" width="40px" height="40px"><path d="M0 0h24v24H0V0z" aria-hidden="true" fill="none"/><path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
						Collections
					</a>
				</li>
				<li>
					<a href="{{ url('about') }}" class="artistBio">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#5F454A" width="40px" height="40px"><path d="M0 0h24v24H0V0z" aria-hidden="true" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
						Bio
					</a>
				</li>
				<li>
					<a href="#" class="connect">
						<svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"/></svg>
						Connect
					</a>
				</li>
				<li>
					<a href="#" class="newsletter">
						<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40" viewBox="0 0 24 24" width="40"><g><rect fill="none" height="24" width="24" x="0"/><path d="M12,19c0-3.87,3.13-7,7-7c1.08,0,2.09,0.25,3,0.68V6c0-1.1-0.9-2-2-2H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h8.08 C12.03,19.67,12,19.34,12,19z M4,6l8,5l8-5v2l-8,5L4,8V6z M17.34,22l-3.54-3.54l1.41-1.41l2.12,2.12l4.24-4.24L23,16.34L17.34,22z"/></g></svg>
						Join Email Newsletter
					</a>

				</li>
			</ul>
		</nav>

		@include('includes/about')



		<div class="theme-toggle" aria-hidden="true">
			<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="inherit" width="18px" height="18px"><title>Light Theme Icon</title><rect fill="none" height="24" width="24"/><path d="M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S14.76,7,12,7L12,7z M11,1v4h2V1L11,1z M11,19v4h2v-4L11,19z M23,11l-4,0v2 l4,0V11z M5,11l-4,0l0,2l4,0L5,11z M16.24,17.66l2.47,2.47l1.41-1.41l-2.47-2.47L16.24,17.66z M3.87,5.28l2.47,2.47l1.41-1.41 L5.28,3.87L3.87,5.28z M6.34,16.24l-2.47,2.47l1.41,1.41l2.47-2.47L6.34,16.24z M18.72,3.87l-2.47,2.47l1.41,1.41l2.47-2.47 L18.72,3.87z"/></svg>

			<input type="checkbox" id="toggle" class="checkbox" {{ (Cookie::get('theme') === 'dark-theme' ? 'checked' : '' ) }} />
    		<label for="toggle" class="switch"></label>

    		<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="inherit" width="18px" height="18px"><title>Dark Theme Icon</title><rect fill="none" height="24" width="24"/><path d="M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36c-0.98,1.37-2.58,2.26-4.4,2.26 c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z"/></svg>
    	</div>

	</header>

	<hr class="mobile">

	<main>

		@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

		@show

			@section('content')

		@show

		</section>

	</main>

	<footer>
		<p>&copy; {{ $year }}—Kevin Kulla</p>
	</footer>

	<script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155144334-1"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript">
		terracotta.initalize();
	</script>

<script>

</script>

</body>
</html>