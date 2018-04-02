<?php

namespace App\Http\Controllers\Backend\API;
use SBMyStyle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News\News;


class API_News_Controller extends Controller
{
    public function __construct(){}

    public function load_List(Request $request){
        // $list['news'] = News::select('id','lang_code','news_title as title','alias','slug')->orderBy('order_num', 'desc')->offset(0)->limit(5)->get()->toArray();
        $page 	= $request->page;
        $limit 	= $request->limit;
        $offset = intval($page)*intval($limit);
        $list['news'] = News::select('id','lang_code','news_title as title','alias','slug')->orderBy('order_num', 'desc')->offset($offset)->limit($limit)->get()->toJson();
        return $list['news'];
        // var_dump($list['news']);
        // return SBMyStyle::enJson($list['news']);
    }
}
