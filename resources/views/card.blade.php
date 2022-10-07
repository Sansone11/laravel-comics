@extends('app')
@section('metaTitle','comics')


@section('card')
<article class="card">
     <img :src="{{$data['img']}}" :alt="series">
    <h2>{{ $data['title'] }}</h2> 
    <h1>ciaone</h1>
</article>
@endsection