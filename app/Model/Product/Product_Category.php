<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NestedSet;

class Product_Category extends Model
{
    use \Kalnoy\Nestedset\NodeTrait;
    protected $table = "product_category";
    
    // Lấy ra tất cả sản phẩm thuộc danh mục
    public function product(){
        return $this->hasMany('App\Model\Product\Product','category_id','id');
    }
}

