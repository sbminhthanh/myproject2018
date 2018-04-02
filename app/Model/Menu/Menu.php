<?php

namespace App\Model\Menu;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NestedSet;

class Menu extends Model
{
	
    use \Kalnoy\Nestedset\NodeTrait;
    protected $table = "menu";
    
    // Lấy ra tất cả sản phẩm thuộc danh mục
    public function menu_group(){
        return $this->belongsTo('App\Model\Menu\Menu_Group','menu_id','id');
    }
}
