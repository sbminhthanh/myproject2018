<?php

namespace App\Model\News;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    public function news_category(){
        return $this->belongsTo('App\Model\News\News_Category','category_id','id');
    }
}
