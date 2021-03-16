<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
     protected $fillable = [
        'c_name','c_mobile','c_address','producs_id','details','b_price','t_price','r_price','g_price','recieve_by',
    ];
    public function producs()
    {
    	return $this->belongsTo(producs::class);
    }

    public function setTotalAttribute()
    {
    $this->t_price=$this->details * $this->b_price;
    }

   public function getprice()
   {
   	  $this->g_price=$this->t_price - $this->r_price;
   }
}
