@extends('layouts.app')
@section('content')








 <div class="container">
                   
                      <div class="card-body">
                          <h2 class="card-title">Customer Information form</h2>
                          @if ($errors->any())
                <div class="alert alert-danger">
                   <ul>
                      @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                     @endforeach
                 </ul>
               </div>
                 @endif
                          <form class="forms-sample"method="post"action="{{route('addcustomer')}}">
                            @csrf
                              <div class="form-group row">
                                  <label  class="col-sm-4 col-form-label"style="width: 50%">Customer Name</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Enter Customer Name"name="c_name"style="width: 50%">
                                  </div>
                                  
                              </div>
                              <div class="form-group row">
                                  <label class="col-sm-4 col-form-label"style="width: 50%">Customer Mobile</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control p-input" id="exampleInputPassword2" placeholder="Enter Customer Mobile"name="c_mobile"style="width: 50%">
                                  </div>
                              </div>

                               <div class="form-group row">
                                  <label class="col-sm-4 col-form-label"style="width: 50%">Customer Address</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control p-input" id="exampleInputPassword2" placeholder="Enter Customer Address"name="c_address">
                                  </div>
                              </div>

                             

                              <div class="form-group row">
                                  <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Product Name</label>
                                  <div class="col-sm-8">
                                    <select class="form-control"name="producs_id">
                                    @foreach($product as $row) 
                                  <option value="{{$row->id}}">{{$row->product_name}}</option>
                                  @endforeach
                                 </select>
                                  </div>
                              </div>

                              <div class="form-group row">
                                <script type="text/javascript">
                                  function sum() {
                                    var details=document.getElementById('details').value;
                                     var b_price=document.getElementById('b_price').value;
                                     var r_price=document.getElementById('r_price').value;
                                     var total= parseInt(details)*parseInt(b_price);
                                     var getprice=parseInt(total)-parseInt(r_price);
                                     if (!isNaN(total)) {
                                      document.getElementById('stotal').value=total;
                                     }
                                     if (!isNaN(getprice)) {
                                      document.getElementById('g_price').value=getprice;

                                     }
                                     if (!isNaN(getprice==0)) {
                                      document.getElementById('g_price').value=paid;
                                      
                                     }  
                                  }
                                </script>
                                  <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Product Details</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control p-input" id="details" placeholder="Enter Product Details"name="details"onkeyup="sum()"/>
                                  </div>
                              </div>
                              
                               <div class="form-group row">
                                  <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Base price</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control p-input" id="b_price" placeholder="Enter Base Price"name="b_price"onkeyup="sum()"/>
                                  </div>
                              </div>

                               <div class="form-group row">
                                  <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Total Price</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control p-input" id="stotal" value=""name="t_price">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Recieve Price</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control p-input" id="r_price" placeholder="Enter Recieve Amaunt"name="r_price"onkeyup="sum()"/>
                                  </div>
                              </div>

                               <div class="form-group row">
                                  <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Get Price</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control p-input" id="g_price" placeholder=" get price"name="g_price">
                                  </div>
                              </div>

                             <div class="form-group row">
                                  <label for="exampleInputPassword2" class="col-sm-4 col-form-label">Recieve By</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control p-input" id="exampleInputPassword2" placeholder="Enter Reciever Name"name="recieve_by">
                                  </div>
                              </div>
                              </div>
                              <style type="text/css">
                                .btn btn-success mt-4{
                                  padding-left: 200px;
                                  text-align:center; 
                                }
                              </style>
                              <button type="submit" class="btn btn-success mt-4"style="">Submit</button>
                          </form>
                           </div>
                                 
                      </div>
                  </div>
              </div>
@endsection