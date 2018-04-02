@extends('admin.layout.index') 
@section('content-header')
  <h1>
    TÀI KHOẢN
  </h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-edit"></i> Tin tức</a></li>
		<li class="breadcrumb-item"><a href="data.html#">Danh mục</a></li>
		<li class="breadcrumb-item active">Thêm</li>
	</ol>
@endsection
@section('content')
<?php
$status_upload = Config::get('constants.file.images.user.account.upload');
$muti_upload = Config::get('constants.file.images.user.account.muti');
$limit_upload = Config::get('constants.file.images.user.account.limit');

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
            <form method="post" action="admin/user/account/add">
             {{ csrf_field() }}
              
              <input type="hidden" value="{{randomToken()}}" name="_randomToken">
              <div class="row">
                <div class="col-12">
                  <div class="form-group row">
                   
                    <label for="user" class="col-sm-2 col-form-label">Tài khoản:</label>
                    <div class="col-sm-4">
                      <input class="form-control" type="text" value="{{old('user')}}" name="user" placeholder="Tên đăng nhập">
                    </div>      
                    <label for="pass" class="col-sm-2 col-form-label">Mật khẩu:</label>
                    <div class="col-sm-4">
                      <input class="form-control" type="text" value="@if(empty(old('pass')))<?php echo random_String_Password(); ?>@else{{old('pass')}}@endif" name="pass" placeholder="Mật khẩu">
                    </div>              
                  </div>

                  <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Trạng thái:
                     </label>
                    <div class="col-sm-4">
                      <div class="ichack-input checkbox_m_r10">  
                        <input type="checkbox" name="active" 
                        @if(old('active') ==1)
                         {{"checked"}}
                        @endif
                        value="1" class="minimal" >
                        <title-radio>
                        Kích hoạt
                        </title-radio>
                    
                        <input type="checkbox" name="status"
                        @if(old('status') ==1)
                         {{"checked"}}
                        @endif
                        value="1"  class="minimal" >
                        <title-radio>
                        Hoạt động
                        </title-radio>
                      </div>
                    </div>
                    <label for="access_id" class="col-sm-2 col-form-label">Quyền:</label>
                    <div class="col-sm-4">
                      <select class="form-control select2" name="access_id" style="width: 100%;">
                        <option value="">Chọn quyền</option>
                        @foreach($list_access as $key => $value)
                          <option value="{{$value->id}}"
                              @if(!empty(old('access_id')))
                                @if($value->id == old('access_id')){{"selected"}}@endif                             
                              @endif
                            >{{$value->access_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Họ tên:</label>
                    <div class="col-sm-4">
                      <input class="form-control" type="text" id="name" placeholder="Họ tên" value="{{old('name')}}" name="name">
                    </div>                    
                    <label for="phone" class="col-sm-2 col-form-label">Điện thoại:</label>
                    <div class="col-sm-4">
                      <input class="form-control" type="text" id="phone" placeholder="Điện thoại" value="{{old('phone')}}" name="phone">
                    </div>                    
                  </div>
                  <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Địa chỉ:</label>
                    <div class="col-sm-4">
                      <input class="form-control" type="text" id="address" placeholder="Địa chỉ liên lạc" value="{{old('address')}}" name="address">
                    </div>                    
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-4">
                      <input class="form-control" type="text" id="email" placeholder="Email" value="{{old('email')}}" name="email">
                    </div>                    
                  </div>
                  
                  <div class="form-group row">
                    <label for="cmnd" class="col-sm-2 col-form-label">CMND:</label>
                    <div class="col-sm-4">
                      <input class="form-control" type="text" id="cmnd" placeholder="CMND" value="{{old('cmnd')}}" name="cmnd">
                    </div> 
                    <label for="birthdate" class="col-sm-2 col-form-label">Ngày sinh:</label>
                    <div class="col-sm-4 input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" placeholder="ngày sinh" id="birthdate" name="birthdate">
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
                
                 {{--  Button  --}}
                  <div class="form-group row">
                    <div class="col-sm-12" style="text-align:right">
                      <button type="submit" class="btn btn-app bg-aqua">
                        <i class="fa fa-save"></i> Lưu
                      </button>
                      <a class="btn btn-app bg-yellow" href="admin/user/account/list">
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
  <link rel="stylesheet" type="text/css" href="plugins/admin/tab/css/easy-responsive-tabs.css" />
  <link rel="stylesheet" type="text/css" href="admin/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
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
      $('#birthdate').datepicker({
        language: 'vi',
        autoclose: true,
        format: 'dd/mm/yyyy'
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
</script>
@endsection