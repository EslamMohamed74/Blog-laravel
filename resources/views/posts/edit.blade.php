@extends('layouts.app')

@section('content')
<h1>Edit Post </h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="post" action="/posts/{{$post->id}}">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control" value="{{$post->title}}">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea  name="description" class="form-control" rows="3" > {{$post->description}}</textarea>
  </div>


  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection