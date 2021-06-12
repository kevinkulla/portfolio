@extends('layouts.app')

@section('title', 'Work — Kevin Kulla')

@section('content')

	<section class="pictures">
        {{-- <article class="description">
        	<h2>{{ $paintings[0]->collection->title }}</h2>

        	<p>{{ $paintings[0]->collection->description }}</p>
        </article> --}}

        @foreach($paintings as $painting)
        <div class="painting">
			<div class="frame">
				<a href="{{ url($painting->collection->slug . '/' . $painting->slug) }}">
					<img width="auto"
						srcset="{{ $painting->url }}?tr=w-300 300w,
								{{ $painting->url }}?tr=w-600 600w,
								{{ $painting->url }}?tr=w-900 900w,
								{{ $painting->url }}?tr=w-1200 1200w"

						src="{{ $painting->url }}"
						alt="{{ $painting->alt }}" />
				</a>
			</div>
			<div class="card">
				<h2><a href="{{ url($painting->collection->title . '/' . $painting->slug) }}"> {{ $painting->title }}</a></h2>
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

