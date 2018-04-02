<?php

namespace App\Http\Controllers\Backend\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Login_Controller extends Controller
{
    public function getViewLogin(){               
        return view('admin.other.login');
    }

    public function postLogin(Request $request){
    	// $this->validate($request,
    	// 	[
    	// 		'text_user' => 'required',
    	// 		'text_pass' => 'required'
    	// 	],[
    	// 		'text_user.required' => " Bạn chưa nhập tài khoản",
    	// 		'text_pass.required' => " Bạn chưa nhập mật khẩu",
    	// 	]
    	// );
    	// if(Auth::attempt(['user' => $request->text_user,'pass' => $request->text_pass])){
    	// 	return redirect('admin/cpanel');
    	// }else{
    	// 	$message = "Lỗi";
    	// 	return redirect('admin/login')->with('message_success',$message);
    	// }
    	return redirect('admin/cpanel');
    }
}
