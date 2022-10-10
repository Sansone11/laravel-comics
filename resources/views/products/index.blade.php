
@extends('app')

@section('metaTitle','comics')

@section('card')

<article class="card">

    @foreach ($cards as $key => $card)
    <a href="{{ route('fumetto',['index' =>$loop->index])}}">
        <img src="{{$card['thumb']}}" alt="">
        <h2>{{$card['title']}}</h2>
    </a> 
     

     @endforeach 

</article>

@endsection