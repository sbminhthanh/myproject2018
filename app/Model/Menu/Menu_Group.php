<?php

namespace App\Model\Menu;

use Illuminate\Database\Eloquent\Model;


class Menu_Group extends Model
{
    protected $table = "menu_group";
    
    // Lấy ra tất cả sản phẩm thuộc danh mục
    public function menu(){
        return $this->hasMany('App\Model\Menu\Menu','group_id','id');
    }
}
