@extends('admin.index') 
@section('content-header')
  <h1>
    THỂ LOẠI [ TIN TỨC ]
  </h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-edit"></i> Tin tức</a></li>
    <li class="breadcrumb-item"><a href="data.html#">Thể loại</a></li>
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
            <form method="post" action="{{$__URL['update']}}/{{$item->id}}">
             {{ csrf_field() }}             
              <div class="row">
                <div class="col-12">
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nhóm Menu:</label>
                    <div class="col-sm-8">
                      <input class="form-control" type="text" id="name" placeholder="Nhóm Menu" value="@if(!empty(old('name'))){{old('name')}}@else{{$item->title}}@endif" name="name">
                    </div>
                    <div class="col-sm-2">
                      <div class="ichack-input">
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
                        Nổi bật 
                      </div>
                      <div class="ichack-input">
                        <input type="checkbox" name="status"
                        @if(!empty(old('status')))
                          @if(old('status') ==1)
                           {{"checked"}}
                          @endif                          
                        @else
                          @if($item->status ==1)
                           {{"checked"}}
                          @endif 
                        @endif
                        value="1"  class="minimal" >
                        Hiển thị
                      </div>
                    </div>
                  </div>
                  
                  
                   @include('admin.include.images')
                   {{-- Ckeditor --}}
                  <div id="tab_element" class="tab_editor">
                    <ul class="resp-tabs-list tab_element ">
                        <li>Mô tả</li>                
                    </ul>
                    <div class="resp-tabs-container tab_element">
                        <div>
                            <textarea name="description" id="description" class="ckeditor_textarea form-control" >@if(!empty(old('description'))){{old('description')}}@else{{$item->description}}@endif</textarea>
                        </div>
                                       
                    </div>
                  </div>
                 {{--  Button  --}}
                    <div class="form-group row">
                      <div class="col-sm-12" style="text-align:right">
                        <a  href="{{$__URL['update']}}/{{$item->id}}" class="btn btn-app bg-red">
                          <i class="fa fa-refresh"></i> Hoàn tác
                        </a> 
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
@include('admin.include.menu.group')
