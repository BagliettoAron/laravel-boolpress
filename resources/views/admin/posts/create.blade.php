@extends('layouts.dashboard')


@section('content')
    
<h1>create new post</h1>

<form action = "{{ route('admin.posts.store') }}" method="POST">
    @method('POST')
    @csrf
    
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" id="content" name="content">
      </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection