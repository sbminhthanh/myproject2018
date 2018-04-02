<?php

namespace App\Http\Controllers\Backend\News;

use SBMyStyle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News\News_Category;
use App\Model\News\News;
use App\Model\News\News_Tab;
use Kalnoy\Nestedset\NestedSet;
use Config;

class News_Controller extends Controller
{
	public function __construct(){
        $__URL['cancel'] = 'admin/news/news/list';
        $__URL['create'] = 'admin/news/news/create';
        $__URL['update'] = 'admin/news/news/update';
        $__URL['delete'] = 'admin/news/news/delete';
        View()->share('__URL',$__URL);

        // Upload Images
        $__config['images']['status']   = Config::get('constants.file.images.news.news.upload');
        $__config['images']['muti']     = Config::get('constants.file.images.news.news.muti');
        $__config['images']['limit']    = Config::get('constants.file.images.news.news.limit');

        // Attribute
        $__config['attr']['status'] = Config::get('constants.form.news.news.status');
        $__config['attr']['sticky'] = Config::get('constants.form.news.news.sticky');
        $__config['attr']['hot']    = Config::get('constants.form.news.news.hot');
        $__config['attr']['new']    = Config::get('constants.form.news.news.new');
        View()->share('__config',$__config);
    }

//____________________________________________________________________________________________

    // |________ Get max order num
    private function Max_order_num(){
        $max = News::max('order_num');
        return $max+1;
    }

// ____________________________________________________________________________________________
// Action
// |____ Add [Insert] : Load
    public function load_List(){
        $list['news'] = News::orderBy('order_num', 'desc')->get();
        return view('admin.page.news.news.list',['list'=>$list]);
    }

    public function load_Create(){
        $list['category'] = News_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();               
        // $this->Sort_Tree($select_news_category,0,$Sort_Tree);
        return view('admin.page.news.news.add',['list'=>$list]);
    }

// |____ Add [Insert] Post
    public function action_Create(Request $request){
        return $this->action_Update($request);
    }

    public function load_Update ($id){
        $item = News::find($id);
        $list['category'] = News_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();
        $list['images'] =  json_decode($item->images, JSON_UNESCAPED_UNICODE);                 
        // $this->Sort_Tree($select_news_category,0,$Sort_Tree);
        return view('admin.page.news.news.edit',['list'=>$list,'item'=>$item]);
    }


    // |____ Add [Insert] Post
    public function action_Update(Request $request,$id=""){
        $this->validate($request,
        [
            'name'=>'required|min:3|max:255',
            'cat_id'=>'required'
        ],
        [
            'name.required'=>'Nhập tên danh mục',
            'name.min'=>'Tên thể loại phải có độ dài từ 3 cho đến 255 kí tự',
            'name.max'=>'Tên thể loại phải có độ dài từ 3 cho đến 255 kí tự',
            'cat_id.required' => 'Chọn danh mục tin tức '
        ]
        );
        // ******************************************************************************
        $Token_Random = $request->_token."_".time();

        if(!empty($id))
        {
            $item = News::find($id);
        }else{
            $item = new News;
        }

        $item->lang_code = 'vi';

        // Content
        $item->news_id = $request->id;
        $item->category_id = $request->cat_id;
        $item->news_title = $request->name;
        $item->alias = SBMyStyle::changeTitle($request->name);
        $item->news_description = $request->description;
        $item->news_content = $request->content;
        $item->_Token = $Token_Random;
        $item->order_num = $this->Max_order_num();
        // *******************************************************************************
        // |____Status 
            $status = $request->status;
            if(empty($status)){$status = 0;}
            $item->status = $status;
        // |____Sticky 
            $sticky = $request->sticky;
            if(empty($sticky)){$sticky = 0;}
            $item->sticky = $sticky;     
        // |____New 
            $new = $request->new;
            if(empty($new)){$new = 0;}
            $item->new = $new;      
        // |____Hot
            $hot = $request->hot;
            if(empty($hot)){$hot = 0;}
            $item->hot = $hot;     
        // End Config 

        // Hình ảnh        
        $item->image_show = $request->images[0];
        if(!empty($request->images))
        {
            $image = array();
            foreach ($request->images as $key => $value) {
                if(!empty($value))
                {
                    array_push($image,$value);
                }
            }           
            $item->images = json_encode($image, JSON_UNESCAPED_UNICODE);
        }
        
        // SEO
        $item->seo_title           = $request->seo_title;
        $item->slug                = $request->seo_slug;
        $item->meta_description    = $request->meta_description;
        $item->focus_keyword       = $request->focus_keyword;
        $item->meta_keyword        = $request->meta_keyword;
        $item->meta_title          = $request->meta_title;
        // *******************************************************************************   
        $item->save();

        if(!empty($id))
        {
            $message = "Cập nhật thành công";
            return redirect("admin/news/news/update/".$id)->with('message_success',$message);            
        }else{
            $message = "Thêm danh thành công";
            return redirect('admin/news/news/list')->with('message_success',$message);
        }
    }

    // Delete
    public function getDelete($id){
        $News_Category = News::find($id);  
        $Tree_Array = News_Category::select('id')->where()->withDepth()->get()->toTree();
        $News_Category->delete();
        $message = "Xóa thành công";
        return redirect('admin/news/category/list')->with('message_success',$message);
    }
}
