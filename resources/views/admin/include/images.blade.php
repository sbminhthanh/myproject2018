@isset($__config['images'])
  @isset($__config['images']['status'])
    @if($__config['images']['status'])
      <div id="form_file">
        <!--  -->
        <?php
          // $list['images'] =  json_decode($item->images, JSON_UNESCAPED_UNICODE);   
          if(!isset($list['images'])||!is_array($list['images']))
          {
            $list['images']=array();            
          }
          ?>
          @forelse ($list['images'] as $key => $value)
            @if($key == $__config['images']['limit'])
              @break;
            @endif
            <div class="form-group row">
              <label for="images" class="col-sm-2 col-form-label">Hình Ảnh:
                <button type="button" class="image_toggle_hover btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
              </label>
              <div class="col-sm-7 relative">                      
                  <input class="form-control" placeholder="Chọn Hình ảnh" name="images[]" type="text" value="@if(!empty(old('images[$key]'))){{old('images[$key]')}}@else{{$value}}@endif">
                  <button type="button" class="btn btn-lg btn-info btn_file_array">Chọn file</button>
              </div>  
              @isset($__config['images']['muti'])
                @if($__config['images']['muti']) 
                  <div class="col-sm-3">
                    <div class="btn-group">
                      <button type="button" class="btn_add_file btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn_remove_file btn btn-lg bg-maroon"><i class="fa fa-close"></i></button>
                      <button type="button" class="btn btn_up_file btn-lg bth-default"><i class="fa fa-arrow-up"></i></button>
                      <button type="button" class="btn btn_down_file btn-lg bth-default"><i class="fa fa-arrow-down"></i></button>
                    </div>
                  </div> 
                @endif     
              @endisset 
            </div>
          @empty
            <div class="form-group row">
              <label for="images" class="col-sm-2 col-form-label">Hình Ảnh:</label>
              <div class="col-sm-7 relative">
                <input class="form-control" placeholder="Chọn Hình ảnh" name="images[]" type="text" value="{{old('images[]')}}" id="images">
                <button type="button" class="btn btn-lg btn-info btn_file_array">Chọn file</button>
              </div>  
              @isset($__config['images']['muti'])
                @if($__config['images']['muti']) 
                  <div class="col-sm-3">
                    <div class="btn-group">
                      <button type="button" class="btn_add_file btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn_remove_file btn btn-lg bg-maroon"><i class="fa fa-close"></i></button>
                      <button type="button" class="btn btn_up_file btn-lg bth-default"><i class="fa fa-arrow-up"></i></button>
                      <button type="button" class="btn btn_down_file btn-lg bth-default"><i class="fa fa-arrow-down"></i></button>
                    </div>
                  </div> 
                @endif     
              @endisset 
            </div>  
          @endforelse      
      </div>
    @endif
  @endisset

  @isset($__config['images']['muti'])
    @if($__config['images']['muti']) 
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
      <script>      
        $(document).ready(function(){     
          // Add input
            $('#form_file').on('click','.btn_add_file',function(){    
              Add_Input_Finder({{$__config['images']['limit']}});           
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
      </script>
    @endif
  @endisset
@endisset