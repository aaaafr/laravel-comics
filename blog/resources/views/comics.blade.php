
@extends('layout.app') 

@section('title', 'Comics')

@section('content')
<div class="container">
<div class="title">
<h1>CURRENT SERIES</h1>
</div>
<section class="comic">
@foreach($comics as $comic)
<div class="card">
<div class="img_series">
<img src="{{$comic['thumb']}}" alt="">
</div>
<div class="title_series">
<p>{{$comic['series'] }}</p>
</div>
</div>
@endforeach
</section>
</div>

@endsection