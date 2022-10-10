pagina show
@extends('app')

@section('metaTitle',$comics['title'])

@section('card')

 {{-- @dump($data)  --}}
<div class="container">
    <img src="{{$comics['thumb']}}" alt="">
<h2>{{$comics['title']}}</h2>
</div>
    
@endsection

