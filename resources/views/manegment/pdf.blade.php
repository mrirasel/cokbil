
<body>
  <div class="container">
   <h1 style="text-align: center; color: green;">Wellcome to Business Manegment Software</h1>
            
                <h3 style="text-align: center;">Total Income:{{$tp }}/= </h3>
                <h3 style="text-align: center;">Total Cost:{{$ct}}/= </h3>
                <h4 style="text-align: center;">Date:01-08-20 to 14-09-20</h4>

 <table class="table table-dark table-striped"style="" id="dataTable" width="100%" cellspacing="0" border="1">
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

                  
                  <tbody>
                  
                  	@foreach ($pdfreport as $row)
                    <tr>
                      <td style="text-align: center;">{{$row->created_at}}</td>
                    <td style="text-align: center;">{{$row->c_name}}</td>
                      <td style="text-align: center;">{{$row->c_mobile}}</td>
                  
                      <td style="text-align: center;">{{$row->details}}</td>
                      <td style="text-align: center;">{{$row->b_price}}</td>
                       <td style="text-align: center;">{{$row->t_price}}</td>
                      <td style="text-align: center;">{{$row->r_price}}</td>
                      <td style="text-align: center;">{{$row->g_price}}</td>
                     <td style="text-align: center;">{{$row->recieve_by}}</td>  
                    </tr>
                   @endforeach
                  </tbody>
                </table>

                <br>
            
            
            <h1 style="text-align: center;">COST TABLE</h1>
           
                <table class="table table-bordered table-striped"style="" id="dataTable" width="100%" cellspacing="0" border="1">
                  <thead>
                    <tr>
                     <th>Date</th>
                      <th>Cost Details</th>
                      <th>Cost Taka</th>
                     
                    </tr>
              
                 </thead>

                 
              
                  
                    @foreach ($costpdf as $row)
                    <tr>
                      <td style="text-align: center;">{{$row->created_at}}</td>
                      <td style="text-align: center;">{{$row->w_cost}}</td>
                      <td style="text-align: center;">{{$row->cost_taka}}</td>
                  
                    </tr>
                   @endforeach
                  
                </table>
            </div>
          </body>

               
              </html>