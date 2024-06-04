@extends('layouts.master')
@section('content')

<div class="main-content">
    <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6">
              <h4>Trash Posts</h4>
            </div>
            <div class="justify-content-end col-md-5 d-flex">
              <a class="btn btn-success  mx-1">back</a>
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
                  <tr>
                    <th scope="row">1</th>
                    <td><img src="https://picsum.photo/200" alt=""></td>
                    <td>Lorem ipsum dolor sit amet, cons</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab odio veritatis quas et provident? Repudiandae repellendus mollitia nisi voluptas maiores nam expedita debitis fugiat. Incidunt itaque velit explicabo pariatur.</td>
                    <td>News</td>
                    <td>2-5-22</td>
                    <td>
                      <a class="btn-sm btn-success">show</a>
                      <a class="btn-sm btn-primary">Edit</a>
                      <a class="btn-sm btn-danger">update</a>

                    </td>

                  </tr>
                  
                </tbody>
              </table>
        </div>
    </div>
    

</div>


    
@endsection