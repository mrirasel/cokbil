 @extends('layouts.app')

@section('content')
<div class="container">
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <button class="btn btn-primary">Total Cost:{{$cost}} /= </button>
            </div>
  
 

 

 <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  
                    <tr>
                    <th>Date</th>
                      <th>Cost Details</th>
                      <th>Cost Taka</th>
                      <th>Action</th>
                    </tr>
                  
                  
                  
                  	@foreach($showcost as $row)
                    <tr>
                      <td>{{$row->created_at}}</td>
                      <td>{{$row->w_cost}}</td>
                      <td>{{$row->cost_taka}}</td>
                      <td>
                      	<a href=""class="btn btn-info">Edit</a>
                      	<a href=""class="btn btn-danger">Delete</a>
                      </td>
                      
                    </tr>
                  @endforeach
                
                </table>
                
              </div>
                
 </div>

 
        @endsection