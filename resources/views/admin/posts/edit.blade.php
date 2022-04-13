@extends('admin.layouts.base')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

            <h1>Edit your own post!</h1>

            <form method="POST" action="{{route('admin.posts.update', $post->id)}}">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
                    </div>

                    <div class="form-group">
                        <label for="content">Post Content</label>
                        <textarea class="form-control" id="content" rows="10" name="content">{{ old('content', $post->content) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
