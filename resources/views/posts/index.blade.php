@extends('layouts.app')

@section('content')
<div class="row justify-content-center my-5">
  <div class="col-4">
    <a href="posts/create" class="btn btn-success">Create Post</a>
  </div>
</div>
<div class="row">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">description</th>
        <th scope="col">Creted at</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $index => $value)
      <tr>
        <th scope="row">{{$value['id']}}</th>
        <td>{{$value['title']}}</td>
        <td>{{$value['description']}}</td>
        <td>{{$value['created_at']->format("yy-m-d")}}</td>
        <td>
          <a class="btn btn-info" href="{{route('posts.show',['post' => $value['id'] ])}}">View</a>
          <a class="btn btn-primary" href="{{route('posts.edit',['post' => $value['id'] ])}}">Edit</a>
          <form method="post" action="/posts/{{$value['id']}}" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure Want Delete This Post ?');">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  <nav aria-label="Page navigation example">
  <ul class="pagination">
  {{$posts->links()}}
  </ul>
</nav>
</div>

@endsection