<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <style type="css">
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width:50%;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav>
                <img src="https://res.cloudinary.com/maxsamazingsite/image/upload/v1655439542/Mercury%20News/logo_size_rcpngp.jpg" alt="Mercury News Logo" class="center">
                <br>
                <strong>{{ $page->site->title }}</strong><br>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/posts">News</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
            <small>
                &copy; <span data-year></span> {{ $page->owner->name }} &nbsp;&bull;&nbsp;
                <a href="/feed.atom">RSS</a> &nbsp;&bull;&nbsp;
                Maintained by Mercury News &nbsp;&bull;&nbsp;
                <a href="https://github.com/maxherelovescode/mecurynews">GitHub repo</a>
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production && $page->services->analytics, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
