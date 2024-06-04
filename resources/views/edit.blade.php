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
            <form action="">
                <div class="form-group" >
                    <label for="" class="form-label">image</label>
                    <input type="file" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="" class="form-label mt-2">title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="" class="form-label mt-2">description</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="btn btn-primary mt-2">submit</div>
                </div>
            </form>

        </div>

    </div>
    

</div>


    
@endsection