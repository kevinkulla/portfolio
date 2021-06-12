@extends('layouts.app')

@section('title', 'Kevin Kulla - About')

@section('description', 'Kevin Kulla is a Canadian figurative painter born and based in Peterborough, Ontario.')

@section('content')

	<section class="about">

    <article class="artistStatement">
        <h2>Artist's Statement</h2>
        <p>Words and numbers have always been mumbo-jumbo in my head. Instead, I’d cement an idea by erecting a mental-diorama—drawing inspiration from memories, influences, and current events. Using acrylic paint, and beginning without sketches or studies, I build emotionally-charged, imaginative scenes adorned with playful details. Iconography, such as lit cigarettes and revolvers, are wielded by quick-draw gunslingers and ruthless outlaws. Characters are often making intense eye-contact—breaking the fourth wall and pulling the viewer into the action.</p>
        <a href="{{ asset('documents/Kevin_Kulla_Artist_CV.pdf') }}">Download CV</a>
    </article>

    <article class="artistBio">
        <h2>Bio</h2>
        <p>Kevin Kulla [b. 1990] is a Canadian figurative painter born and based in Peterborough, Ontario. Kevin was awarded a Certificate of Achievement from the Canadian Portrait Society for his work Self Portrait in the 2020 Canadian Portrait Competition, “The Miracle of the Portrait.” His work is held in private collections across North America.</p>

    </article>



</section>

@endsection