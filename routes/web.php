<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Frontend\Page\Page_Controller@getView_Home');

// News
Route::get('/tin-tuc','Frontend\Page\Page_Controller@getView_News_Home');

// News Category
Route::get('/danh-sach-tin-tuc','Frontend\Page\Page_Controller@getView_News_Category');

// Test getView
Route::get('/test-get-view','Frontend\Page\Page_Controller@getTestView');

// Quản trị - Start Admin
Route::group(['prefix'=>'admin'],function(){
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::get('/cpanel', function () {
        return view('admin.index');
    });

    Route::get('login','Backend\Page\Login_Controller@getViewLogin');      
    Route::post('login','Backend\Page\Login_Controller@postLogin');      
    
     // Sản phẩm
     Route::group(['prefix'=>'product'],function(){
        // Danh mục
        Route::group(['prefix'=>'product'],function(){
            Route::get('list','Backend\Product\Product_Controller@load_List');        
            Route::get('create','Backend\Product\Product_Controller@load_Create');
            Route::post('create','Backend\Product\Product_Controller@action_Create');
            Route::get('update/{id}','Backend\Product\Product_Controller@load_Update');
            Route::post('update/{id}','Backend\Product\Product_Controller@action_Update');
            Route::get('delete/{id}','Backend\Product\Product_Controller@action_Delete');
        });
        // Sản phẩm
        Route::group(['prefix'=>'category'],function(){
            Route::get('list','Backend\Product\Product_Category_Controller@load_List');           
            Route::get('create','Backend\Product\Product_Category_Controller@load_Create');
            Route::post('create','Backend\Product\Product_Category_Controller@action_Create');
            Route::get('update/{id}','Backend\Product\Product_Category_Controller@load_Update');
            Route::post('update/{id}','Backend\Product\Product_Category_Controller@action_Update');
            Route::get('delete/{id}','Backend\Product\Product_Category_Controller@action_Delete');
        });
    });

    // Tin tức
    Route::group(['prefix'=>'news'],function(){
        // Danh mục
        Route::group(['prefix'=>'news'],function(){
            Route::get('list','Backend\News\News_Controller@load_List');        
            Route::get('create','Backend\News\News_Controller@load_Create');
            Route::post('create','Backend\News\News_Controller@action_Create');
            Route::get('update/{id}','Backend\News\News_Controller@load_Update');
            Route::post('update/{id}','Backend\News\News_Controller@action_Update');
            Route::get('delete/{id}','Backend\News\News_Controller@action_Delete');
        });
        
        Route::group(['prefix'=>'category'],function(){
            Route::get('list','Backend\News\News_Category_Controller@load_List');         
            Route::get('create','Backend\News\News_Category_Controller@load_Create');
            Route::post('create','Backend\News\News_Category_Controller@action_Create');
            Route::get('update/{id}','Backend\News\News_Category_Controller@load_Update');
            Route::post('update/{id}','Backend\News\News_Category_Controller@action_Update');
            Route::get('delete/{id}','Backend\News\News_Category_Controller@action_Delete');
        });
    });

    // Menu
    Route::group(['prefix'=>'menu'],function(){
        // Danh mục
        Route::group(['prefix'=>'menu'],function(){
            Route::get('list/{id}','Backend\Menu\Menu_Controller@load_List'); 
            Route::get('create/{id}','Backend\Menu\Menu_Controller@load_Create');
            Route::post('create/{id}','Backend\Menu\Menu_Controller@action_Create');
            Route::get('update/{id}','Backend\Menu\Menu_Controller@load_Update');
            Route::post('update/{id}','Backend\Menu\Menu_Controller@action_Update');
            Route::get('delete/{id}','Backend\Menu\Menu_Controller@action_Delete');
        });
        
        Route::group(['prefix'=>'group'],function(){
            Route::get('list','Backend\Menu\Menu_Group_Controller@load_List');     
            Route::get('create','Backend\Menu\Menu_Group_Controller@load_Create');
            Route::post('create','Backend\Menu\Menu_Group_Controller@action_Create');
            Route::get('update/{id}','Backend\Menu\Menu_Group_Controller@load_Update');
            Route::post('update/{id}','Backend\Menu\Menu_Group_Controller@action_Update');
            Route::get('delete/{id}','Backend\Menu\Menu_Group_Controller@action_Delete');
        });
    });
    // // Tin tức
    // Route::group(['prefix'=>'gallery'],function(){
    //     // Danh mục
    //     Route::group(['prefix'=>'photo'],function(){
    //         Route::get('list','Gallery\Photo_Gallery_Controller@getList');        
    //         Route::get('list/{id}','Gallery\Photo_Gallery_Controller@getList_where');    
    //         Route::get('add','Gallery\Photo_Gallery_Controller@getAdd');
    //         Route::post('add','Gallery\Photo_Gallery_Controller@postAdd');
    //         Route::get('edit/{id}','Gallery\Photo_Gallery_Controller@getEdit');
    //         Route::post('edit/{id}','Gallery\Photo_Gallery_Controller@postEdit');
    //         Route::get('delete/{id}','Gallery\Photo_Gallery_Controller@getDelete');
    //     });
    //     // Sản phẩm
    //     Route::group(['prefix'=>'gallery'],function(){
    //         Route::get('list','Gallery\Photo_Gallery_Controller@getList');        
    //         Route::get('list/{id}','Gallery\Photo_Gallery_Controller@getList_where');    
    //         Route::get('add','Gallery\Photo_Gallery_Controller@getAdd');
    //         Route::post('add','Gallery\Photo_Gallery_Controller@postAdd');
    //         Route::get('edit/{id}','Gallery\Photo_Gallery_Controller@getEdit');
    //         Route::post('edit/{id}','Gallery\Photo_Gallery_Controller@postEdit');
    //         Route::get('delete/{id}','Gallery\Photo_Gallery_Controller@getDelete');
    //     });
    // });



    // Tài khoản
    Route::group(['prefix'=>'user'],function(){
        // Danh mục
        Route::group(['prefix'=>'access'],function(){
            Route::get('list','Backend\User\Account_Access_Controller@getList');        
            Route::get('add','Backend\User\Account_Access_Controller@getAdd');
            Route::post('add','Backend\User\Account_Access_Controller@postAdd');
            Route::get('edit/{id}','Backend\User\Account_Access_Controller@getEdit');
            Route::post('edit/{id}','Backend\User\Account_Access_Controller@postEdit');
            Route::get('delete/{id}','Backend\User\Account_Access_Controller@getDelete');
        });
        // Sản phẩm
        Route::group(['prefix'=>'account'],function(){
            Route::get('list','User\Account_Controller@getList');        
            Route::get('list/{id}','User\Account_Controller@getList_where');    
            Route::get('add','User\Account_Controller@getAdd');
            Route::post('add','User\Account_Controller@postAdd');
            Route::get('edit/{id}','User\Account_Controller@getEdit');
            Route::post('edit/{id}','User\Account_Controller@postEdit');
            Route::get('delete/{id}','User\Account_Controller@getDelete');
        });
    });

    // Loại Tin
    Route::group(['prefix'=>'api'],function(){
        // Gallery
        //___ Get List
        Route::get('gallery/list','Angular\Gallery\Gallery_API@getList');
        //___ Get Add
        Route::post('gallery/add','Angular\Gallery\Gallery_API@POST_Add_Gallery');
    });

});  
// End Admin


Route::group(['prefix'=>'api'],function(){
    Route::group(['prefix'=>'tin-tuc'],function(){
        Route::group(['prefix'=>'bai-viet'],function(){
            Route::get('list','Backend\API\API_News_Controller@load_List'); 
        });
    });
});
