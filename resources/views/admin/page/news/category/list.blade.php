@extends('admin.index') 
@section('content-header')
  <h1>
    THỂ LOẠI [ TIN TỨC ]
  </h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-edit"></i> Tin tức</a></li>
		<li class="breadcrumb-item"><a href="data.html#">Thể loại</a></li>
		<li class="breadcrumb-item active">Danh sách</li>
	</ol>
@endsection
@section('content')
<div class="col-12">
	
	<div class="box">
		{{--  <div class="box-header">
			<h3 class="box-title">Danh sách </h3>
			<h6 class="box-subtitle">Thể loại</h6>
		</div>  --}}
		<!-- /.box-header -->
		<div class="box-body">
			<div class="box_button_table">	
				<a class="btn btn-app bg-blue" href="{{$__URL['create']}}">
					<i class="fa  fa-plus-square"></i> Thêm
				</a>
				<a class="btn btn-app bg-red">
					<i class="fa  fa-window-close"></i> Xóa
				</a>
			</div>
			<div class="dataTables_wrapper">			
				<table id="table_responsive"  class="table table-bordered table-hover display nowrap margin-top-10 table-responsive dataTable" role="grid" >
					<thead>
						<tr role="row">
                            <th class="input_check">
                            	<div class="ichack-input">
									<input type="checkbox" class="minimal check_all">
								</div>
                            </th>
							<th class="sorting item_index" tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"
							>STT</th>
							<th class="sorting id" tabindex="0"  rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
							>Mã</th>
							<th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"
							>Tên</th>
							<th class="sorting item_check" tabindex="0"  rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
							>Nổi bật</th>
							<th class="sorting item_check" tabindex="0"  rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
							>Hiển thị</th>
                            <th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($list['category'] as $key => $item)
                        <tr role="row" class="odd">
                            <td class="input_check">
								<div class="ichack-input">
									<input type="checkbox" class="minimal" id="id_{{$item->id}}" name="id[]" value="{{$item->id}}">
								</div>
							</td>
							<td class="item_index">
								{{$key+1}} 
							</td>
							<td class="sorting_1">{{$item->category_id}}</td>
							<td>
								<?= str_repeat('|____',$item->depth) ?>{{$item->category_name}}
							</td>							
							<td class="item_check">
								@if($item->sticky==1)
									<img src="images/check.png" class="icon-check">
								@else
									<img src="images/no_check.png" class="icon-check">
								@endif
							</td>
							<td class="item_check">
								@if($item->status==1)
									<img src="images/check.png" class="icon-check">
								@else
									<img src="images/no_check.png" class="icon-check">
								@endif
							</td>
                            <td class="action_tablel">           
								<a href="{{$__URL['update']}}/{{$item->id}}">
									<span class="label bg-aqua">
										Thay đổi
										<i class="fa fa-pencil"></i>
									</span> 
								</a>
								<a href="{{$__URL['delete']}}/{{$item->id}}">
									<span class="label bg-danger">
										Xóa
										<i class="ion ion-close"></i>
									</span>
								</a>
                            </td>
						</tr>			
						@endforeach			
					</tbody>
					<tfoot>
						<tr role="row">
                            <th class="input_check">
                            	<div class="ichack-input">
									<input type="checkbox" class="minimal" >
								</div>
                            </th>
							<th class="sorting item_index" tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"
							>STT</th>
							<th class="sorting id" tabindex="0"  rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
							>Mã</th>
							<th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"
							>Tên</th>
							<th class="sorting item_check" tabindex="0"  rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
							>Nổi bật</th>
							<th class="sorting item_check" tabindex="0"  rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
							>Hiển thị</th>
                            <th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
            <!-- /.box-body -->
          	</div>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
<!-- /.col -->
@endsection


@section('include-footer')	
<?php
$excel = Config::get('constants.file.excel.news.category');
?>
	<!-- DataTables -->
	<script src="admin/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="admin/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>	
	<script src="admin/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="admin/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="admin/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="admin/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="admin/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="admin/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="admin/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>

	<script>
		$('.check_all').on('ifClicked',function(){
			$('input.minimal').iCheck('toggle');
		});

   {{--  $('#table_responsive').DataTable();  --}}
   {{--  $('#table_responsive').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
	  --}}
	@if($excel)
	$('#table_responsive').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
	@endif
	
	</script>
@endsection