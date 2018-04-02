@extends('admin.index') 
@section('content-header')
  <h1>
    MENU
  </h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-edit"></i> Menu</a></li>
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
      <form method="post" action="{{$__URL['create']}}/{{$group_id}}">
       {{ csrf_field() }}
        <div class="row">
          <div class="col-12">
            <div class="form-group row">
              <label for="cat_id" class="col-sm-2 col-form-label">Nhóm Menu:</label>
              <div class="col-sm-10">
                <select class="form-control select2" name="group_id" style="width: 100%;">
                  <option value="">Chọn nhóm menu</option>
                  @foreach($list['menu_group'] as $keyList => $valList)
                    <option value="{{$valList->id}}"
                        @if(!empty(old('group_id')))
                          @if($valList->id == old('group_id')){{"selected"}}@endif  
                        @elseif ($valList->id == $group_id)
                          {{"selected"}}
                        @endif
                      ><?= str_repeat('|==',$valList->depth) ?>{{$valList->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="id" class="col-sm-2 col-form-label">Trạng thái:</label>
              <div class="col-sm-10">
                <div class="ichack-input checkbox_m_r10">
                  <input type="checkbox" name="sticky" 
                  @if(old('sticky') ==1 || (!old('sticky') && $__config['attr']['sticky']))
                   {{"checked"}}
                  @else 
                  @endif
                  value="1" class="minimal" >                        
                  <title-radio>
                    Nổi bật 
                  </title-radio>
            
                  <input type="checkbox" name="status"
                  @if(old('status') ==1 || (!old('status') && $__config['attr']['status']) )
                   {{"checked"}}
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
                <input class="form-control" type="text" id="name" placeholder="Tiêu đề" value="{{old('name')}}" name="name">
              </div>              
            </div>
            <div class="form-group row">
              <label for="cat_id" class="col-sm-2 col-form-label">Menu Cha:</label>
              <div class="col-sm-10">
                <select class="form-control select2" name="cat_id" style="width: 100%;">
                  <option value="">Chọn danh mục Menu cha</option>
                  @foreach($list['menu'] as $keyList => $valList)
                    <option value="{{$valList->id}}"
                        @if(!empty(old('cat_id')))
                          @if($valList->id == old('cat_id')){{"selected"}}@endif  
                        @elseif ($valList->id == old('cat_id'))
                          {{"selected"}}
                        @endif
                      ><?= str_repeat('|==',$valList->depth) ?>{{$valList->menu_title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            @include('admin.include.images')
            @include('admin.include.menu.menu')            
            {{-- Ckeditor --}}
            <div id="tab_element" class="tab_editor">
              <ul class="resp-tabs-list tab_element ">
                  <li>Mô tả</li>
              </ul>
              <div class="resp-tabs-container tab_element">
                  <div>
                      <textarea name="description" id="description" class="ckeditor_textarea form-control" >{{old('description')}}</textarea>
                  </div>
              </div>
            </div>
           {{--  Button  --}}
            <div class="form-group row">
              <div class="col-sm-12" style="text-align:right">
                <button type="submit" class="btn btn-app bg-aqua">
                  <i class="fa fa-save"></i> Lưu
                </button>
                <a class="btn btn-app bg-yellow" href="admin/news/news/list">
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
<!-- @include('admin.include.news.news') -->
