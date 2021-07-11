
@extends('layout.app') 

@section('title', 'Comics')

@section('content')
<div class="container">
<div class="title">
<h1>CURRENT SERIES</h1>
</div>
<section class="comic">
@foreach($comics as $index => $comic)
<div class="card">
<a href="{{route('comic', ['id' => $index])}}">
<div class="card_img">
<img src="{{$comic['thumb']}}" alt="">
</div>
<div class="card_title">
<p>{{$comic['series']}}</p>
</div>
</a>
</div>
@endforeach
</section>
<div class="load">
<button>LOAD MORE</button>
</div>
</div>

@endsection