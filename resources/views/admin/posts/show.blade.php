
@extends('layouts.dashboard')

@section('content')
    
<h1>{{ $post->title}}</h1>
<p>{{ $post->content }}</p>

<a class='btn btn-primary' href="{{ route ('admin', ['post'=> $post->id]) }}">modifica</a>
@endsection