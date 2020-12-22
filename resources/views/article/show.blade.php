@extends('layout')
@section('social-header')
@endsection
@section('content')
    <div id="page" class="container">
        <div class="">
            <div class="title">
                <h2>{{$article->title}}</h2>
            </div>
            <p>{{$article->body}}</p>
        </div>
        <div class="">
            <p>
                @foreach($article->tags as $tag)
                    <a href="{{route('article.index',['tag'=> $tag->name])}}">{{$tag->name}}</a>
                @endforeach
            </p>
        </div>
    </div>
@endsection
