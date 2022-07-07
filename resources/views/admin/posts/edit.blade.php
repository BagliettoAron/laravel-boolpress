@extends('layouts.dashboard')

@section('content')
    <h1>modify post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route ('admin.posts.update', ['posts' => $post->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $post->title}}">
        </div>

        <div class="form-group">
            <label for="content">content</label>
            <textarea type="text" class="form-control" id="content" name="content" rows='10' >{{ old('title') ? old('title') : $post->title}}" </textarea>
          </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection