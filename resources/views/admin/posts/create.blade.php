@extends('admin.layouts.base')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

            <h1>Create your own post!</h1>

            <form method="POST" action="{{route('admin.posts.store')}}">

                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="id_category">Category</label>
                        <select class="form-control" id="id_category" name="id_category">

                            <option value="">No category selected</option>

                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name }}</option>        
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="content">Post Content</label>
                        <textarea class="form-control" id="content" rows="10" name="content">{{ old('content') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
