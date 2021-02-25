@extends('layouts.app')

@section('content')

	<section>
		<a href="{{ route('painting.create') }}"> Add a Painting </a>
	</section>

	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

	@foreach ($paintings as $painting)


		<div class="collectionGrid">

			<div class="gridItem">{{ $painting->title }}</div>
			<div class="gridItem">{{ $painting->description }}</div>

			<form action="{{ route('painting.destroy', $painting->id) }}" method="POST">
				@csrf
	            @method('DELETE')

				<a href="{{ route('painting.edit', $painting->id) }}">Edit</a>


	            <button type="submit" title="delete">Delete</button>
			</form>

		</div>

	@endforeach


@endsection