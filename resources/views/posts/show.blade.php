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

<div class="card mt-5">
  <div class="card-header">
    Post Creator Info
  </div>
  <div class="card-body">
      <p><b>Name :- </b> {{$post->user->name}}</p>
      <p><b>Email :- </b> {{$post->user->email}}</p>
      <p><b>Created At :- </b> {{$post->user->created_at->format("l dS \of F Y H:i:s a")}}</p>
  </div>
</div>

@endsection