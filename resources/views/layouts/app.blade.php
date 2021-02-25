<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">

	<title>@yield('title')</title>
	<meta name="description" content="Kevin Kulla is a Canadian figurative painter born and based in Peterborough, Ontario.">
	<meta name="author" content="Kevin Kulla">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">

	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">


</head>

<body>
	<header>
		<a href="{{ url('/') }}"><h1>Kevin<br /><span class="nameSpacing">Kulla</span></h1></a>
		<nav>
			<ul class="navigationLinks">
				<li>
					<a href="#" class="collections">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#5F454A" width="40px" height="40px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
						Collections
					</a>
				</li>
				<li>
					<a href="{{ url('about') }}" class="artistBio">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#5F454A" width="40px" height="40px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
						Bio
					</a>
				</li>
				<li>
					<a href="#" class="connect">
						<svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 24 24" width="40"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z" fill="#5F454A"/></svg>
						Connect
					</a>
				</li>
			</ul>
		</nav>

		@include('includes/about')

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