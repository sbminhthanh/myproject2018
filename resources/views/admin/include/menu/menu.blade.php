<div class="box-header">
	<hr/>
	<h3 class="box-title">Cấu hình Menu</h3>
	<hr/>

	<div class="form-group row">
		<label for="type_link" class="col-sm-2 col-form-label">Kiểu Menu</label>
		<div class="col-sm-10">
			<!-- Sản phẩm -->
			<div class="row">
				<!-- Loại sản phẩm -->
				<div class="col-4">
					<input type="radio" id="type_link[pro_cat]" name="type_link" value="product-category" class="with-gap radio-col-navy">
					<label for="type_link[pro_cat]">[Sản phẩm] <b>Loại sản phẩm</b></label>
				</div>

				<!-- Sản phẩm -->
				<div class="col-4">
					<input type="radio" id="type_link[pro]" name="type_link" value="product-detail" class="with-gap radio-col-navy">
					<label for="type_link[pro]">[Sản phẩm] <b>Chi tiết sản phẩm</b></label>
				</div>
			</div>

			<!-- News -->
			<div class="row">
				<!-- Thể loại -->
				<div class="col-4">
					<input type="radio" id="type_link[news_cat]" name="type_link" value="news-category" class="with-gap radio-col-navy">
					<label for="type_link[news_cat]">[Tin tức] <b>Thể loại</b></label>
				</div>

				<!-- Bài viết -->
				<div class="col-4">
					<input type="radio" id="type_link[news]" name="type_link" value="news-detail" class="with-gap radio-col-navy">
					<label for="type_link[news]">[Tin tức] <b>Bài viết</b></label>
				</div>
			</div>
			
			<!-- Page -->
			<div class="row">
				<!-- Thể loại -->
				<div class="col-12">
					<input type="radio" id="type_link[page-list]" name="type_link" value="page-list" class="with-gap radio-col-navy">
					<label for="type_link[page-list]">[Trang thuộc Website] <b> Giới thiệu, Liên hệ, Giỏ hàng, Đăng nhập, Đăng ký ...</b></label>
				</div>
			</div>

			<!-- Khác -->
			<div class="row">
				<!-- Không liên kết -->
				<div class="col-4">
					<input type="radio" id="type_link[none]" name="type_link" value="page-none" class="with-gap radio-col-navy">
					<label for="type_link[none]">[Khác] <b>Không liên kết</b></label>
				</div>

				<!-- Liên kết khác -->
				<div class="col-4">
					<input type="radio" id="type_link[url]" value="page-url" name="type_link" class="with-gap radio-col-navy">
					<label for="type_link[url]">[Khác] <b>Liên kết ngoại</b></label>
				</div>
			</div>
		</div>
	</div>
	<div class="group-menu-option">
		<!-- Sản phẩm -->
			<!-- Thể loại tin-->
			<div class="form-group row data-menu" data-menu="product-category">
				<label for="news-category" class="col-sm-2 col-form-label">Danh mục:</label>
	              	<div class="col-sm-10">
		                <select class="form-control select2" name="sl_product_category" style="width: 100%;">
		                  <option value="">Chọn danh mục sản phẩm</option>
		                  @foreach($list['product_category'] as $keyList => $valList)
		                    <option value="{{$valList->id}}"
		                        @if(!empty(old('sl_product_category')))
		                          @if($valList->id == old('sl_product_category')){{"selected"}}@endif  
		                        @endif
		                      ><?= str_repeat('|__ ',$valList->depth) ?>{{$valList->category_name}}</option>
		                  @endforeach
		                </select>
	              	</div>
			</div>
			<!-- Bài viết -->

		<!-- Tin tức -->
			<!-- Thể loại -->
			<div class="form-group row data-menu" data-menu="news-category">
				<label for="news-category" class="col-sm-2 col-form-label">Thể loại:</label>
              	<div class="col-sm-10">
	                <select class="form-control select2" name="sl_news_category" style="width: 100%;">
	                  <option value="">Chọn thể loại tin</option>
	                  @foreach($list['news_category'] as $keyList => $valList)
	                    <option value="{{$valList->id}}"
	                        @if(!empty(old('sl_news_category')))
	                          @if($valList->id == old('sl_news_category')){{"selected"}}@endif  
	                        @endif
	                      ><?= str_repeat('|__',$valList->depth) ?>{{$valList->category_name}}</option>
	                  @endforeach
	                </select>
              	</div>
			</div>
			<!-- Bài viết -->
			<div class="form-group row data-menu" data-menu="news-detail">
				<label for="news-detail" class="col-sm-2 col-form-label">Bài viết:</label>
              	<div class="col-sm-10">
	               	<input class="form-control" disabled="disabled" type="text" id="news-detail-title" placeholder="Tên bài viết được chọn" value="" name="news-detail-title">
	               	<input class="form-control" type="hidden" id="news-detail-url" placeholder="" value="" name="news-detail-url">
	               	<button type="button" class="btn btn-lg btn-info btn_choose btn_mr_input" value="news-detail"  data-toggle="modal" data-target="#popNews">Chọn bài viết</button>
              	</div>
			</div>
		<!-- Liên kết ngoại-->
		<div class="form-group row data-menu" data-menu="page-url">
			<label for="Website" class="col-sm-2 col-form-label">Trang Web:</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" id="page-url" placeholder="http://google.com | https://www.youtube.com" value="" name="page-url">
			</div>
		</div>
		<!-- Danh sách Trang -->
		<div class="form-group row data-menu" data-menu="page-list">
			<label for="news-category" class="col-sm-2 col-form-label">Tên trang:</label>
              	<div class="col-sm-10">
	                <select class="form-control select2" name="sl_ws_menu" style="width: 100%;">
	                  <option value="">Chọn trang</option>
	                  @foreach($list['ws_menu'] as $keyList => $valList)
	                    <option value="{{$valList->id}}"
	                        @if(!empty(old('sl_ws_menu')))
	                          @if($valList->id == old('sl_ws_menu')){{"selected"}}@endif  
	                        @endif
	                      >{{$valList->title}}</option>
	                  @endforeach
	                </select>
              	</div>
		</div>
	</div>
</div>
<script>
	
		$(document).ready(function(){
			elm_menu = function (val){	
				let option = $('.group-menu-option');
				option.find('.data-menu').slideUp();
				option.find('.data-menu[data-menu="'+val+'"]').slideDown();
			}

			$('form').on('click', '.choose_menu', function(event) {
				event.preventDefault();
				if($(this).attr('data-opitem')==1)
				{
					$('#news-detail-title').val($(this).attr('data-optitle'));
					$('#news-detail-url').val($(this).attr('data-opalias'));
				}
			});


			// Ajax
			getListBV= function(){
				$.ajax({
					url: "{{URL_SERVER}}/api/tin-tuc/bai-viet/list",
					method: "GET",
					data: {
						"page" 	:0,
						"limit"	:5
					}
				}).done(function(result) {
					var content_html="";
					if(result)
					{
						$.each($.parseJSON(result), function(i, item) {
							content_html += '<tr>'							
							content_html += 	'<td>'+(i+1)+'</td>';
							content_html += 	'<td>'+item.title+'</td>';
							content_html += 	'<td> <button type="button" data-opitem="1" data-opalias="'+item.alias+'"  data-optitle="'+item.title+'" class="badge bg-red choose_menu">Chọn</button> </td>';
							content_html += '</tr>';
						});
					}
					$('#popNews .modal-body tbody').html(content_html);
				});
			};

			$('input[name="type_link"]').on('change', function() {
				elm_menu($(this).val());
			});			


			$('#popNews').on('show.bs.modal', function (e) {
			  	getListBV();
			})
			
			elm_menu();

		})
</script>


<!-- Modal Loadding -->
<div class="modal fade" id="popNews" tabindex="-1" role="dialog" aria-labelledby="popNews" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> <b>[Tin tức] Bài viết</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-responsive">
        	<thead>
	        	<tr>
		        	<th>STT</th>
		        	<th>Tiêu đề</th>
		        	<th></th>
	        	</tr>
        	</thead>
        	<tbody>
        		
        	</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>