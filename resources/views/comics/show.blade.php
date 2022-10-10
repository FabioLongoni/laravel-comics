@extends('layouts.app')

@section('mataTitle',$comic['title'])

@section('content')

<div>
  <div class="hero">
  </div>
  <img src="{{$comic['thumb']}}" alt="">
</div>

@endsection