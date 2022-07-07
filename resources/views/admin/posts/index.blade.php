@extends('layouts.dashboard')

@section('content')
    
<h1>page index</h1>

<div class="row row-cols-3">
    @foreach ($posts as $post)
        
    <div class="col">
        <div class="card" style="width: 18rem;">
            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Read Post</a>
            </div>
          </div>
    </div>
    @endforeach
</div>
@endsection
