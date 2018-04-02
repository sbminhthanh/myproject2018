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

class News_Category_Controller extends Controller
{
    public function __construct(){

        $__URL['cancel'] = 'admin/news/category/list';
        $__URL['create'] = 'admin/news/category/create';
        $__URL['update'] = 'admin/news/category/update';
        $__URL['delete'] = 'admin/news/category/delete';
        View()->share('__URL',$__URL);

        // Upload Images
        $__config['images']['status']   = Config::get('constants.file.images.news.category.upload');
        $__config['images']['muti']     = Config::get('constants.file.images.news.category.muti');
        $__config['images']['limit']    = Config::get('constants.file.images.news.category.limit');

        // Attribute
        $__config['attr']['status'] = Config::get('constants.form.news.category.status');
        $__config['attr']['sticky'] = Config::get('constants.form.news.category.sticky');
        View()->share('__config',$__config);
    }
    // ____________________________________________________________________________________________
	// Function
	// |_______ Tree Root
	    private function Action_Tree($Token,$parent_id){
	        $node = News_Category::where('_Token', $Token)->first();         
	        if($parent_id>0)
	        {
	            $parent = News_Category::find($parent_id);
	            $node->appendToNode($parent)->save();

	        }else{
	            $node->saveAsRoot();
	        }
	    }


// |________ Get max order num
    private function Max_order_num(){
        $max = News_Category::max('order_num');
        return $max+1;
    }




// ____________________________________________________________________________________________
// Action
// |____ Add [Insert] : Load
    public function load_List (){
        $list['category'] = News_Category::select('id','category_id','category_name','status','sticky')->withDepth()->defaultOrder()->get()->toTree();
        return view('admin.page.news.category.list',['list'=>$list]);
    }

    public function load_Create (){
        $list['category'] = News_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();               
        // SBMyStyle::Sort_Tree($list['category'],0,$Sort_Tree);
        return view('admin.page.news.category.add',['list'=>$list]);
    }

// |____ Add [Insert] Post
    public function action_Create(Request $request){
        return $this->action_Update($request);
    }



    // Edit
    public function load_Update ($id){
        $item = News_Category::find($id);
        $list['category'] = News_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();
        $list['images'] =  json_decode($item->images, JSON_UNESCAPED_UNICODE);                 
        // $this->Sort_Tree($select_news_category,0,$Sort_Tree);
        return view('admin.page.news.category.edit',['list'=>$list,'item'=>$item]);
    }

    public function action_Update(Request $request,$id = ""){
        $this->validate($request,
        [
            'id'=>'max:20',
            'name'=>'required|min:3|max:255'
        ],
        [
            'id.max'=>'Mã danh mục tối đa 20 kí tự',
            'name.required'=>'Nhập tên danh mục',
           
            'name.min'=>'Tên thể loại phải có độ dài từ 3 cho đến 255 kí tự',
            'name.max'=>'Tên thể loại phải có độ dài từ 3 cho đến 255 kí tự']
        );
        // ******************************************************************************
        $Token_Random = $request->_token."_".time();
        if(!empty($id))
        {
            $item = News_Category::find($id);
        }else{
            $item = new News_Category;
        }

        $item->lang_code = 'vi';

        // Content
        $item->category_id = $request->id;
        $item->category_name = $request->name;
        $item->alias = SBMyStyle::changeTitle($request->name);
        $item->category_description = $request->description;
        $item->category_content = $request->content;
        $item->_Token = $Token_Random;
        $item->order_num = $this->Max_order_num();
        
        // |____Status 
            $status = $request->status;
            if(empty($status)){$status = 0;}
            $item->status = $status;
        // |____Sticky 
            $sticky = $request->sticky;
            if(empty($sticky)){$sticky = 0;}
            $item->sticky = $sticky;     

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
        // Xử lý Tree
        $this->Action_Tree($Token_Random,$request->parent_id);       

        if(!empty($id))
        {
            $message = "Cập nhật thành công";
            return redirect("admin/news/category/update/".$id)->with('message_success',$message);            
        }else{
            $message = "Thêm danh thành công";
            return redirect('admin/news/category/list')->with('message_success',$message);
        }
    }

    // Delete
    public function getDelete($id){
        $result = News_Category::select('id')->reversed()->descendantsAndSelf($id);
        foreach ($result as $key => $value) {
            // Lọc News - Tab
            $List_News = News::where('category_id',$value['id'])->get(); 
            foreach ($List_News as $key_news => $value_news) {
                // Xóa News
                    News_Tab::where('news_id',$value_news['id'])->delete(); 
                // Xóa News
                    News::find($value_news['id'])->delete();
            }  

            // Xóa Category News
            News_Category::find($value['id'])->delete(); 
        }                        
        
        $message = "Xóa thành công";    
        // $Tree_Array = News_Category::select('id','category_id','category_name','status','sticky')->withDepth()->defaultOrder()->get()->toTree();
        // return redirect('admin/news/category/list')->with('message_success',$message);
        return redirect('admin/news/category/list')->with('message_success',$message);
    }
}
