
@extends('layouts.dashboard')

@section('content')
    
<h1>{{ $post->title}}</h1>
<p>{{ $post->content }}</p>

<p>Category: {{ $category ? $category->name : 'nessuna categoria' }}</p>


<p>Tags:</p>

@forelse ($post->tags as $tag)
{{ $tag->name }} {{ $loop-> last ? '' : ',' }}
@empty
empty
@endforelse

<p>{{ $post->content }}</p>
<div class="d-flex">
    <a class='btn btn-primary' href="{{ route ('admin', ['post'=> $post->id]) }}">modifica</a>

    <form action="{{ route('admin.posts.destroy'), ['post'=>$post->id] }}" method="post">
        @csrf
        @method('DELETE')

        <button class="btn btn-danger" type="submit" >Delete</button>
    </form>
</div>
@endsection