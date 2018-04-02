<?php

namespace App\Http\Controllers\Backend\Menu;
use SBMyStyle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Menu\Menu_Group;
use App\Model\Menu\Menu;
use App\Model\News\News_Category;
use App\Model\News\News;
use App\Model\Product\Product_Category;
use App\Model\Product\Product;
use App\Model\Config\Ws_Menu;
use Kalnoy\Nestedset\NestedSet;
use Config;

class Menu_Controller extends Controller
{
    public function __construct(){
        $__URL['cancel'] = 'admin/menu/menu/list';
        $__URL['create'] = 'admin/menu/menu/create';
        $__URL['update'] = 'admin/menu/menu/update';
        $__URL['delete'] = 'admin/menu/menu/delete';
        View()->share('__URL',$__URL);

         // Upload Images
        $__config['images']['status']   = Config::get('constants.file.images.menu.menu.upload');
        $__config['images']['muti']     = Config::get('constants.file.images.menu.menu.muti');
        $__config['images']['limit']    = Config::get('constants.file.images.menu.menu.limit');

        // Attribute
        $__config['attr']['status'] = Config::get('constants.form.menu.menu.status');
        $__config['attr']['sticky'] = Config::get('constants.form.menu.menu.sticky');
        View()->share('__config',$__config);
    }
    // ____________________________________________________________________________________________
	// Function
	// |_______ Tree Root
	    private function Action_Tree($Token,$parent_id){
	        $node = Menu::where('_Token', $Token)->first();         
	        if($parent_id>0)
	        {
	            $parent = Menu::find($parent_id);
	            $node->appendToNode($parent)->save();

	        }else{
	            $node->saveAsRoot();
	        }
	    }

    // |________ Get max order num
    private function Max_order_num(){
        $max = Menu::max('order_num');
        return $max+1;
    }

    public function load_List($group_id){
        $list['menu'] = Menu::orderBy('order_num', 'desc')->where('group_id')->get();
        return view('admin.page.menu.menu.list',['list'=>$list,'group_id'=>$group_id]);
    }

    public function load_Create($group_id){
    	$list['menu'] = Menu::select('id','menu_title')->withDepth()->defaultOrder()->get()->toTree();
        $list['menu_group'] = Menu_Group::select('id','title')->orderBy('order_num', 'desc')->get();
        // Ws
    	$list['ws_menu'] = Ws_Menu::select('id','title','link')->orderBy('order_num', 'desc')->get();
        // News
        $list['news_category'] = News_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();
        $list['product_category'] = Product_Category::select('id','category_name')->withDepth()->defaultOrder()->get()->toTree();
        return view('admin.page.menu.menu.add',['list'=>$list,'group_id'=>$group_id]);
    }

    // |____ Add [Insert] Post
    public function action_Create(Request $request){
        return $this->action_Update($request);
    }


    // Edit
    public function load_Update ($id){
        $item = Menu::find($id);
        $list['images'] =  json_decode($item->icon, JSON_UNESCAPED_UNICODE);     
        return view('admin.page.menu.menu.edit',['list'=>$list,'item'=>$item]);
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
            $item = Menu::find($id);
        }else{
            $item = new Menu;
        }

        $item->lang_code = 'vi';

        // Content
        $item->menu_title = $request->name;
        $item->alias = SBMyStyle::changeTitle($request->name);
        $item->menu_description = $request->description;
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
        $item->icon = $request->images[0];
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

        // *******************************************************************************   
        $item->save();

        if(!empty($id))
        {
            $message = "Cập nhật thành công";
            return redirect("admin/menu/menu/update/".$id)->with('message_success',$message);            
        }else{
            $message = "Thêm danh thành công";
            return redirect('admin/menu/menu/list')->with('message_success',$message);
        }
    }

    // Delete
    public function getDelete($id){
        $result = Menu::select('id')->reversed()->descendantsAndSelf($id);
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
            Menu::find($value['id'])->delete(); 
        }                        
        
        $message = "Xóa thành công";    
        // $Tree_Array = Menu::select('id','category_id','category_name','status','sticky')->withDepth()->defaultOrder()->get()->toTree();
        // return redirect('admin/menu/group/list')->with('message_success',$message);
        return redirect('admin/menu/menu/list')->with('message_success',$message);
    }
}
