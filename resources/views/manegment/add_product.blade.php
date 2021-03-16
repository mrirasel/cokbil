 @extends('layouts.app')

@section('content')

     
<body>
<div class="container">
<div class="content-wrapper">  <h2>Vertical (basic) form</h2>
	<div>
   @include('flash_message')
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="{{route('addproduct')}}"method="post">
    @csrf
    <div class="form-group">
      <label for="product">Product Name:</label>
      <input type="text" class="form-control p-input" id="email" placeholder="Enter product Name" name="product_name"style="width: 40%">
    </div>
    
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>
</div>
</body>


   @endsection
