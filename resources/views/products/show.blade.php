pagina show
@extends('app')

@section('metaTitle',$card['title'])

@section('card')

{{-- @dump($card) --}}
<div class="container">
    <img src="{{$card['thumb']}}" alt="">
<h2>{{$card['title']}}</h2>
</div>
    
@endsection

