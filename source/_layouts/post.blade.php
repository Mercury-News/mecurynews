@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>

    @if ($page->image)
        <img src="{{ $page->image }}" style="object-fit: cover; height: 250px; width: 100%;">
    @endif

    <p>
        <strong>{{ $page->prettyDate('F j, Y') }}</strong><br>
        @foreach ($page->tags as $tag)
            <a href="/tags/{{ $tag }}">{{ $tag }}</a>
            {{ $loop->last ? '' : '-' }}
        @endforeach
    </p>

    <blockquote data-phpdate="{{ $page->date }}">
        <em>WARNING: This post is over a year old. Some of the information this contains may be outdated.</em>
    </blockquote>

    <hr>

    <p><strong>DISCLAIMER: </strong>Articles on this website have been written by people all over the world and do not necessarily represent the views of the site owners and creators</p>

    @yield('postContent')

    <hr>

    @include('_partials.share')

    @if ($page->comments)
        @include('_partials.comments')
    @else
        <p>Comments are not enabled for this post.</p>
    @endif
    <img src='https://res.cloudinary.com/maxsamazingsite/image/upload/v1655429058/Mercury%20News/Proud_Sponsor_psmjiv.png' alt='Proud Sponsor Of Beam Prime Records'>
@endsection
