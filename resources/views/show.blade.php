@extends('layouts.master')
@section('content')

<div class="main-content">
    <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6">
              <h4>Show Posts</h4>
            </div>
            <div class="justify-content-end col-md-5 d-flex">
              <a class="btn btn-success mx-1" href="{{route('posts.create')}}">create</a>
              <a class="btn btn-dark  mx-1">Trash</a>
            </div>
          </div>
            
            
            
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered border-dark">

                <thead style="background-color:azure">
                  
                </thead>
                <tbody>
                  <tr>
                    <th>ID</th>
                    <td>{{$post->id}}</td>
                  </tr>
                  <tr>
                    <th>image</th>
                    <td><img src="{{ asset('storage/' .$post->image) }}" alt="post image" style="width: 200px"></td>
                  </tr>
                  <tr>
                    <th>title</th>
                    <td>{{$post->title}}</td>
                  </tr>
                  <tr>
                    <th>description</th>
                    <td>{{$post->description}}</td>
                  </tr>
                  <tr>
                    <th>category</th>
                    <td>{{$post->category_id}}</td>
                  </tr>
                  <tr>
                    <th>publish date</th>
                    <td>{{date('d-m-y',strtotime($post->created_at))}}</td>
                  </tr>
                  

                  
                 
                  
                 
                 
                </tbody>
              </table>
        </div>
    </div>
    

</div>


    
@endsection