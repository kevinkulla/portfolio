@extends('layouts.app')

@section('content')

	<section>
		<a href="{{ route('collection.create') }}"> Add a Collection </a>
	</section>


	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


	@foreach ($collections as $collection)



		<div class="collectionGrid">

			<div class="gridItem">{{ $collection->title }}</div>
			<div class="gridItem">{{ $collection->description }}</div>

			<form action="{{ route('collection.destroy', $collection->slug) }}" method="POST">
				@method('DELETE')
				@csrf


				<a href="{{ route('collection.edit', $collection->id) }}">Edit</a>


	            <button type="submit" title="delete">Delete</button>
			</form>

		</div>

	@endforeach


@endsection