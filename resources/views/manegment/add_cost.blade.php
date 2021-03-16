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
  <form action="{{route('addspending')}}"method="post">
    @csrf
    <div class="form-group">
      <label for="product">Cost Details:</label>
      <input type="text" class="form-control p-input" id="email" placeholder="Enter Cost Details" name="w_cost"style="width: 40%">
    </div>

     <div class="form-group">
      <label for="product">Cost Taka:</label>
      <input type="text" class="form-control p-input" id="email" placeholder="Enter CostTaka" name="cost_taka"style="width: 40%">
    </div>
    
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>
</div>
</body>


   @endsection
