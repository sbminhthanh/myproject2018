@extends('admin.layout.index') 
@section('content-header')
  <h1>
    DANH MỤC TIN TỨC
  </h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-edit"></i> Tin tức</a></li>
		<li class="breadcrumb-item"><a href="data.html#">Danh mục</a></li>
		<li class="breadcrumb-item active">Thêm</li>
	</ol>
@endsection
@section('content')
<?php
  $status_upload = Config::get('constants.file.images.news.category.upload');
  $muti_upload = Config::get('constants.file.images.news.category.muti');
  $limit_upload = Config::get('constants.file.images.news.category.limit');
?>
<div class="col-12">	
	<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Thêm</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove">
                <i class="fa fa-remove"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form method="post" action="admin/news/category/add">
             {{ csrf_field() }}
              
              <input type="hidden" value="{{randomToken()}}" name="_randomToken">
              <div class="row">
                <div class="col-12">
                  <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Mã danh mục:</label>
                    <div class="col-sm-8">
                      <input class="form-control" type="text" value="{{old('id')}}" name="id" placeholder="Mã danh mục">
                    </div>
                    <div class="col-sm-2">
                      <div class="ichack-input">
                        <input type="checkbox" name="sticky" 
                        @if(old('sticky') ==1)
                         {{"checked"}}
								        @endif
                        value="1" class="minimal" >
                        Nổi bật 
                      </div>
                      <div class="ichack-input">
                        <input type="checkbox" name="status"
                        @if(old('status') ==1)
                         {{"checked"}}
								        @endif
                        value="1"  class="minimal" >
                        Hiển thị
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Tên danh mục:</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="name" placeholder="Tên danh mục" value="{{old('name')}}" name="name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="parent_id" class="col-sm-2 col-form-label">Danh mục cha:</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="parent_id" style="width: 100%;">
                        <option value="0">Không có danh mục cha</option>
                        @foreach($select_news_category as $key => $value)
                          <option value="{{$value->id}}"
                              @if(!empty(old('parent_id')))
                                @if($value->id == old('parent_id')){{"selected"}}@endif                             
                              @endif
                          ><?= str_repeat('|==',$value->depth) ?>{{$value->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  @if($status_upload)
                  <div id="form_file">
                    <div class="form-group row">
                      <label for="images" class="col-sm-2 col-form-label">Hình Ảnh:                        
                        <button type="button" class="image_toggle_hover btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                      </label>
                      <div class="col-sm-7 relative">                     
                        <input class="form-control" placeholder="Chọn Hình ảnh" name="images[]" type="text" value="{{old('images[]')}}">
                        <button type="button" class="btn btn-lg btn-info btn_file_array">Chọn file</button>
                      </div>  
                      @if($muti_upload)
                        <div class="col-sm-3">
                          <div class="btn-group">
                            <button type="button" class="btn_add_file btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                            <button type="button" class="btn_remove_file btn btn-lg bg-maroon"><i class="fa fa-close"></i></button>
                            <button type="button" class="btn btn_up_file btn-lg bth-default"><i class="fa fa-arrow-up"></i></button>
                            <button type="button" class="btn btn_down_file btn-lg bth-default"><i class="fa fa-arrow-down"></i></button>
                          </div>
                        </div>  
                        @endif
                    </div>  
                  </div>
                  @endforelse     
                  {{-- Ckeditor --}}
                  <div id="tab_element" class="tab_editor">
                    <ul class="resp-tabs-list tab_element ">
                        <li>Mô tả</li>
                        <li>Nội dung</li>                  
                    </ul>
                    <div class="resp-tabs-container tab_element">
                        <div>
                            <textarea name="description" id="description" class="ckeditor_textarea form-control" >{{old('description')}}</textarea>
                        </div>
                        <div>
                            <textarea name="content" id="content" class="ckeditor_textarea form-control" >{{old('content')}}</textarea>   
                        </div>                        
                    </div>
                  </div>
                 {{--  SEO  --}}
                  <div class="box-header ">
                    <h3 class="box-title">SEO</h3>
                    <hr/>
                    <div class="form-group row">
                      <label for="seo_title" class="col-sm-2 col-form-label">SEO Title:</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" id="seo_title" placeholder="SEO title" value="{{old('seo_title')}}" name="seo_title">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="seo_slug" class="col-sm-2 col-form-label">Slug:</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" id="seo_slug" placeholder="Slug" value="{{old('seo_slug')}}" name="seo_slug">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="meta_description" class="col-sm-2 col-form-label">Meta Description:</label>
                      <div class="col-sm-10">
                        <textarea name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description" >{{old('meta_description')}}</textarea>   
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="focus_keyword" class="col-sm-2 col-form-label">Focus Keyword:</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" id="focus_keyword" placeholder="Focus Keyword" value="{{old('focus_keyword')}}" name="focus_keyword">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="meta_keyword" class="col-sm-2 col-form-label">Meta Keyword:</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" id="meta_keyword" placeholder="Meta Keyword" value="{{old('meta_keyword')}}" name="meta_keyword">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="meta_title" class="col-sm-2 col-form-label">Meta Title:</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" id="meta_title" placeholder="Meta Title" value="{{old('meta_title')}}" name="meta_title">
                      </div>
                    </div>
                    
                  </div>
                 {{--  Button  --}}
                  <div class="form-group row">
                    <div class="col-sm-12" style="text-align:right">
                      <button type="submit" class="btn btn-app bg-aqua">
                        <i class="fa fa-save"></i> Lưu
                      </button>
                      <a class="btn btn-app bg-yellow">
                        <i class="fa fa-window-close-o"></i> Hủy
                      </a>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              @if($muti_upload) 
              <div id="__temp_file">
                <div class="form-group row">
                  <label for="images" class="col-sm-2 col-form-label">Hình Ảnh:
                    <button type="button" class="image_toggle_hover btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                  </label>
                  <div class="col-sm-7">                                   
                      <input class="form-control" placeholder="Chọn Hình ảnh" name="images[]" type="text" value="">
                      <button type="button" class="btn btn-lg btn-info btn_file_array">Chọn file</button>
                  </div>
                  <div class="col-sm-3">
                    <div class="btn-group">
                      <button type="button" class="btn_add_file btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn_remove_file btn btn-lg bg-maroon"><i class="fa fa-close"></i></button>
                      <button type="button" class="btn_up_file remove_file btn btn-lg bth-default"><i class="fa fa-arrow-up"></i></button>
                      <button type="button" class="btn btn_down_file btn-lg bth-default"><i class="fa fa-arrow-down"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            </form>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
</div>
<!-- /.col -->
@endsection

@section('include-header')
  <!-- toast CSS -->
  <link href="admin/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">
  <!-- Ckeditor -->
	<script src="plugins/admin/ckeditor/ckeditor.js"></script>
  <!-- Ckeditor -->
	<script src="plugins/admin/ckfinder/ckfinder.js"></script>

 {{--  Tab  --}}
  <link rel="stylesheet" type="text/css" href="plugins/admin/tab/css/easy-responsive-tabs.css " />
 {{--  <script src="js/jquery-1.9.1.min.js"></script>  --}}
  
@endsection
@section('include-header')
  <!-- toast CSS -->
  <link href="admin/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">
  <!-- Ckeditor -->
	<script src="plugins/admin/ckeditor/ckeditor.js"></script>
  <!-- Ckeditor -->
	<script src="plugins/admin/ckfinder/ckfinder.js"></script>

 {{--  Tab  --}}
  <link rel="stylesheet" type="text/css" href="plugins/admin/tab/css/easy-responsive-tabs.css " />
 {{--  <script src="js/jquery-1.9.1.min.js"></script>  --}}
  
@endsection
@section('include-footer')		
    <!-- toast -->
	  <script src="admin/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script src="admin/js/pages/toastr.js"></script>
    <script src="plugins/admin/tab/js/easyResponsiveTabs.js"></script>
    <script src="plugins/admin/slug/speakingurl.min.js"></script>
    <script src="plugins/admin/slug/slugify.js"></script>
    <script>
      jQuery(function($) {
        $('#seo_slug').slugify('#name'); // Type as you slug
      });
    </script>
@endsection
@section('script')	
{{--  TAB  --}}
<script type="text/javascript">
  $(document).ready(function(){
    // Ckeditor
      $('.ckeditor_textarea').each(function(){
        CKEDITOR.replace( this.id);
      });
    // Làm mới tab
      refresh_tab();    
    // Thêm tab      
    i = $('#tab_element').find('ul').find('li.option_tab_li').length; 
      $('form').on('click','#add_tab',function(){
        add_tab(i);
        i++;
      });
    // Xóa tab
      $('form').on('click','.btn_remove_tabs',function(){
        comfirm_delete_tab("Xác thực","Bạn muốn xóa Tabs này !",$(this));
      });
    //Set finder
      $('#form_file').on('click','.btn_file_array',function(){        
        Set_Finder($(this));
      });
    //Change Title Tabs
      $('form').on('keyup','input.tab_header',function(){      
        var id = $(this).parents('.resp-tab-content.tab_element').attr('data-li');
        if($(this).val()=="")
        {
          $('li#'+id).html("Không tên");
        }else{
          $('li#'+id).html($(this).val());
        }
      });      
  });
{{--  Muti Upload  --}}
  @if($muti_upload)
    $(document).ready(function(){     
      // Add input
        $('#form_file').on('click','.btn_add_file',function(){    
          Add_Input_Finder({{$limit_upload}});           
        });
      // Remove input
        $('#form_file').on('click','.btn_remove_file',function(){     
          if($('input[name="images[]"]').length>2){
            $(this).parent().parent().parent().remove();
          }
        });
      // Sort up
        $('#form_file').on('click','.btn_up_file',function(){     
          sort_up_finder($(this));
        });
      // Sort down
        $('#form_file').on('click','.btn_down_file',function(){     
          sort_down_finder($(this));         
        });
    });
  @endif
</script>
@endsection