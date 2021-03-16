<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
         $total=DB::table('customers')
     
     ->sum('t_price');
     $cost=DB::table('costs')->sum('cost_taka');
     
        return view('home',compact('total','cost'));
    }

     public function product()
    {
        return view('manegment.add_product');
    }

     public function dashboard()
    {
       
        $total=DB::table('customers')
     
     ->sum('t_price');
     $cost=DB::table('costs')->sum('cost_taka');
     
        return view('home',compact('total','cost'));
    }
}
