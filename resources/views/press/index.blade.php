@extends('layouts.app')

@section('content')

	<section>
		<a href="{{ route('press.create') }}"> Add a Press Release </a>
	</section>


	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


	@foreach ($pressRelease as $press)



		<div class="collectionGrid">

			<div class="gridItem">{{ $press->title }}</div>
			<div class="gridItem">{{ $press->description }}</div>

			<form action="{{ route('press.destroy', $press->id) }}" method="POST">
				@csrf
	            @method('DELETE')

				<a href="{{ route('press.edit', $press->id) }}">Edit</a>


	            <button type="submit" title="delete">Delete</button>
			</form>

		</div>

	@endforeach


@endsection