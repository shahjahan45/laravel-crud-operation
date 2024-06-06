@extends('layouts.master')
@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Edit Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success  mx-1" href="{{route('posts.index')}}">Back</a>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group" >
                    <div>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="postimage" style="width: 200px">
                    </div>
                    <label for="" class="form-label mt-2">image</label>
                    <input type="file" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="" class="form-label mt-2">title</label>
                    <input type="text" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="category_id" class="form-label mt-2">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                            <option {{$category->id == $post->category_id ?'selected':''}} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" >
                    <label for="" class="form-label mt-2">description</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
                </div>
                <div class="form-group">
                    <div class="btn btn-primary mt-2">submit</div>
                </div>
            </form>

        </div>

    </div>
    

</div>


    
@endsection