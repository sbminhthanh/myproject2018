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
            <form method="post" action="admin/product/product/add">
             {{ csrf_field() }}
              
              <input type="hidden" value="{{randomToken()}}" name="_randomToken">
              <div class="row">
                <div class="col-12">
                   <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Mã SP:</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{old('id')}}" name="id" placeholder="Mã danh mục">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Trạng thái:</label>
                    <div class="col-sm-10">
                      <div class="ichack-input checkbox_m_r10">
                        <input type="checkbox" name="new" 
                        @if(old('new') ==1)
                         {{"checked"}}
                        @endif
                        value="1" class="minimal" >
                        <title-radio>
                          Mới
                        </title-radio>
                  
                        <input type="checkbox" name="promotion"
                        @if(old('promotion') ==1)
                         {{"checked"}}
                        @endif
                        value="1"  class="minimal" >
                        <title-radio>
                        Khuyến mãi
                        </title-radio>

                        <input type="checkbox" name="sticky" 
                        @if(old('sticky') ==1)
                         {{"checked"}}
                        @endif
                        value="1" class="minimal" >
                        <title-radio>
                        Nổi bật 
                        </title-radio>
                    
                        <input type="checkbox" name="status"
                        @if(old('status') ==1)
                         {{"checked"}}
                        @endif
                        value="1"  class="minimal" >
                        <title-radio>
                        Hiển thị
                        </title-radio>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Tên SP:</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="name" placeholder="Tiêu đề" value="{{old('name')}}" name="name">
                    </div>                    
                  </div>
                  <div class="form-group row">
                    <label for="cat_id" class="col-sm-2 col-form-label">Danh mục:</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="cat_id" style="width: 100%;">
                        <option value="">Không có danh mục tin tức</option>
                        @foreach($select_product_category as $key => $value)
                          <option value="{{$value->id}}"
                              @if(!empty(old('cat_id')))
                                @if($value->id == old('cat_id')){{"selected"}}@endif                             
                              @endif
                            ><?= str_repeat('|==',$value->depth) ?>{{$value->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Giá:</label>
                    <div class="col-sm-10">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <input class="form-control input-number-format" type="text" id="price" placeholder="Giá" value="{{old('price')}}" name="price">
                        </div>                    
                        <div class="col-sm-4">
                          <input class="form-control " type="text" id="unit" placeholder="Đơn vị" value="{{old('unit')}}" name="unit">
                        </div>
                        <div class="col-sm-4">
                          <input class="form-control input-number-format" type="text" id="ratio" placeholder="Tăng / giảm tối thiểu" value="{{old('ratio')}}" name="ratio">
                        </div>                    
                        <div class="col-sm-12">
                          <label id="text_price"></label>
                        </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="form-group row group-promotion">
                    <label for="promotion" class="col-sm-2 col-form-label">Khuyến Mãi:</label>
                    <div class="col-sm-10">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <input class="form-control input-number-format" type="text" id="promotion_price" placeholder="Giá" value="{{old('promotion_price')}}" name="promotion_price">
                        </div>                    
                        <div class="col-sm-4">
                          <input class="form-control " type="text" id="promotion_unit" placeholder="Đơn vị" value="{{old('promotion_unit')}}" name="promotion_unit">
                        </div>
                        <div class="col-sm-4">
                          <input class="form-control input-number-format" type="text" id="promotion_ratio" placeholder="Tăng / giảm tối thiểu" value="{{old('promotion_ratio')}}" name="promotion_ratio">
                        </div>                    
                        <div class="col-sm-12">
                          <label id="text_promotion_price"></label>
                        </div>
                        <div class="col-sm-12">
                          <input class="form-control" type="text" id="promotion_title" placeholder="Mô tả Sale, Giảm 150.000 | Sale -49%" value="{{old('promotion_title')}}" name="promotion_title">
                        </div>                    
                      </div>                    
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
                      <div class="col-sm-3">
                        <div class="btn-group">
                          <button type="button" class="btn_add_file btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                          <button type="button" class="btn_remove_file btn btn-lg bg-maroon"><i class="fa fa-close"></i></button>
                          <button type="button" class="btn btn_up_file btn-lg bth-default"><i class="fa fa-arrow-up"></i></button>
                          <button type="button" class="btn btn_down_file btn-lg bth-default"><i class="fa fa-arrow-down"></i></button>
                        </div>
                      </div>  
                    </div>  
                  </div>
                  @endforelse     

                  @if($properties_status)
                  <div id="form_properties">
                    <div class="form-group row">
                      <label for="promotion_price" class="col-sm-2 col-form-label">Thuộc tính :</label>
                      <div class="col-sm-7">
                        <div class="form-group row">
                          <div class="col-sm-6">
                            <input class="form-control" type="text" placeholder="Tiêu đề" value="" name="properties_title[]">
                          </div>                    
                          <div class="col-sm-6">
                            <input class="form-control " type="text" placeholder="Nội dung" value="" name="properties_values[]">
                          </div>              
                        </div>              
                      </div> 
                      <div class="col-sm-3">
                        <div class="btn-group">
                          <button type="button" class="btn_add_properties btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                          <button type="button" class="btn_remove_properties btn btn-lg bg-maroon"><i class="fa fa-close"></i></button>
                          <button type="button" class="btn btn_up_properties btn-lg bth-default"><i class="fa fa-arrow-up"></i></button>
                          <button type="button" class="btn btn_down_properties btn-lg bth-default"><i class="fa fa-arrow-down"></i></button>
                        </div>
                      </div>                      
                    </div>
                  </div>
                  @endforelse  

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
                        @endif
                        <li id="add_tab">+ Thêm</li>       
                    </ul>
                    <div class="resp-tabs-container tab_element">
                        <div>
                            <textarea name="description" id="description" class="ckeditor_textarea form-control" >{{old('description')}}</textarea>
                        </div>
                        <div>
                            <textarea name="content" id="content" class="ckeditor_textarea form-control" >{{old('content')}}</textarea>   
                        </div>              
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
                                      <input class="form-control " type="text" id="name" placeholder="Tiêu đề"  value="{{old('tab_title')[$key]}}"  name="tab_title[]">
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
                        @endif          
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
                      <a class="btn btn-app bg-yellow" href="admin/product/product/list">
                        <i class="fa fa-window-close-o"></i> Hủy
                      </a>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>

              @if($properties_muti)
              <div id="__temp_properties">
                <div class="form-group row">
                  <label for="promotion_price" class="col-sm-2 col-form-label">Thuộc tính :</label>
                  <div class="col-sm-7">
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <input class="form-control" type="text" placeholder="Tiêu đề" value="" name="properties_title[]">
                      </div>                    
                      <div class="col-sm-6">
                        <input class="form-control " type="text" placeholder="Nội dung" value="" name="properties_values[]">
                      </div>              
                    </div>              
                  </div> 
                  <div class="col-sm-3">
                      <div class="btn-group">
                        <button type="button" class="btn_add_properties btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                        <button type="button" class="btn_remove_properties btn btn-lg bg-maroon"><i class="fa fa-close"></i></button>
                        <button type="button" class="btn btn_up_properties btn-lg bth-default"><i class="fa fa-arrow-up"></i></button>
                        <button type="button" class="btn btn_down_properties btn-lg bth-default"><i class="fa fa-arrow-down"></i></button>
                      </div>
                    </div>                      
                </div>
              </div>
              @endforelse  
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
@section('include-footer')		
    <!-- toast -->
	  <script src="admin/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script src="admin/js/pages/toastr.js"></script>
    <script src="plugins/admin/format_number/simple.money.format.js"></script>
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
    if($('input[name="promotion"]').parent().hasClass('checked'))
    {
        $('.group-promotion').show();
    }else{
        $('.group-promotion').hide();
    }
    $('input[name="promotion"]').on('ifChanged', function(event){
      if($(this).parent().hasClass('checked'))
      {
          $('.group-promotion').slideToggle();
      }else{
          $('.group-promotion').slideToggle();
      }      
    });
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
      
      $('.input-number-format').simpleMoneyFormat(); 
      $('form').on('keyup','#price , #unit',function(){
        var content =  $('#price').val() + " / " +  $('#unit').val()
        $('#text_price').text(content);
      });
      $('form').on('keyup','#promotion_price , #promotion_unit',function(){
        var content =  $('#promotion_price').val() + " / " +  $('#promotion_unit').val()
        $('#text_promotion_price').text(content);
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
{{--  Muti Properties  --}}
  @if($properties_muti)
    $(document).ready(function(){     
      // Add input
        $('#form_properties').on('click','.btn_add_properties',function(){    
          Add_Input_Properties({{$properties_limit}});           
        });
      // Remove input
        $('#form_properties').on('click','.btn_remove_properties',function(){     
          if($('input[name="properties_title[]"]').length>2){
            $(this).parent().parent().parent().remove();
          }
        });
      // Sort up
        $('#form_properties').on('click','.btn_up_properties',function(){     
          sort_up_properties($(this));
        });
      // Sort down
        $('#form_properties').on('click','.btn_down_properties',function(){     
          sort_down_properties($(this));         
        });
    });
  @endif
</script>
@endsection