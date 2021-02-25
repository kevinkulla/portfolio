@extends('layouts.app')

@section('title', 'Add Collection')

@section('content')

	<section class="pictures">

		<h2>Add a Collection</h2>


            <form method="POST" action="{{ route('collection.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
            	<label for="title">Title:</label>
            	<input type="text" name="title">
            </div>

            <div class="form-group">
            	<label for="description">Description:</label>
            	<textarea name="description" id="description"></textarea>
            </div>


            <button>Submit</button>

        </form>

    </section>

@endsection