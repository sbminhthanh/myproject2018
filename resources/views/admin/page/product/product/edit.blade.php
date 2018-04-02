@extends('admin.index') 
@section('content-header')
  <h1>
    SẢN PHẨM
  </h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-edit"></i> Sản phẩm</a></li>
    <li class="breadcrumb-item active">Cập nhật</li>
  </ol>
@endsection
@section('content')
<div class="col-12">	
	<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Cập nhật</h3>
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
            <form method="post" action="admin/product/product/edit/{{$product->id}}">
             {{ csrf_field() }}             
              <input type="hidden" value="{{randomToken()}}" name="_randomToken">
              <div class="row">
                <div class="col-12">
                  <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Mã tin tức:</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="@if(empty(old('id'))){{$product->product_id}}@else{{old('id')}}@endif" name="id" placeholder="Mã tin tức">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Trạng thái:</label>
                    <div class="col-sm-10">
                      <div class="ichack-input checkbox_m_r10">
                        <input type="checkbox" name="new" 
                        @if(!empty(old('new'))) 
                          @if(old('new')==1)
                           {{"checked"}}
                          @endif                          
                        @else 
                          @if($product->new ==1)
                           {{"checked"}}
                          @endif
                        @endif       
                        value="1" class="minimal" >
                        <title-radio>
                          Mới
                        </title-radio>
                  
                        <input type="checkbox" name="promotion"
                        @if(!empty(old('promotion'))) 
                          @if(old('promotion')==1)
                           {{"checked"}}
                          @endif                          
                        @else 
                          @if($product->promotion ==1)
                           {{"checked"}}
                          @endif
                        @endif       
                        value="1"  class="minimal" >
                        <title-radio>
                        Khuyến mãi
                        </title-radio>

                        <input type="checkbox" name="sticky" 
                        @if(!empty(old('sticky'))) 
                          @if(old('sticky')==1)
                           {{"checked"}}
                          @endif                          
                        @else 
                          @if($product->sticky ==1)
                           {{"checked"}}
                          @endif
                        @endif       
                        value="1" class="minimal" >
                        <title-radio>
                        Nổi bật 
                        </title-radio>
                    
                        <input type="checkbox" name="status"
                        @if(!empty(old('status')))
                          @if(old('status') ==1)
                           {{"checked"}}
                          @endif                          
                        @else
                          @if($product->status ==1)
                           {{"checked"}}
                          @endif 
                        @endif
                        value="1"  class="minimal" >
                        <title-radio>
                        Hiển thị
                        </title-radio>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Tiêu đề:</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="name" placeholder="Tiêu đề" value="@if(empty(old('name'))){{$product->product_title}}@else{{old('name')}}@endif" name="name">
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
                              @else
                                @if($value->id == $product->category_id){{"selected"}}@endif
                              @endif
                            ><?= str_repeat('|==',$value->depth) ?>{{$value->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <?php $properties_price =  json_decode($product->properties_price, JSON_UNESCAPED_UNICODE); ?>
                    <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Giá:</label>
                      <div class="col-sm-10">
                        <div class="form-group row">
                          <div class="col-sm-4">
                            <input class="form-control input-number-format" type="text" id="price" placeholder="Giá" value="{{$properties_price['price']}}" name="price">
                          </div>                    
                          <div class="col-sm-4">
                            <input class="form-control " type="text" id="unit" placeholder="Đơn vị" value="{{$properties_price['unit']}}" name="unit">
                          </div>
                          <div class="col-sm-4">
                            <input class="form-control input-number-format" type="text" id="ratio" placeholder="Tăng / giảm tối thiểu" value="{{$properties_price['ratio']}}" name="ratio">
                          </div>                    
                          <div class="col-sm-12">
                            <label id="text_price"></label>
                          </div>
                        </div>                    
                      </div>
                    </div>  
                  <?php $properties_promotion =  json_decode($product->properties_promotion, JSON_UNESCAPED_UNICODE); ?> 
                  <div class="form-group row group-promotion">
                    <label for="promotion" class="col-sm-2 col-form-label">Khuyến Mãi:</label>
                    <div class="col-sm-10">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <input class="form-control input-number-format" type="text" id="promotion_price" placeholder="Giá" value="{{$properties_promotion['price']}}" name="promotion_price">
                        </div>                    
                        <div class="col-sm-4">
                          <input class="form-control " type="text" id="promotion_unit" placeholder="Đơn vị" value="{{$properties_promotion['unit']}}" name="promotion_unit">
                        </div>
                        <div class="col-sm-4">
                          <input class="form-control input-number-format" type="text" id="promotion_ratio" placeholder="Tăng / giảm tối thiểu" value="{{$properties_promotion['ratio']}}" name="promotion_ratio">
                        </div>                    
                        <div class="col-sm-12">
                          <label id="text_promotion_price"></label>
                        </div>
                        <div class="col-sm-12">
                          <input class="form-control" type="text" id="promotion_title" placeholder="Mô tả Sale, Giảm 150.000 | Sale -49%" value="@if(empty(old('promotion_title'))){{$properties_promotion['title']}}@else{{old('promotion_title')}}@endif" name="promotion_title">
                        </div>                    
                      </div>                    
                    </div>
                  </div>
                  @if($status_upload)
                    <div id="form_file">
                      <?php $List_image =  json_decode($product->images, JSON_UNESCAPED_UNICODE); ?>
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
                  
                  @if($properties_status)
                  <div id="form_properties">
                    <?php $List_properties =  json_decode($product->properties, JSON_UNESCAPED_UNICODE); ?>
                    @forelse ($List_properties as $key => $value)
                      @if($key == $properties_limit)
                        @break;
                      @endif
                      <div class="form-group row">
                        <label for="promotion_price" class="col-sm-2 col-form-label">Thuộc tính :</label>
                        <div class="col-sm-7">
                          <div class="form-group row">
                            <div class="col-sm-6">
                              <input class="form-control" type="text" placeholder="Tiêu đề" value="{{$value['title']}}" name="properties_title[]">
                            </div>                    
                            <div class="col-sm-6">
                              <input class="form-control " type="text" placeholder="Nội dung" value="{{$value['value']}}" name="properties_values[]">
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
                    @empty
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
                    @endforelse   
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
                            <textarea name="description" id="description" class="ckeditor_textarea form-control" >@if(empty(old('description'))){{$product ->product_description}}@else{{old('description')}}@endif</textarea>
                        </div>
                        <div>
                            <textarea name="content" id="content" class="ckeditor_textarea form-control" >@if(empty(old('content'))){{$product->product_content}}@else{{old('content')}}@endif</textarea>   
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
<!-- /.col -->
@include('admin.include.images')
@include('admin.include.images_product')
@endsection
@include('admin.include.product.product')