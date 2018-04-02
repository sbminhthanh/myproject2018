
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
    <script>
      jQuery(function($) {
        $('#seo_slug').slugify('#name'); // Type as you slug
      });
    </script>
@endsection
@section('script')	
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
    //Set finder
      $('#form_file').on('click','.btn_file_array',function(){        
        Set_Finder($(this));
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