@extends('layouts.app')

@section('title', ucwords($painting->title) . ' — Kevin Kulla')

@section('content')

	<section class="pictures">

		<h2>{{ $painting->collection->title }}</h2>

        <div class="painting">
			<div class="frame">
				<img width="auto"
						srcset="{{ $painting->url }}?tr=w-300 300w,
								{{ $painting->url }}?tr=w-600 600w,
								{{ $painting->url }}?tr=w-900 900w,
								{{ $painting->url }}?tr=w-1200 1200w"

						src="{{ $painting->url }}"
						alt="{{ $painting->alt }}" />
			</div>
			<div class="card">
				<h2>{{ $painting->title }}</h2>
				<ul>
					<li>{{ $painting->height }}cm x {{$painting->width }}cm</li>
					<li>{{ $painting->medium }}</li>
					<li>{{ $painting->year }}</li>
				</ul>
			</div>
		</div>
    </section>

@endsection
