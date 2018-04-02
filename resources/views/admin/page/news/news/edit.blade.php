@extends('admin.index') 
@section('content-header')
  <h1>
    BÀI VIẾT [ TIN TỨC ]
  </h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-edit"></i> Tin tức</a></li>
    <li class="breadcrumb-item"><a href="data.html#">Bài viết</a></li>
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
          <form method="post" action="{{$__URL['update']}}/{{$item->id}}">
           {{ csrf_field() }}             
            <div class="row">
              <div class="col-12">
                <div class="form-group row">
                  <label for="id" class="col-sm-2 col-form-label">Mã tin tức:</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="@if(empty(old('id'))){{$item->news_id}}@else{{old('id')}}@endif" name="id" placeholder="Mã tin tức">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="id" class="col-sm-2 col-form-label">Trạng thái:</label>
                  <div class="col-sm-10">
                    <div class="ichack-input checkbox_m_r10">
                    <input type="checkbox" name="sticky" 
                      @if(!empty(old('sticky'))) 
                        @if(old('sticky')==1)
                         {{"checked"}}
                        @endif                          
                      @else 
                        @if($item->sticky ==1)
                         {{"checked"}}
                        @endif
                      @endif       
                      value="1" class="minimal" >
                    <title-radio>
                      Nổi bật 
                    </title-radio>
                    
                    <input type="checkbox" name="status"
                      @if(!empty(old('status'))) 
                        @if(old('status')==1)
                         {{"checked"}}
                        @endif                          
                      @else 
                        @if($item->status ==1)
                         {{"checked"}}
                        @endif
                      @endif
                      value="1"  class="minimal" >
                    <title-radio>
                      Hiển thị
                    </title-radio>

                      <input type="checkbox" name="new" 
                      @if(!empty(old('new'))) 
                        @if(old('new')==1)
                         {{"checked"}}
                        @endif                          
                      @else 
                        @if($item->new ==1)
                         {{"checked"}}
                        @endif
                      @endif
                      value="1" class="minimal" >
                      <title-radio>
                        Mới
                      </title-radio>
                
                      <input type="checkbox" name="hot"
                      @if(!empty(old('hot'))) 
                        @if(old('hot')==1)
                         {{"checked"}}
                        @endif                          
                      @else 
                        @if($item->hot ==1)
                         {{"checked"}}
                        @endif
                      @endif
                      value="1"  class="minimal" >
                      <title-radio>
                        Hot
                      </title-radio>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Tiêu đề:</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" id="name" placeholder="Tiêu đề" value="@if(empty(old('name'))){{$item->news_title}}@else{{old('name')}}@endif" name="name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cat_id" class="col-sm-2 col-form-label">Danh mục:</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="cat_id" style="width: 100%;">
                      <option value="">Không có danh mục tin tức</option>
                      @foreach($list['category'] as $keyList => $valList)
                        <option value="{{$valList->id}}"
                            @if(!empty(old('cat_id')))
                              @if($valList->id == old('cat_id')){{"selected"}}@endif
                            @else
                              @if($valList->id == $item->category_id){{"selected"}}@endif
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
                      <textarea name="description" id="description" class="ckeditor_textarea form-control" >@if(empty(old('description'))){{$item ->news_description}}@else{{old('description')}}@endif</textarea>
                  </div>
                  <div>
                      <textarea name="content" id="content" class="ckeditor_textarea form-control" >@if(empty(old('content'))){{$item->news_content}}@else{{old('content')}}@endif</textarea>   
                  </div>
              </div>
            </div>
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
@endsection
@include('admin.include.news.news')