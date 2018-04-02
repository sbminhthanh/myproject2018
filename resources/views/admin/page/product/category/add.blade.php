@extends('admin.index') 
@section('content-header')
  <h1>
    DANH MỤC SẢN PHẨM
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
            <form method="post" action="{{$__URL['create']}}">
              {{ csrf_field() }}              
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
                        @if(old('sticky') ==1 || (!old('sticky') && $__config['attr']['sticky']))
                         {{"checked"}}
                        @else 
                        @endif
                        value="1" class="minimal" >
                        Nổi bật 
                      </div>
                      <div class="ichack-input">
                        <input type="checkbox" name="status"
                        @if(old('status') ==1 || (!old('status') && $__config['attr']['status']) )
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
                        @foreach($list['category'] as $keyList => $valList)
                          <option value="{{$valList->id}}"
                              @if(!empty(old('parent_id')))
                                @if($valList->id == old('parent_id')){{"selected"}}@endif                             
                              @endif
                          ><?= str_repeat('|==',$valList->depth) ?>{{$valList->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  
                  @include('admin.include.images')

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
                  <!-- SEO -->
                  @include('admin.include.seo')
                  
                 {{--  Button  --}}
                  <div class="form-group row">
                    <div class="col-sm-12" style="text-align:right">
                      <button type="submit" class="btn btn-app bg-aqua">
                        <i class="fa fa-save"></i> Lưu
                      </button>
                      <a class="btn btn-app bg-yellow" href="{{$__URL['cancel']}}">
                        <i class="fa fa-window-close-o"></i> Hủy
                      </a>
                    </div>
                  </div>

                </div>
                <!-- /.col -->
              </div>
            
            </form>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
</div>
<!-- /.col -->


@include('admin.include.product.category')
@endsection