
@extends('layout.app') 

@section('title', 'Comic')

@section('content')

<div class="card">
<div class="card_img">
<img src="{{$comic['thumb']}}" alt="">
</div>
<div class="card_title">
<p>{{$comic['title']}}</p>
</div>
<div class="price">
<p>{{$comic['price']}}</p>
</div>
<div class="description">
<p>{{$comic['description']}}</p>
</div>
<div class="talent">
<div class="art">
@foreach (artist in artists)
<div class="art">
</div>
@endforeach
</div>
</div>
</div>


@endsection