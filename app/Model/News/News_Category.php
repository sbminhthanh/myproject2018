<?php

namespace App\Model\News;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NestedSet;

class News_Category extends Model
{
    use \Kalnoy\Nestedset\NodeTrait;
    protected $table = "news_category";
    
    // Lấy ra tất cả sản phẩm thuộc danh mục
    public function news(){
        return $this->hasMany('App\Model\News\News','category_id','id');
    }
}
