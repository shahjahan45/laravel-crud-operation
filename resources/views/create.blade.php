@extends('layouts.master')
@section('content')

<div class="main-content mt-5">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
            
        @endforeach
            
        @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Create Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success  mx-1" href="{{route('posts.index')}}">Back</a>
                </div>
            </div>
        </div>
        
        
        <div class="card-body">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group" >
                    <label for="" class="form-label ">image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group" >
                    <label for="" class="form-label mt-2">title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="category_id" class="form-label mt-2">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" >
                    <label for="" class="form-label mt-2">description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-2" >submit</button>
                </div>
            </form>

        </div>

    </div>
    

</div>


    
@endsection