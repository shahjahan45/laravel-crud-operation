@extends('layouts.master')
@section('content')

<div class="main-content">
    <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6">
              <h4>All Posts</h4>
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
                  <tr>
                    <th scope="col" style="width:y%">#</th>
                    <th scope="col" style="width:10%">image</th>
                    <th scope="col" style="width:20%">title</th>
                    <th scope="col" style="width:30%">description</th>
                    <th scope="col" style="width:10%">category</th>
                    <th scope="col" style="width:10%">publish date</th>
                    <th scope="col" style="width:20%">
                        
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td><img src="{{ asset('storage/' . $post->image) }}" alt="" width="80" height="80"></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                      <a class="btn-sm btn-success">show</a>
                      <a class="btn-sm btn-primary">Edit</a>
                      <a class="btn-sm btn-danger">update</a>

                    </td>
                  </tr>  
                  @endforeach
                 
                </tbody>
              </table>
        </div>
    </div>
    

</div>


    
@endsection