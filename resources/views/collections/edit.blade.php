@extends('layouts.app')

@section('title', 'Add Collection')

@section('content')

	<section class="pictures">

		<h2>Add a Collection</h2>


            <form method="POST" action="{{ route('collection.update', $collection->slug) }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            @method('PUT')

            <div class="form-group">
            	<label for="title">Title:</label>
            	<input type="text" name="title" value="{{ $collection->title }}">
            </div>

            <div class="form-group">
            	<label for="description">Description:</label>
            	<textarea name="description" id="description">{{ $collection->description }}</textarea>
            </div>


            <button>Submit</button>

        </form>

    </section>

@endsection