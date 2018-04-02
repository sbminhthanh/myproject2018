<?php

namespace App\Model\News;

use Illuminate\Database\Eloquent\Model;

class News_Tab extends Model
{
    protected $table = "news_tab";
    
    public function news_tab(){
        return $this->belongsTo('App\Model\News\News_Tab','news_id','id');
    }
}
