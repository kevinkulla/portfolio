@extends('layouts.backend')

@section('title', 'Add Collection')

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