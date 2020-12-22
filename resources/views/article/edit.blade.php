@extends('layout')
@section('social-header')
@endsection
@section('content')
    <div id="page" class="container">
        <div class="">
            <div class="title">
                <h2>Update Article</h2>
            </div>
            <form method="POST" action="/article/{{$article->id}}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" value="{{$article->title}}">
                </div>
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <textarea name="excerpt" class="form-control" id="excerpt" rows="6" >{{$article->excerpt}}</textarea>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control" id="body" rows="6">{{$article->body}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
