@extends('admin.layout.index') 
@section('content-header')
	<h1>
		ALBUM ẢNH
	</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-edit"></i> Tin tức</a></li>
		<li class="breadcrumb-item"><a href="data.html#">Danh mục</a></li>
		<li class="breadcrumb-item active">Danh sách</li>
	</ol>
@endsection
@section('content')
	<div class="col-12" ng-controller="Gallery_Controller" ng-init="Load_Gallery()">	
		<div class="box none_background"  >
			{{--  <div class="box-header">
				<h3 class="box-title">Danh sách </h3>
				<h6 class="box-subtitle">Danh Mục Tin Tức</h6>
			</div>  --}}
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row box_button_table">	
					<a class="btn btn-app bg-blue"  data-toggle="modal" data-target="#Gallery">
						<i class="fa fa-plus-square"></i> Thêm
					</a>
				</div>			
				<div class="clearfix"></div>
				<div class="row fx-element-overlay">
				
				{{--  Col  --}}
					<div class="col-xs-12 col-lg-3"  ng-repeat="item_gallery in data_gallery">
						<div class="box box-default">
							<div class="fx-card-item">
								<div class="fx-card-avatar fx-overlay-1"> 
									<img src="<% item_gallery.image_show %>" alt="user">
									<div class="fx-overlay">
										<ul class="fx-info">
											<li><a class="btn default btn-outline image-popup-vertical-fit" href="admin/gallery/photo/<% item_gallery.id %>">
												<i class="ion-search"></i> Chi tiết</a>
											</li>
											<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-edit"></i> Chỉnh sửa </a></li>
										</ul>
									</div>
								</div>
								<div class="fx-card-content">
									<h3 class="box-title"><% item_gallery.title %></h3> 
								</div>
							</div>
						</div>
					</div>
				{{--  End Col  --}}
				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->


{{--  Modal  --}}
	{{--  Gallery  --}}
	<div class="modal fade modal_custom" id="Gallery">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Gallery [ Album ảnh ]</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="box-header ">
						<h3 class="box-title">Thông tin</h3>
						<button class="icon_slide_hidden"><i class=" fa fa-chevron-circle-left"></i></button>
						<hr/>
						<div class="group_slide">
							<div class="form-group row">
								<label for="id" class="col-sm-2 col-form-label">Mã Album:</label>
								<div class="col-sm-8">
									<input class="form-control" type="text" ng-model="g_id" value="" name="id" placeholder="Mã album">
								</div>
								<div class="col-sm-2">
									<div class="ichack-input">
										<input type="checkbox" name="sticky" ng-model="g_sticky"										
										value="1" class="minimal" >
										Nổi bật 
										</div>
										<div class="ichack-input">
										<input type="checkbox" name="status" ng-model="g_status"										
										value="1"  class="minimal" >
										Hiển thị
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="name" class="col-sm-2 col-form-label">Tiêu đề:</label>
								<div class="col-sm-10">
									<input class="form-control" ng-model="g_name" type="text" id="name" placeholder="Tiêu đề" value="" name="name">
								</div>                    
							</div>
							<div class="form-group row">
								<label for="description" class="col-sm-2 col-form-label">Mô tả:</label>
								<div class="col-sm-10">
									<textarea class="form-control" ng-model="g_description" type="text" id="description" placeholder="Mô tả" name="description"></textarea>   
								</div>                    
							</div>			
							<div class="form-group row">
								<label for="images" class="col-sm-2 col-form-label">Ảnh:
									<button type="button" class="image_toggle_hover btn btn-lg bg-navy"><i class="fa fa-plus"></i></button>
								</label>
								<div class="col-sm-10 relative">
									<input class="form-control"   ng-model="g_images"  placeholder="Chọn Hình ảnh" name="images[]" type="text" >
									<button type="button" class="btn btn-lg btn-info btn_file_array">Chọn file</button>
								</div>  
							</div>					
						</div>	                  
					</div>
					<div class="box-header ">
						<h3 class="box-title">SEO</h3>
						<button class="icon_slide_hidden"><i class=" fa fa-chevron-circle-left"></i></button>
						<hr/>
						<div class="group_slide">
							<div class="form-group row">
								<label for="seo_title" class="col-sm-2 col-form-label">SEO Title:</label>
								<div class="col-sm-10">
								<input class="form-control" type="text" id="seo_title" ng-model="g_seo_title" placeholder="SEO title" value="" name="seo_title">
								</div>
							</div>
							<div class="form-group row">
								<label for="seo_slug" class="col-sm-2 col-form-label">Slug:</label>
								<div class="col-sm-10">
								<input class="form-control" type="text" id="seo_slug" ng-model="g_slug" placeholder="Slug" value="" name="seo_slug">
								</div>
							</div>
							<div class="form-group row">
								<label for="meta_description" class="col-sm-2 col-form-label">Meta Description:</label>
								<div class="col-sm-10">
								<textarea name="meta_description" id="meta_description" ng-model="g_meta_description"  class="form-control" placeholder="Meta Description" ></textarea>   
								</div>
							</div>
							<div class="form-group row">
								<label for="focus_keyword" class="col-sm-2 col-form-label">Focus Keyword:</label>
								<div class="col-sm-10">
								<input class="form-control" type="text" id="focus_keyword" ng-model="g_focus_keyword"  placeholder="Focus Keyword" value="" name="focus_keyword">
								</div>
							</div>
							<div class="form-group row">
								<label for="meta_keyword" class="col-sm-2 col-form-label">Meta Keyword:</label>
								<div class="col-sm-10">
								<input class="form-control" type="text" id="meta_keyword" ng-model="g_meta_keyword"  placeholder="Meta Keyword" value="" name="meta_keyword">
								</div>
							</div>
							<div class="form-group row">
								<label for="meta_title" class="col-sm-2 col-form-label">Meta Title:</label>
								<div class="col-sm-10">
								<input class="form-control" type="text" id="meta_title" ng-model="g_meta_title"  placeholder="Meta Title" value="" name="meta_title">
								</div>
							</div>  
						</div>	                  
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button type="button" class="btn btn-primary float-right" ng-click="Action_Gallery()" value=""> <% btn_gallery %> </button>
				</div>
			</div>
		</div>
	</div>
{{--  Gallery  --}}
{{--  End Modal  --}}

</div>
<!-- /.col -->
@endsection

@section('include-header')
<!-- Popup CSS -->
<link href="admin/assets/vendor_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
<!-- Ckeditor -->
<script src="plugins/ckfinder/ckfinder.js"></script>

<script src="plugins/angularjs/angular.min.js"></script>
<script src="plugins/angularjs/config-angular.js"></script>
@endsection
@section('include-footer')	
<script src="admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
<!-- FastClick -->
<script src="admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- Magnific popup JavaScript -->
<script src="admin/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="admin/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
<script src="plugins/slug/speakingurl.min.js"></script>
<script src="plugins/slug/slugify.js"></script>
<script>
  jQuery(function($) {
	$('#seo_slug').slugify('#name'); // Type as you slug
  });
</script>
@endsection
@section('script')	
<script type="text/javascript">
  	$(document).ready(function(){
		//Set finder
		$('.modal_custom').on('click','.btn_file_array',function(){        
			Set_Finder($(this));
		});
		
	});
</script>
@endsection