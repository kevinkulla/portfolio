@extends('layouts.app')

@section('title', 'Add Press')

@section('content')

	<section class="pictures">

		<h2>Add A Press Release</h2>


            <form method="POST" action="{{ route('press.update', $press->id) }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            @method('PUT')

            <div class="form-group">
            	<label for="title">Title:</label>
            	<input type="text" name="title" value="{{ $press->title }}">
            </div>

            <div class="form-group">
            	<label for="description">Description:</label>
            	<textarea name="description" id="description">{{ $press->description }}</textarea>
            </div>

             <div class="form-group">
                <label for="photos">Image:</label>
                <input type="file" name="photos" class="form-control">
            </div>

            <div class="form-group">
                <label for="press_date">Press Release Date</label>
                <input type="date" name="press_date" value="{{ $press->press_date }}">
            </div>

            <button>Submit</button>

        </form>

    </section>

@endsection