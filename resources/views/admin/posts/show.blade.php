
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

<a class='btn btn-primary' href="{{ route ('admin', ['post'=> $post->id]) }}">modifica</a>
@endsection