@extends('layouts.backend')

@section('content')

	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

	@foreach ($paintings as $painting)


		<div class="painting">

			<h3 class="gridItem">{{ $painting->title }}</h3>
			<img src="{{ $painting->thumbnail }}" />

			<form action="{{ route('painting.destroy', $painting->id) }}" method="POST">
				@csrf
	            @method('DELETE')

				<a href="{{ route('painting.edit', $painting->id) }}">Edit</a>


	            <button type="submit" title="delete">Delete</button>
			</form>

		</div>

	@endforeach


@endsection