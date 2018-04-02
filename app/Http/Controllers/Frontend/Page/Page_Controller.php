<?php

namespace App\Http\Controllers\Frontend\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Page_Controller extends Controller
{
    // Home
    public function getView_Home(){
    	return view('page.other.home');
    } 

    // News
    // ____ Home
        public function getView_News_Home(){
            $data = view('page.news.theme-skin.home');
            return $data;  
        }

    // ____ Category
        public function getView_News_Category(){
            return view('page.news.theme-skin.category');
        }

    // ____ News
        public function getView_News_News(){
            return view('page.news.theme-skin.category');
        }
}
