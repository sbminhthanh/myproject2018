@extends('admin.layout.index') 
@section('content-header')
  <h1>
    TIN TỨC
  </h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-edit"></i> Tin tức</a></li>
		<li class="breadcrumb-item"><a href="data.html#">Danh mục</a></li>
		<li class="breadcrumb-item active">Thêm</li>
	</ol>
@endsection
@section('content')
<?php
  $status_upload = Config::get('constants.file.images.news.news.upload');
  $muti_upload = Config::get('constants.file.images.news.news.muti');
  $limit_upload = Config::get('constants.file.images.news.news.limit');
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
            <form method="post" action="admin/news/news/edit/{{$news->id}}">
             {{ csrf_field() }}             
              <input type="hidden" value="{{randomToken()}}" name="_randomToken">
              <div class="row">
                <div class="col-12">
                  <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Mã tin tức:</label>
                    <div class="col-sm-8">
                      <input class="form-control" type="text" value="@if(empty(old('id'))){{$news->news_id}}@else{{old('id')}}@endif" name="id" placeholder="Mã tin tức">
                    </div>
                    <div class="col-sm-2">
                      <div class="ichack-input">
                        <input type="checkbox" name="sticky" 
                        @if(!empty(old('sticky'))) 
                          @if(old('sticky') ==1)
                           {{"checked"}}
                          @endif                          
                        @else 
                          @if($news->sticky ==1)
                           {{"checked"}}
                          @endif
                        @endif       
                        value="1" class="minimal" >
                        Nổi bật 
                      </div>
                      <div class="ichack-input">
                        <input type="checkbox" name="status"
                        @if(!empty(old('status')))
                          @if(old('status') ==1)
                           {{"checked"}}
                          @endif                          
                        @else
                          @if($news->status ==1)
                           {{"checked"}}
                          @endif 
                        @endif
                        value="1"  class="minimal" >
                        Hiển thị
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Tiêu đề:</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="name" placeholder="Tiêu đề" value="@if(empty(old('name'))){{$news->news_title}}@else{{old('name')}}@endif" name="name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="cat_id" class="col-sm-2 col-form-label">Danh mục:</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="cat_id" style="width: 100%;">
                        <option value="">Không có danh mục tin tức</option>
                        @foreach($select_news_category as $key => $value)
                          <option value="{{$value->id}}"
                              @if(!empty(old('cat_id')))
                                @if($value->id == old('cat_id')){{"selected"}}@endif
                              @else
                                @if($value->id == $news->category_id){{"selected"}}@endif
                              @endif
                            ><?= str_repeat('|==',$value->depth) ?>{{$value->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  @if($status_upload)
                  <div id="form_file">
                        <?php $List_image =  json_decode($news->images, JSON_UNESCAPED_UNICODE); ?>
                        @forelse ($List_image as $key => $value)
                          @if($key == $limit_upload)
                            @break;
                          @endif
                          <div class="form-group row">
                            <label for="images" class="col-sm-2 col-form-label">Hình Ảnh:
                              <button type="button" class="image_toggle_hover btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                            </label>
                            <div class="col-sm-7 relative">                      
                                <input class="form-control" placeholder="Chọn Hình ảnh" name="images[]" type="text" value="@if(empty(old('images[$key]'))){{$value}}@else{{old('images[$key]')}}@endif">
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
                        @empty
                          <div class="form-group row">
                            <label for="images" class="col-sm-2 col-form-label">Hình Ảnh:</label>
                            <div class="col-sm-7 relative">
                              <input class="form-control" placeholder="Chọn Hình ảnh" name="images[]" type="text" value="{{old('images[]')}}">
                              <button type="button" class="btn btn-lg btn-info btn_file_array">Chọn file</button>
                            </div>  
                            <div class="col-sm-3">
                              <div class="btn-group">
                                <button type="button" class="btn_add_file btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn_remove_file btn btn-lg bg-maroon"><i class="fa fa-close"></i></button>
                                <button type="button" class="btn btn_up_file btn-lg bth-default"><i class="fa fa-arrow-up"></i></button>
                                <button type="button" class="btn btn_down_file btn-lg bth-default"><i class="fa fa-arrow-down"></i></button>
                              </div>
                            </div>  
                          </div>  
                        @endforelse                       
                    </div>
                    @endif   
                  {{-- Ckeditor --}}
                  <div id="tab_element" class="tab_editor">
                    <ul class="resp-tabs-list tab_element ">
                        <li>Mô tả</li>
                        <li>Nội dung</li>          
                        @if(!empty(old('option_tab')))
                          <?php $item = 0; ?>
                          @foreach(old('option_tab') as $key => $value)
                            @if(!empty(old('tab_header')[$key])&&(!empty(old('option_tab')[$key])||!empty(old('tab_title')[$key])))
                              <li class="option_tab_li" id="option_tab_{{$item}}">{{old('tab_header')[$key]}}</li>
                              <?php $item++?>
                            @endif
                          @endforeach
                        @else
                          @foreach($news->news_tab as $key => $value)
                            <li class="option_tab_li" id="option_tab_{{$key}}">{{$value->title_tab}}</li>
                          @endforeach
                        @endif
                        <li id="add_tab">+ Thêm</li>       
                    </ul>
                    <div class="resp-tabs-container tab_element">
                        <div>
                            <textarea name="description" id="description" class="ckeditor_textarea form-control" >@if(empty(old('description'))){{$news ->news_description}}@else{{old('description')}}@endif</textarea>
                        </div>
                        <div>
                            <textarea name="content" id="content" class="ckeditor_textarea form-control" >@if(empty(old('content'))){{$news->news_content}}@else{{old('content')}}@endif</textarea>   
                        </div>
                       {{--  Tab  --}}
                        
                        @if(!empty(old('option_tab')))
                        <?php $item = 0; ?>
                          @foreach(old('option_tab') as $key => $value)
                            @if(!empty(old('tab_header')[$key])&&(!empty(old('option_tab')[$key])||!empty(old('tab_title')[$key])))                            
                              <div data-li="option_tab_{{$item}}">
                                <div class="box-body">
                                  <div class="form-group row">
                                    <label for="tab_header[]" class="col-sm-2 col-form-label">Tên Tab:</label>
                                    <div class="col-sm-5">
                                      <input class="form-control tab_header" type="text" placeholder="Tên Tabs" value="{{old('tab_header')[$key]}}" name="tab_header[]">
                                    </div>
                                    <button type="button" class="btn_remove_tabs btn btn-lg bg-maroon"> Xóa Tab <i class="fa fa-close"></i></button>
                                    <div class="ichack-input col-sm-3 tab_ckeditor_f_right">
                                      <label class="col-form-label">Hiển thị : </label>
                                      <label class="radio-tab"><input type="radio" value="1"
                                        @if(old('tab_status')[$key]==1)
                                           {{"checked"}}
                                        @endif       
                                        name="tab_temp[{{$key}}]"  class="checked_radio_tab " checked> Có </label>
                                      <label class="radio-tab"><input type="radio"
                                        @if(old('tab_status')[$key]==0)
                                           {{"checked"}}
                                        @endif   
                                        value="0"  name="tab_temp[{{$key}}]" class="checked_radio_tab"> Không </label>
                                        <input type="hidden" class="hidden_tab_status"  name="tab_status[]" value="{{old('tab_status')[$key]}}"/>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="tab_title[]" class="col-sm-2 col-form-label">Tiêu đề:</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="text" id="name" placeholder="Tiêu đề"  value="{{old('tab_title')[$key]}}"  name="tab_title[]">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <textarea name="option_tab[]" id="ck_option_tab_{{$item}}" class="ckeditor_textarea form-control" >{{old('option_tab')[$key]}}</textarea>
                                  </div>
                                </div>
                              </div>
                              <?php $item++?>
                            @endif
                          @endforeach
                        @else
                          @foreach($news->news_tab as $key => $value)
                            <div data-li="option_tab_{{$key}}">
                              <div class="box-body">
                                <div class="form-group row">
                                  <label for="tab_header[]" class="col-sm-2 col-form-label">Tên Tab:</label>
                                  <div class="col-sm-5">
                                    <input class="form-control tab_header" type="text" placeholder="Tên Tabs" value="{{$value->title_tab}}" name="tab_header[]">
                                  </div>
                                  <button type="button" class="btn_remove_tabs btn btn-lg bg-maroon"> Xóa Tab <i class="fa fa-close"></i></button>
                                  <div class="ichack-input col-sm-3 tab_ckeditor_f_right">
                                    <label for="tab_status[]" class="col-form-label">Hiển thị : </label>
                                    <label class="radio-tab">
                                      <input type="radio" value="1"
                                        @if($value->status ==1)
                                         {{"checked"}}
                                        @endif 
                                        name="tab_temp[{{$key}}]" class=" checked_radio_tab" checked> Có 
                                    </label>
                                    <label class="radio-tab">
                                      <input type="radio"                                   
                                        @if($value->status == 0)
                                         {{"checked"}}
                                        @endif                                      
                                      value="0" name="tab_temp[{{$key}}]" class=" checked_radio_tab"> Không 
                                    </label>
                                    <input type="hidden"  class="hidden_tab_status"  name="tab_status[]" value="{{$value->status}}"/>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="tab_title[]" class="col-sm-2 col-form-label">Tiêu đề:</label>
                                  <div class="col-sm-10">
                                    <input class="form-control" type="text" id="name" placeholder="Tiêu đề"  value="{{$value->title}}"  name="tab_title[]">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <textarea name="option_tab[]" id="ck_option_tab_{{$key}}" class="ckeditor_textarea form-control" >{{$value->content}}</textarea>
                                </div>
                              </div>
                            </div>   
                          @endforeach    
                        @endif       
                    </div>
                  </div>
                 {{--  SEO  --}}
                 {{--  SEO  --}}
                  <div class="box-header ">
                      <h3 class="box-title">SEO</h3>
                      <hr/>
                      <div class="form-group row">
                        <label for="seo_title" class="col-sm-2 col-form-label">SEO Title:</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" id="seo_title" placeholder="SEO title" value="@if(empty(old('seo_title'))){{$news->seo_title}}@else{{old('seo_title')}}@endif" name="seo_title">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="seo_slug" class="col-sm-2 col-form-label">Slug:</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" id="seo_slug" placeholder="Slug" value="@if(empty(old('seo_slug'))){{$news->slug}}@else{{old('seo_slug')}}@endif" name="seo_slug">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="meta_description" class="col-sm-2 col-form-label">Meta Description:</label>
                        <div class="col-sm-10">
                          <textarea name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description" >@if(empty(old('meta_description'))){{$news->meta_description}}@else{{old('meta_description')}}@endif</textarea>   
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="focus_keyword" class="col-sm-2 col-form-label">Focus Keyword:</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" id="focus_keyword" placeholder="Focus Keyword" value="@if(empty(old('focus_keyword'))){{$news->focus_keyword}}@else{{old('focus_keyword')}}@endif" name="focus_keyword">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="meta_keyword" class="col-sm-2 col-form-label">Meta Keyword:</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" id="meta_keyword" placeholder="Meta Keyword" value="@if(empty(old('meta_keyword'))){{$news->meta_keyword}}@else{{old('meta_keyword')}}@endif" name="meta_keyword">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="meta_title" class="col-sm-2 col-form-label">Meta Title:</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" id="meta_title" placeholder="Meta Title" value="@if(empty(old('meta_title'))){{$news->meta_title}}@else{{old('meta_title')}}@endif" name="meta_title">
                        </div>
                      </div>                    
                    </div>
                 {{--  Button  --}}
                  <div class="form-group row">
                    <div class="col-sm-12" style="text-align:right">
                      <button type="submit" class="btn btn-app bg-aqua">
                        <i class="fa fa-save"></i> Lưu
                      </button>
                      <a class="btn btn-app bg-yellow" href="admin/news/news/list">
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
                      <input class="form-control" placeholder="Chọn Hình ảnh" name="images[]" type="text" value="" id="images">
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
	<script src="plugins/ckeditor/ckeditor.js"></script>
  <!-- Ckeditor -->
	<script src="plugins/ckfinder/ckfinder.js"></script>

 {{--  Tab  --}}
  <link rel="stylesheet" type="text/css" href="plugins/tab/css/easy-responsive-tabs.css " />
 {{--  <script src="js/jquery-1.9.1.min.js"></script>  --}}
  
@endsection
@section('include-footer')		
    <!-- toast -->
	  <script src="admin/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script src="admin/js/pages/toastr.js"></script>
    <script src="plugins/tab/js/easyResponsiveTabs.js"></script>
    <script src="plugins/slug/speakingurl.min.js"></script>
    <script src="plugins/slug/slugify.js"></script>
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