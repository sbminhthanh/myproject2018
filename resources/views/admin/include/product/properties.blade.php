 @isset($properties_muti)
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
  <script type="text/javascript">
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
  </script>
  @endif
@endisset