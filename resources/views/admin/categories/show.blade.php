@extends('layouts.dashboard')

@section('content')
    <h2>Category: {{ $category->name }}</h2>
    <p>Slug: {{ $category->slug }}</p>

    <ul>
        @forelse ($category->posts as $post)
            <li>
                <a href="{{ route('admin.post.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
            </li>
                
            @empty
            <p>nessun post collegato</p>
            
        @endforelse
    </ul>
@endsection