<?php 
  $checkbox_access = Config::get('constants.access');
?>

<div class="form-group row">
  <label for="id" class="col-sm-2 col-form-label">Quản trị:</label>
  <div class="col-sm-10">
    <div class="ichack-input checkbox_m_r10">
      <input type="radio" name="area_admin" 
      @if(old('area_admin') ==1)
        {{"checked"}}
      @elseif(!empty($access)&&$access->area_admin==1)
        {{"checked"}}
      @endif
      value="1" class="minimal" >
      <title-radio>
        Cho phép
      </title-radio>

      <input type="radio" name="area_admin" 
      @if(old('area_admin') ==1)
        {{"checked"}}
      @elseif(!empty($access)&&$access->area_admin==0)
        {{"checked"}}
      @endif
      value="0" class="minimal" >
      <title-radio>
        Không cho phép
      </title-radio>
    </div>
  </div>
</div>         
{{--  Lặp lấy ra các quyền  --}}
@foreach($checkbox_access as $key_item_access  => $item_access)
<div class="form-group row">
  <label for="{{$key_item_access}}" class="col-sm-2 col-form-label">{{$item_access['title']}}</label>
  <div class="col-sm-10">
    <div class="ichack-input checkbox_m_r10">
      @foreach($item_access['action'] as $key_access => $value_access)
        <input type="checkbox" name="{{$key_item_access}}[{{$key_access}}]" 
        @if(old($key_item_access.".".$key_access) ==1)
          {{"checked"}}
        @elseif(!empty($access_edit) && array_key_exists($key_item_access,$access_edit) && array_key_exists($key_access,$access_edit[$key_item_access]) && $access_edit[$key_item_access][$key_access]==1 )
          {{"checked"}}
        @elseif($value_access['checked'] && empty($access_edit))
          {{"checked"}}
        @endif
        value="1" class="minimal" >
        <title-radio>
          {{$value_access['title']}}
        </title-radio>
      @endforeach
    </div>
  </div>
</div>  
@endforeach              
</hr>         