
@extends('app')

@section('metaTitle','comics')

@section('card')

<article class="card">

    @foreach ($cards as $card)
         
     <img src="{{$card['thumb']}}" alt="">
    <h2>{{$card['title']}}</h2> 

    {{-- <h1>ciaone</h1> --}}

     @endforeach 

</article>

@endsection