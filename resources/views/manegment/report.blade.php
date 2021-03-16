@extends('layouts.app')
@section('content')

  <div class="container">

          
          
            <div class="card shadow mb-4 text-center">
              <h1 style="text-align: center; color: green;">Wellcome to Business Software</h1>
            
                <h3 style="text-align: center;">Total Income:{{$tp }}/= </h3>
                <h3 style="text-align: center;">Total Cost:{{$ct }}/= </h3>
                <h4>Date:20-08-20 to 30-09-20</h4>
            </div>
            
                <table class="table table-bordered table-striped"style="" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>Date</th>
                      <th>Name</th>
                      <th>Mobile </th>
                     
                      <th>Details</th>
                      <th>Base Price</th>
                      <th>Total Price</th>
                      <th>Recieve Price</th>
                      <th>Unpaid</th>
                      <th>Reciever</th>
                    </tr>
              
                 </thead>

                  <tfoot>
                    <tr>
                     <th>Date</th>
                      <th>Name</th>
                      <th>Mobile </th>
                    
                      <th>Details</th>
                      <th>Base Price</th>
                      <th>Total Price</th>
                      <th>Recieve Price</th>
                      <th>Unpaid</th>
                      <th>Reciever</th>
                    </tr>
              
                 </tfoot>
                  <tbody>
                  
                  	@foreach ($search as $row)
                    <tr>
                      <td>{{$row->created_at}}</td>
                      <td>{{$row->c_name}}</td>
                      <td>{{$row->c_mobile}}</td>
                  
                      <td>{{$row->details}}</td>
                      <td>{{$row->b_price}}</td>
                       <td>{{$row->t_price}}</td>
                      <td>{{$row->r_price}}</td>
                      <td>{{$row->g_price}}</td>
                     <td>{{$row->recieve_by}}</td>  
                    </tr>
                   @endforeach
                  </tbody>
                </table>
                
              
            
   <br>
            
            
            <h1 style="text-align: center;">COST TABLE</h1>
            <p>Date:</p>
                <table class="table table-bordered table-striped"style="" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>Date</th>
                      <th>Cost Details</th>
                      <th>Cost Taka</th>
                     
                    </tr>
              
                 </thead>

                  <tfoot>
                    <tr>
                     <th>Date</th>
                      <th>Cost Details</th>
                      <th>Cost Taka</th>
                     
                    </tr>
              
                 </tfoot>
                  <tbody>
                  
                    @foreach ($cost as $row)
                    <tr>
                      <td>{{$row->created_at}}</td>
                      <td>{{$row->w_cost}}</td>
                      <td>{{$row->cost_taka}}</td>
                  
                    </tr>
                   @endforeach
                  </tbody>
                </table>
                
              </div>
            
          
        </div>
       
@endsection