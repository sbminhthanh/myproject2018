<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Product_Tab extends Model
{
    protected $table = "product_tab";
    
    public function news_tab(){
        return $this->belongsTo('App\Model\Product\Product_Tab','product_id','id');
    }
}
