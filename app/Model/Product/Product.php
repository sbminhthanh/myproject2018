<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function product_category(){
        return $this->belongsTo('App\Model\Product\Product_Category','category_id','id');
    }
	
	// Lấy ra tất cả sản phẩm thuộc danh mục
    public function product_tab(){
        return $this->hasMany('App\Model\Product\Product_Tab','product_id','id');
    }
}
