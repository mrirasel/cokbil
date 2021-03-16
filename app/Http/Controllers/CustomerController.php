<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\producs;
use DB;
use PDF;
class CustomerController extends Controller
{
   public function customer()
   {
   	$product=producs::all();
   	return view('manegment.add_customer',compact('product'));
   }

    public function addcustomer(Request $req)
   {
   	$customer=new customer;
   	$customer->c_name=$req->c_name;
   	$customer->c_mobile=$req->c_mobile;
   	$customer->c_address=$req->c_address;
   	$customer->producs_id=$req->producs_id;	
   	$customer->details=$req->details;
   	$customer->b_price=$req->b_price;
   	$customer->setTotalAttribute();
   	$customer->r_price=$req->r_price;
   	$customer->getprice();
    $customer->recieve_by=$req->recieve_by;	
    
    $customer->save();
    if ($customer) {
    	 $notification =array(
    'message' => 'I am a successful message!', 
    'alert-type' => 'success'
);
    	return Redirect()->back()->with($notification);
    }
   	
   }

   public function allincome()

   {
   	$allincome=customer::paginate(5);
    $total=DB::table('customers')
     
     ->sum('t_price');

      $unpaid=DB::table('customers')
     
     ->sum('g_price');
    
   	return view('manegment.all_income',compact('allincome','total','unpaid'));
   }

   public function report(Request $req)
   {
     $method = $req->method();
        if ($req->isMethod('post')) 
        {
            $from=$req->input('date_from');
            $to=$req->input('date_to');
            if ($req->has('search')) {
                $search=DB::select("SELECT * FROM customers WHERE created_at BETWEEN '$from' AND '$to'");
                $cost=DB::select("SELECT * FROM costs WHERE created_at BETWEEN '$from' AND '$to'");
                $tp=DB::table('customers')
                ->whereBetween('created_at',[$from,$to])
                ->sum('t_price');
                
                
                 $ct=DB::table('costs')
                ->whereBetween('created_at',[$from,$to])
                ->sum('cost_taka');
               
               

                return view('manegment.report',compact('search','cost','tp','ct'));
            }
            elseif ($req->has('pdf')) {
               $pdfreport=DB::select("SELECT * FROM customers WHERE created_at BETWEEN '$from' AND '$to'");
                $costpdf=DB::select("SELECT * FROM costs WHERE created_at BETWEEN '$from' AND '$to'");
                $tp=DB::table('customers')
                ->whereBetween('created_at',[$from,$to])
                ->sum('t_price');

                 $ct=DB::table('costs')
                ->whereBetween('created_at',[$from,$to])
                ->sum('cost_taka');

               $pdf= PDF::loadview('manegment.pdf',compact('pdfreport','tp','ct','costpdf'),['PDFReport'=> $pdfreport ,$costpdf])->setPaper('a4','lanscape');
                return $pdf->download('PDF-report.pdf');
            }
        } 
     
   }
   public function profile()
   {
    return view ('manegment.profile');
   }
     public function editprofile()
   {
    return view ('manegment.editprofile');
   }
   public function editcustomer($id)
   {
     $customer=customer::FindorFail($id);
      $product=producs::all();
     return view('manegment.edit_customer',compact('customer','product'));
   }
}
