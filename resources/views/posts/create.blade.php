@extends('layouts.app')

@section('content')
<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/posts">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea  name="description" class="form-control" rows="3"></textarea>
  </div>

  <!-- <div class="form-group">
            <label for="exampleInputPassword1">Created At</label>
            <input name="created_at" type="text" class="form-control"  >
          </div> -->

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection