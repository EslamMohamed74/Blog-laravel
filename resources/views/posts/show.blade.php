@extends('layouts.app')

@section('content')
<div class="card mt-5">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body">
      <p><b>Title :- </b> {{$post->title}}</p>
    <p><b>Description :- </b></p>
    <p class="card-text">{{$post->description}}</p>
  </div>
</div>

@endsection