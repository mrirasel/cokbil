 @extends('layouts.app')

@section('content')
<div class="container">
 <table class="table table-bordered table-striped"style="font-size:20px; " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Sl No</th>
                      <th>Product Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sl No</th>
                      <th>Product Name</th>
                      <th>Action</th>
                     
                    </tr>
                  </tfoot>
                   
                   <tbody>
                  	@foreach($show as $row)
                    <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->product_name}}</td>
                      <td>
                      	<a href=""class="btn btn-info">Edit</a>
                      	<a href=""class="btn btn-danger">Delete</a>
                      </td>
                      
                    </tr>
                  @endforeach
                </tbody>
                </table>
                {{$show->render()}}
 </div>

 
        @endsection