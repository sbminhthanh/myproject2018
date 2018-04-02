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
    //Set finder
      $('#form_file').on('click','.btn_file_array',function(){        
        Set_Finder($(this));
      });  
  });
</script>
@endsection