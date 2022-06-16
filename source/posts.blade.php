@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>

    <ul>
        @forelse ($posts->sortByDesc('date') as $post)
            <li>
                <img src="{{ $page->image }}" style="object-fit: cover; height: 70px; width: 20%;">
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate() }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
