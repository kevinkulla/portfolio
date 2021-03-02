@extends('layouts.backend')

@section('content')

	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


	@foreach ($collections as $collection)



		<div class="collectionBlock">

			<h3 class="title">{{ $collection->title }}</h3>
			<p class="description">{{ $collection->description }}</p>

			<form action="{{ route('collection.destroy', $collection->slug) }}" method="POST">
				@method('DELETE')
				@csrf


				<a href="{{ route('collection.edit', $collection->id) }}">Edit</a>


	            <button type="submit" title="delete">Delete</button>
			</form>

		</div>

	@endforeach


@endsection