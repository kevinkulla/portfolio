@extends('layouts.backend')

@section('title', 'Add Painting')

@section('content')

	<section class="pictures">

		<h2>Add a Painting</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <form method="POST" action="{{ route('painting.store') }}" enctype="multipart/form-data">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf



            <div class="form-group">
            	<label for="title">Title:</label>
            	<input type="text" name="title" autofocus>
            </div>

            <div class="form-group">
            	<label for="year">Year:</label>
            	<input type="number" min="2020" max="2099" step="1" value="{{ now()->year }}" name="year">
            </div>

            <div class="form-group">
            	<label for="medium">Medium:</label>
            	<input type="text" name="medium">
            </div>

            <div class="form-group">
            	<label for="height">Height:</label>
            	<input type="number" name="height">
            </div>

             <div class="form-group">
            	<label for="width">Width:</label>
            	<input type="number" step="0.1" name="width">
            </div>

             <div class="form-group">
            	<label for="collection">Collection:</label>
            	<select name="collection">
					<option value="">--Please choose an option--</option>
					@foreach($collections as $collection)
						<option value="{{ $collection->id }}">{{ $collection->title }}</option>
					@endforeach
            	</select>
            </div>

            <div class="form-group">
            	<label for="image">Image:</label>
            	<input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
            	<label for="alt">Alt Text:</label>
            	<textarea name="alt"></textarea>
            </div>
{{--
            <div class="form-group">
                <label for="tags">Tags:</label>
                <input type="text" name="tags">
            </div> --}}



            <button>Submit</button>

        </form>

    </section>

@endsection