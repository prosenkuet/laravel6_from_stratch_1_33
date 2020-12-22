@extends('layout')
@section('social-header')
@endsection
@section('content')
    <div id="page" class="container">
        <div class="column1">
            <div class="title">
                <h2>Maecenas luctus</h2>
            </div>
            <p>This is <strong>Wide-Range</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
        </div>
        @forelse($articles as $article)
            <div class="column2">
                <div class="title">
                    <h2><a href="{{ route('article.show', $article) }}">{{ $article->title }}</a></h2>
                </div>
                <img src="images/pic01.jpg" width="282" height="150" alt="" />
                <p>{{ $article->body }}</p>
            </div>
        @empty
            <p>No Relevant Article.</p>
        @endforelse

    </div>
    <div id="portfolio-wrapper">
        <div id="portfolio" class="container">
            <div class="title">
                <h2>Aenean elementum</h2>
                <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span> </div>
            <div class="column1">
                <div class="box">
                    <h3>Vestibulum venenatis</h3>
                    <p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
                    <a href="#" class="button">Etiam posuere</a> </div>
            </div>

        </div>
    </div>
@endsection
