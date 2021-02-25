@extends('layouts.app')

@section('title', $collection->title)

@section('content')

	<section class="pictures">
        <h2>{{ $collection->title }}</h2>
        <p>{{ $collection->description }}</p>

        @foreach($paintings as $painting)
        <div class="painting">
			<div class="frame">
				<a href="{{ url($collection->slug . '/' . $painting->slug) }}"><img src="{{ $painting->url }}" alt="{{ $painting->alt }}" /></a>
			</div>
			<div class="card">
				<h2><a href="{{ url($collection->title . '/' . $painting->slug) }}"> {{ $painting->title }}</a></h2>
				<ul>
					<li>{{ $painting->height }}cm x {{$painting->width }}cm</li>
					<li>{{ $painting->medium }}</li>
					<li>{{ $painting->year }}</li>
				</ul>
			</div>
		</div>
		@endforeach

    </section>

@endsection

