@extends('layouts.app')

@section('title', 'Add Painting')

@section('content')

	<section class="pictures">

		<h2>Add a Collection</h2>

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

            <form method="POST" action="{{ route('painting.update', $painting->id) }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            @method('PUT')

              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ $painting->title }}">
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" name="year" value="{{ $painting->year }}">
            </div>

            <div class="form-group">
                <label for="medium">Medium:</label>
                <input type="text" name="medium" value="{{ $painting->medium }}">
            </div>

            <div class="form-group">
                <label for="height">Height:</label>
                <input type="text" name="height" value="{{ $painting->height }}">
            </div>

             <div class="form-group">
                <label for="width">Width:</label>
                <input type="text" name="width" value="{{ $painting->width }}">
            </div>

             <div class="form-group">
                <label for="collection">Collection:</label>
                <select name="collection">
                    <option value="">--Please choose an option--</option>
                    @foreach($collections as $collection)
                        <option value="{{ $collection->title == $collection->collection ? 'selected' : '' }}">{{ $collection->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control" value="{{ $collection->url }}">
            </div>

            <div class="form-group">
                <label for="alt">Alt Text:</label>
                <textarea name="alt">{{ $collection->alt }}</textarea>
            </div>


            <button>Submit</button>

        </form>

    </section>

@endsection