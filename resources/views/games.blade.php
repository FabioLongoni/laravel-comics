@extends('layouts.app')

@section('mataTitle','DcComics - Games')

@section('content')
<section class="main__content">
  <div class="hero">
    <button id="btn__current">current series</button>
  </div>
  <div class="container container__card">
    @foreach ($games as $game)
    <article class="card">
      <img src="{{$game['thumb']}}" alt="">
      <div>{{ $game['series'] }}</div>
    </article>
    @endforeach
  </div>
  <div class="main__button container">
    <button id="load__button"><a href="#">load more</a></button>
  </div>
</section>
@endsection