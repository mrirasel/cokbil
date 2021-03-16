<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cost;
use DB;
class CostController extends Controller
{
    public function addcost()
    {
    	return view('manegment.add_cost');
    }

    public function spending(Request $req)

    {
    	$cost=new cost;
    	$cost->w_cost=$req->w_cost;
    	$cost->cost_taka=$req->cost_taka;
    	$cost->save();
    	return Redirect()->back();
    }

    public function showcost()

    {

    	$showcost=cost::all();
         $cost=DB::table('costs')->sum('cost_taka');
      
    	return view('manegment.show_cost',compact('showcost','cost'));
    }

}
