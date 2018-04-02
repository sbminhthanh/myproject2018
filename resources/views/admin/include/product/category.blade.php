
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

</script>
@endsection