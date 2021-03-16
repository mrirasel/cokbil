@extends('layouts.app')
@section('content')

  <div class="container">

          
          
            <div class="card shadow mb-4 text-center">
              <button class="btn btn-primary">Total Income:{{$total}} /= </button> &nbsp &nbsp<button class="btn btn-info pull-right"style="padding-left:10px;">Total Unpaid:{{$unpaid}}</button>
            </div>
            
                <table class="table table-bordered table-striped"style="" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>Date</th>
                      <th>Name</th>
                     
                      <th>Product Name</th>
                      <th>Details</th>
                      <th>Base Price</th>
                      <th>Total Price</th>
                      <th>Recieve Price</th>
                      <th>Unpaid</th>
                      <th style="width: 15%">Action</th>
                    </tr>
              
                 </thead>

                  <tfoot>
                    <tr>
                     <th>Date</th>
                      <th style="width: 12%">Name</th>
                     
                      <th>Details </th>
                      <th>Details</th>
                      <th>Base Price</th>
                      <th>Total Price</th>
                      <th>Recieve Price</th>
                      <th>Unpaid</th>
                      <th style="width: 12%">Action</th>
                    </tr>
              
                 </tfoot>
                  <tbody>
                  
                  	@foreach ($allincome as $row)
                    <tr>
                      <td>{{$row->created_at}}</td>
                      <td>{{$row->c_name}}</td>
                     
                      <td>{{$row->producs->product_name}}</td>
                      <td>{{$row->details}}</td>
                      <td>{{$row->b_price}}</td>
                       <td>{{$row->t_price}}</td>
                      <td>{{$row->r_price}}</td>
                      <td>{{$row->g_price}}</td>
                    <td>
                     <a href="{{URL::to('editcustomer/'.$row->id)}}" class="btn btn-info btn-sm">edit</a>
                     <a href="" class="btn btn-danger btn-sm">view</a>
                    </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
                
              </div>
            
          
           {{$allincome->render ()}}
       
@endsection