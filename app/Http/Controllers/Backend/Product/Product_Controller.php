<?php

namespace App\Http\Controllers\Backend\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product\Product_Category;
use App\Model\Product\Product;
use App\Model\Product\Product_Tab;
use Kalnoy\Nestedset\NestedSet;
use Config;

class Product_Controller extends Controller
{
    public function __construct(){
        $URL_CANCEL = 'admin/product/category/list';
        View()->share('URL_CANCEL',$URL_CANCEL);

        $status_upload = Config::get('constants.file.images.product.product.upload');
        View()->share('status_upload',$status_upload);

        $muti_upload = Config::get('constants.file.images.product.product.muti');
        View()->share('muti_upload',$muti_upload);

        $limit_upload = Config::get('constants.file.images.product.product.limit');
        View()->share('limit_upload',$limit_upload);


        $properties_status = Config::get('constants.file.images.product.product.properties_status');
        View()->share('properties_status',$properties_status);

        $properties_muti = Config::get('constants.file.images.product.product.properties_muti');
        View()->share('properties_muti',$properties_muti);
        
        $properties_limit = Config::get('constants.file.images.product.product.properties_limit');
        View()->share('properties_limit',$properties_limit);

    }

//____________________________________________________________________________________________
    // Function
    // // |_______ Tree Root
    // private function Action_Tree($Token,$parent_id){
    //     $node = Product_Category::where('_Token', $Token)->first();         
    //     if($parent_id>0)
    //     {
    //         $parent = Product_Category::find($parent_id);
    //         $node->appendToNode($parent)->save();

    //     }else{
    //         $node->saveAsRoot();
    //     }
    // }
    // |_______ Action Tab
    // |________ Get max order num
    private function Max_order_num(){
        $max = Product::max('order_num');
        return $max+1;
    }
    // Add
    private function Action_Tabs($Token,$header,$status,$title,$content){
        $id = Product::where('_Token', $Token)->first()->id;
        $count_client   = count($header);
        for($i=0;$i<$count_client;$i++){
            if(!empty($header[$i]) && ( !empty($title[$i]) || !empty($content[$i]) ))
            {
                $product_tab = new Product_Tab;
                $product_tab->lang_code    = 'vi';
                $product_tab->product_id      = $id;
                $product_tab->title_tab    = $header[$i];
                $product_tab->status       = $status[$i];
                $product_tab->sticky       = 0;
                $product_tab->title        = $title[$i];
                $product_tab->content      = $content[$i];
                $product_tab->_Token       = $Token;
                $product_tab->save();
            }
        }
    }
    // Edit
    private function Action_Tabs_Edit($Token,$header,$status,$title,$content){
        $id = Product::where('_Token', $Token)->first()->id;
        // Edit Nếu 
        $result_tab = Product_Tab::select('id')->where('product_id',$id)->get();

        $index = 1;
        $index_client = 1;
        $count_database = $result_tab->count();
        $count_client   = count($header);
        // Edit

        // Cập nhật lại thông tin các tab :D
        // IF Client < Data
        foreach ($result_tab as $key => $value) {            
            // [ Loại bỏ rỗng ]
            if(!empty($header[$key]) && ( !empty($title[$key]) || !empty($content[$key]) ))
            {
                // Cập nhật
                if($index <= $count_client)
                {
                    $product_tab = Product_Tab::find($value->id);
                    $product_tab->title_tab    = $header[$key];
                    $product_tab->status       = $status[$key];
                    $product_tab->title        = $title[$key];
                    $product_tab->content      = $content[$key];
                    $product_tab->_Token       = $Token;
                    $product_tab->save();
                    
                }
                $index++;
            }
            // Phần con sót lại xóa | Ví dụ database 3 hàng, client 2, update 2 xóa 1
            if($index > $count_client && $count_client < $count_database)
            {   
                // Xóa
                $product_tab = Product_Tab::find($value->id);
                $product_tab->delete();
                $index++;
            }
            $index_client++;
        }

        for($i=$index_client;$i<=$count_client;$i++){
            if(!empty($header[$key]) && ( !empty($title[$key]) || !empty($content[$key]) ))
            {
                $product_tab = new Product_Tab;
                $product_tab->lang_code    = 'vi';
                $product_tab->product_id      = $id;
                $product_tab->title_tab    = $header[$i-1];
                $product_tab->status       = $status[$i-1];
                $product_tab->sticky       = 0;
                $product_tab->title        = $title[$i-1];
                $product_tab->content      = $content[$i-1];
                $product_tab->_Token       = $Token;
                $product_tab->save();
            }
        }
    }

    // |________ Đệ quy Tree
    private function Sort_Tree($Tree,$level=0,&$result){
        foreach ($Tree as $key => $root) {
            $result['id']= $root->id;
            $result['title']= str_repeat('|---', $level)." ".$root->category_name;
            $result['level']= $level;
            $this->Sort_Tree($root->children,$level+1,$result);
        }
    }
    // |________ Get max order num
 
// ____________________________________________________________________________________________
// Action
// |____ Add [Insert] : Load
    public function getList(){
        // $check_valid = Product_Category::whereIsRoot()->get();
        // $product_category = Product_Category::all();
        $Product = Product::orderBy('order_num', 'desc')->get();
        return view('admin.page.product.product.list',['product'=>$Product]);
    }

    public function getAdd(){
        $select_product_category = Product_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();                
        $this->Sort_Tree($select_product_category,0,$Sort_Tree);
        return view('admin.page.product.product.add',['select_product_category'=>$select_product_category]);
    }
// |____ Add [Insert] Post
    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name'=>'required|min:3|max:255',
                'cat_id'=>'required'
            ],
            [
                'name.required'=>'Nhập tên danh mục',
                'name.min'=>'Tên thể loại phải có độ dài từ 3 cho đến 255 kí tự',
                'name.max'=>'Tên thể loại phải có độ dài từ 3 cho đến 255 kí tự',
                'cat_id.required' => 'Chọn danh mục sản phẩm '
            ]
        );
        // ******************************************************************************
        $Token_Random = $request->_token."_".time();
        $product = new Product;
        // Lang
        $product->lang_code = 'vi';
        // Content
        $product->product_id = $request->id;
        $product->category_id = $request->cat_id;
        $product->product_title = $request->name;
        $product->alias = changeTitle($request->name);
        $product->product_description = $request->description;
        $product->product_content = $request->content;
        $product->_Token = $Token_Random;
        $product->order_num = $this->Max_order_num();
        // *******************************************************************************
        // Config
            // |____ Status 
                $status = $request->status;
                if(Config::get('constants.insert.product.product.status.status'))
                {
                    $status = Config::get('constants.insert.product.product.status.value');
                }
                $product->status = $status;
            // |____ Sticky 
                $sticky = $request->sticky;
                if(Config::get('constants.insert.product.product.sticky.status'))
                {
                    $sticky = Config::get('constants.insert.product.product.sticky.value');
                }
                $product->sticky = $sticky;     
            // |____ Promotion
                $promotion = $request->promotion;
                if(Config::get('constants.insert.product.product.promotion.status'))
                {
                    $promotion = Config::get('constants.insert.product.product.promotion.value');
                }
                $product->promotion = $promotion;     
            // |____ New  
                $new = $request->new;
                if(Config::get('constants.insert.product.product.new.status'))
                {
                    $sticky = Config::get('constants.insert.product.product.new.value');
                }
                $product->new = $new;     
        // End Config 
        
        // Price
            $price = array(
                'price' =>  intval(str_replace(",","",e($request->price))),
                'unit'  =>  $request->unit,
                'ratio' =>  intval(str_replace(",","",e($request->ratio)))
            );            
            $product->properties_price = json_encode($price , JSON_UNESCAPED_UNICODE);
        // Promotion
            $promotion = array(
                'price' =>  intval(str_replace(",","",e($request->promotion_price))),
                'unit'  =>  $request->promotion_unit,
                'ratio' =>  intval(str_replace(",","",e($request->promotion_ratio))),
                'title' =>  $request->promotion_title
            );
            $product->properties_promotion = json_encode($promotion , JSON_UNESCAPED_UNICODE);

        // Hình ảnh        
        $product->image_show = $request->images[0];
        if(!empty($request->images))
        {
            $image = array();
            foreach ($request->images as $key => $value) {
                if(!empty($value))
                {
                    array_push($image,$value);
                }
            }           
            $product->images = json_encode($image, JSON_UNESCAPED_UNICODE);
        }

        // Properties
        if(!empty($request->properties_title))
        {
            $properties = array();
            foreach ($request->properties_title as $key => $value) {
                if(!empty($value))
                {
                    ;
                    array_push($properties,
                        array(
                            'title'=>e($request->properties_title[$key]),
                            'value'=>e($request->properties_values[$key])
                        )
                    );
                }
            }           
            $product->properties = json_encode($properties , JSON_UNESCAPED_UNICODE);
        }

        // SEO
        $product->seo_title           = $request->seo_title;
        $product->slug                = $request->seo_slug;
        $product->meta_description    = $request->meta_description;
        $product->focus_keyword       = $request->focus_keyword;
        $product->meta_keyword        = $request->meta_keyword;
        $product->meta_title          = $request->meta_title;

        
        // *******************************************************************************   
        $product->save();
        // Xử lý Tree
        if(!empty($request->tab_header))
        {
            $this->Action_Tabs($Token_Random,$request->tab_header,$request->tab_status,$request->tab_title,$request->option_tab); 
        }    

        $message = "Thêm thành công";
        return redirect('admin/product/product/list')->with('message_success',$message);
    }


    // Edit
    public function getEdit($id){
        $product = Product::find($id);
        $select_product_category = Product_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();                
        $this->Sort_Tree($select_product_category,0,$Sort_Tree);
        return view('admin.page.product.product.edit',['select_product_category'=>$select_product_category,'product'=>$product]);
    }
    // |____ Add [Insert] Post
    public function postEdit(Request $request,$id){
        $this->validate($request,
        [
            'name'=>'required|min:3|max:255',
            'cat_id'=>'required'
        ],
        [
            'name.required'=>'Nhập tên danh mục',
            'name.min'=>'Tên thể loại phải có độ dài từ 3 cho đến 255 kí tự',
            'name.max'=>'Tên thể loại phải có độ dài từ 3 cho đến 255 kí tự',
            'cat_id.required' => 'Chọn danh mục sản phẩm '
        ]
        );
        // ******************************************************************************
        $Token_Random = $request->_token."_".time();
        $product = Product::find($id);
        // Lang
        $product->lang_code = 'vi';
        // Content
        $product->product_id = $request->id;
        $product->category_id = $request->cat_id;
        $product->product_title = $request->name;
        $product->alias = changeTitle($request->name);
        $product->product_description = $request->description;
        $product->product_content = $request->content;
        $product->_Token = $Token_Random;
        $product->order_num = $this->Max_order_num();
        // *******************************************************************************
        // Config
            // |____Status 
                $status = $request->status;
                $product->status = $status;
            // |____Sticky 
                $sticky = $request->sticky;
                $product->sticky = $sticky;     
            // |____ Promotion
                $promotion = $request->promotion;              
                $product->promotion = $promotion;     
            // |____ New  
                $new = $request->new;
                $product->new = $new;     
        // End Config 

        // Hình ảnh        
        $product->image_show = $request->images[0];
        if(!empty($request->images))
        {
            $image = array();
            foreach ($request->images as $key => $value) {
                if(!empty($value))
                {
                    array_push($image,$value);
                }
            }           
            $product->images = json_encode($image, JSON_UNESCAPED_UNICODE);
        }

        // Price
            $price = array(
                'price' =>  intval(str_replace(",","",e($request->price))),
                'unit'  =>  $request->unit,
                'ratio' =>  intval(str_replace(",","",e($request->ratio)))
            );            
            $product->properties_price = json_encode($price , JSON_UNESCAPED_UNICODE);
        // Promotion
            $promotion = array(
                'price' =>  intval(str_replace(",","",e($request->promotion_price))),
                'unit'  =>  $request->promotion_unit,
                'ratio' =>  intval(str_replace(",","",e($request->promotion_ratio))),
                'title' =>  $request->promotion_title
            );
            $product->properties_promotion = json_encode($promotion , JSON_UNESCAPED_UNICODE);

        // Properties
        if(!empty($request->properties_title))
        {
            $properties = array();
            foreach ($request->properties_title as $key => $value) {
                if(!empty($value))
                {
                    ;
                    array_push($properties,
                        array(
                            'title'=>e($request->properties_title[$key]),
                            'value'=>e($request->properties_values[$key])
                        )
                    );
                }
            }           
            $product->properties = json_encode($properties , JSON_UNESCAPED_UNICODE);
        }

        // SEO
        $product->seo_title           = $request->seo_title;
        $product->slug                = $request->seo_slug;
        $product->meta_description    = $request->meta_description;
        $product->focus_keyword       = $request->focus_keyword;
        $product->meta_keyword        = $request->meta_keyword;
        $product->meta_title          = $request->meta_title;

        
        // *******************************************************************************   
        $product->save();
        // Xử lý Tree
        $this->Action_Tabs_Edit($Token_Random,$request->tab_header,$request->tab_status,$request->tab_title,$request->option_tab);      

        $message = "Cập nhật thành công";
        return redirect('admin/product/product/list')->with('message_success',$message);
    }

    // Delete
    public function getDelete($id){
        $Product_Category = Product::find($id);  
        $Tree_Array = Product_Category::select('id')->where()->withDepth()->get()->toTree();
        $Product_Category->delete();
        $message = "Xóa thành công";
        return redirect('admin/product/category/list')->with('message_success',$message);
    }
}
