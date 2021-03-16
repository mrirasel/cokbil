<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producs;
class ProducsController extends Controller
{
    public function addproduct(Request $req)
    {
    	 $validatedData = $req->validate([
        'product_name' => 'required|max:255 |min:4',
       
        ]);

    	$product=new producs;
    	
    	$product->product_name=$req->product_name;
    	$product->save();
    	
   $notification =array(
    'message' => 'I am a successful message!', 
    'alert-type' => 'success'
);
        if ($product) {
            # code...
        
return Redirect()->back()->with($notification);
  }  	 
    
}

public function showproduct()
{
	$show=producs::paginate(3);
    return view('manegment.show_product',compact('show'));
}
}
