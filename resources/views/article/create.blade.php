@extends('layout')
@section('social-header')
@endsection
@section('content')
    <div id="page" class="container">
        <div class="">
            <div class="title">
                <h2>Create New Article</h2>
            </div>
            <form method="POST" action="/article">
                {{ @csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title"
                           type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           id="title"
                           placeholder="Enter title"
                           value="{{old('title')}}"
                    >
                    @error('title')
                        <p class="text-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <textarea name="excerpt"
                              class="form-control @error('excerpt') is-invalid @enderror"
                              id="excerpt"
                              rows="6"
                    >{{old('excerpt')}}</textarea>
                    @error('excerpt')
                    <p class="text-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body"
                              class="form-control @error('body') is-invalid @enderror"
                              id="body"
                              rows="6"
                    >{{old('body')}}</textarea>
                    @error('body')
                    <p class="text-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Tags</label>
                    <select name="tags[]" multiple class="form-control">
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    @error('tags')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
