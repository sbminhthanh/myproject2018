<?php

namespace App\Http\Controllers\Backend\Menu;
use SBMyStyle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Menu\Menu_Group;
use Config;

class Menu_Group_Controller extends Controller
{
    public function __construct(){
        $__URL['cancel'] = 'admin/menu/group/list';
        $__URL['create'] = 'admin/menu/group/create';
        $__URL['list_menu'] = 'admin/menu/menu/list';
        $__URL['update'] = 'admin/menu/group/update';
        $__URL['delete'] = 'admin/menu/group/delete';
        View()->share('__URL',$__URL);

         // Upload Images
        $__config['images']['status']   = Config::get('constants.file.images.menu.group.upload');
        $__config['images']['muti']     = Config::get('constants.file.images.menu.group.muti');
        $__config['images']['limit']    = Config::get('constants.file.images.menu.group.limit');

        // Attribute
        $__config['attr']['status'] = Config::get('constants.form.menu.group.status');
        $__config['attr']['sticky'] = Config::get('constants.form.menu.group.sticky');
        View()->share('__config',$__config);
    }

    // |________ Get max order num
    private function Max_order_num(){
        $max = Menu_Group::max('order_num');
        return $max+1;
    }

    public function load_List(){
        $list['menu'] = Menu_Group::orderBy('order_num', 'desc')->get();
        return view('admin.page.menu.group.list',['list'=>$list]);
    }

    public function load_Create(){
        return view('admin.page.menu.group.add');
    }

// |____ Add [Insert] Post
    public function action_Create(Request $request){
        return $this->action_Update($request);
    }


        // Edit
    public function load_Update ($id){
        $item = Menu_Group::find($id);
        $list['images'] =  json_decode($item->icon, JSON_UNESCAPED_UNICODE);     
        return view('admin.page.menu.group.edit',['list'=>$list,'item'=>$item]);
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
            $item = Menu_Group::find($id);
        }else{
            $item = new Menu_Group;
        }

        $item->lang_code = 'vi';

        // Content
        $item->title = $request->name;
        $item->alias = SBMyStyle::changeTitle($request->name);
        $item->description = $request->description;
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
        // $item->image_show = $request->images[0];
        if(!empty($request->images))
        {
            $image = array();
            foreach ($request->images as $key => $value) {
                if(!empty($value))
                {
                    array_push($image,$value);
                }
            }           
            $item->icon = json_encode($image, JSON_UNESCAPED_UNICODE);
        }

        // *******************************************************************************   
        $item->save();

        if(!empty($id))
        {
            $message = "Cập nhật thành công";
            return redirect("admin/menu/group/update/".$id)->with('message_success',$message);            
        }else{
            $message = "Thêm danh thành công";
            return redirect('admin/menu/group/list')->with('message_success',$message);
        }
    }

    // Delete
    public function getDelete($id){
        $result = Menu_Group::select('id')->reversed()->descendantsAndSelf($id);
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
            Menu_Group::find($value['id'])->delete(); 
        }                        
        
        $message = "Xóa thành công";    
        // $Tree_Array = Menu_Group::select('id','category_id','category_name','status','sticky')->withDepth()->defaultOrder()->get()->toTree();
        // return redirect('admin/menu/group/list')->with('message_success',$message);
        return redirect('admin/menu/group/list')->with('message_success',$message);
    }
}
