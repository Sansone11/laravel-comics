
@extends('app')

@section('metaTitle','comics')

@section('card')

<article class="card">

    @foreach ($cards as $key => $card)
    <a href="{{ route('fumetto',['index' =>$loop->index'title'])}}"></a> 
     <img src="{{$card['thumb']}}" alt="">
    <h2>{{$card['title']}}</h2> 

     @endforeach 

</article>

@endsection