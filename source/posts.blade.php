@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>

    <ul>
        @forelse ($posts->sortByDesc('date') as $post)
            <li>
                <img src={{ $post->image }} style="object-fit: cover; height: 40%; width: 40%;">
                <br>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>Written By {{ $post->author }}</small>
                <small>{{ $post->prettyDate() }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
