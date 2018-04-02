<?php

namespace App\Http\Controllers\Backend\Product;
use SBMyStyle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product\Product_Category;
use App\Model\Product\Product;
use App\Model\Product\Product_Tab;
use Kalnoy\Nestedset\NestedSet;


use Config;

class Product_Category_Controller extends Controller
{
    public function __construct(){
        $__URL['cancel'] = 'admin/product/category/list';
        $__URL['create'] = 'admin/product/category/create';
        $__URL['update'] = 'admin/product/category/update';
        $__URL['delete'] = 'admin/product/category/delete';
        View()->share('__URL',$__URL);

        // Upload Images
        $__config['images']['status']   = Config::get('constants.file.images.product.category.upload');
        $__config['images']['muti']     = Config::get('constants.file.images.product.category.muti');
        $__config['images']['limit']    = Config::get('constants.file.images.product.category.limit');

        // Attribute
        $__config['attr']['status'] = Config::get('constants.form.product.category.status');
        $__config['attr']['sticky'] = Config::get('constants.form.product.category.sticky');
        View()->share('__config',$__config);
    }
    
    public function Action_Tree($Token,$parent_id){
        $node = Product_Category::where('_Token', $Token)->first();         
        if($parent_id>0)
        {
            $parent = Product_Category::find($parent_id);
            $node->appendToNode($parent)->save();

        }else{
            $node->saveAsRoot();
        }
    }

    

    // |________ Get max order num
    public function Max_order_num(){
        $max = Product_Category::max('order_num');
        return $max+1;
    }

// ____________________________________________________________________________________________
// Action
// |____ Add [Insert] : Load
    public function load_List(){
        $item = Product_Category::select('id','category_id','category_name','status','sticky')->withDepth()->defaultOrder()->get()->toTree();
        return view('admin.page.product.category.list',['item'=>$item]);
    }

    public function load_Create(){
        $list['category'] = Product_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();                
        // SBMyStyle::Sort_Tree($list['category'],0,$Sort_Tree);
        return view('admin.page.product.category.add',['list'=>$list]);
    }

    // |____ Add [Insert] Post
    public function action_Create(Request $request){          
        return $this->action_Update($request);
    }

    // Edit
    public function load_Update($id){
        $item = Product_Category::find($id);
        $list['category'] = Product_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();   
        $list['images'] =  json_decode($item->images, JSON_UNESCAPED_UNICODE);              
        // SBMyStyle::Sort_Tree($list['category'],0,$Sort_Tree);

        return view('admin.page.product.category.edit',['list'=>$list,'item'=>$item]);
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
            $item = Product_Category::find($id);
        }else{
            $item = new Product_Category;
        }

        // Lang
        $item->lang_code = 'vi';

        // Content
        $item->category_id = $request->id;
        $item->category_name = $request->name;
        $item->alias = SBMyStyle::changeTitle($request->name);
        $item->category_description = $request->description;
        $item->category_content = $request->content;
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
        // Xử lý Tree
        $this->Action_Tree($Token_Random,$request->parent_id);       

        if(!empty($id))
        {
            $message = "Cập nhật thành công";
            return redirect("admin/product/category/update/".$id)->with('message_success',$message);            
        }else{
            $message = "Thêm danh thành công";
            return redirect('admin/product/category/list')->with('message_success',$message);
        }
    }

    // Delete
    public function action_Delete($id){
        $result = Product_Category::select('id')->reversed()->descendantsAndSelf($id);
        foreach ($result as $key => $value) {
            // Xóa Category product
            Product_Category::find($value['id'])->delete(); 
        }                        
        
        $message = "Xóa thành công";    
        // $Tree_Array = product_Category::select('id','category_id','category_name','status','sticky')->withDepth()->defaultOrder()->get()->toTree();
        // return redirect('admin/product/category/list')->with('message_success',$message);
        return redirect('admin/product/category/list')->with('message_success',$message);
    }
}
