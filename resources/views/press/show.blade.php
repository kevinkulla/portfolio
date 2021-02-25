@extends('layouts.app')

@section('title', $collection->title)

@section('content')

	<section class="pressRelease">
        <h2>{{ $press->title }}</h2>
        <p>{{ $press->press_date }}</p>
        <p>{{ $press->description }}</p>
        <img src="/images/press/{{ $press->photos }}" alt="">


    </section>

@endsection

