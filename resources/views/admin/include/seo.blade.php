{{--  SEO  --}}
<?php
	$seo_title = "";	
	$seo_slug = "";	
	$meta_description = "";	
	$focus_keyword = "";	
	$meta_keyword = "";	
	$meta_title = "";	
?>
@if(!empty(old('seo_title'))) <?php $seo_title = old('seo_title'); ?>
@elseif(!empty($item)) <?php $seo_title = $item->seo_title ?> @endif

@if(!empty(old('seo_slug'))) <?php $seo_slug=old('seo_slug'); ?>
@elseif(!empty($item)) <?php $seo_slug = $item->slug ?> @endif	

@if(!empty(old('meta_description'))) <?php $meta_description=old('meta_description'); ?>
@elseif(!empty($item))<?php $meta_description = $item->meta_description ?> @endif

@if(!empty(old('meta_keyword'))) <?php $meta_keyword=old('meta_keyword'); ?>
@elseif(!empty($item)) <?php $meta_keyword=$item->meta_keyword ?> @endif	

@if(!empty(old('focus_keyword'))) <?php $focus_keyword=old('focus_keyword'); ?>
@elseif(!empty($item)) <?php $focus_keyword=$item->focus_keyword ?> @endif	

@if(!empty(old('meta_title'))) <?php $meta_title=old('meta_title');  ?>
@elseif(!empty($item)) <?php $meta_title=$item->meta_title ?> @endif

<div class="box-header ">
	<h3 class="box-title">SEO</h3>
	<hr/>
	<div class="form-group row">
		<label for="seo_title" class="col-sm-2 col-form-label">SEO Title:</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" id="seo_title" placeholder="SEO title" value="{{$seo_title}}" name="seo_title">
		</div>
	</div>
	<div class="form-group row">
		<label for="seo_slug" class="col-sm-2 col-form-label">Slug:</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" id="seo_slug" placeholder="Slug" value="{{$seo_slug}}" name="seo_slug">
		</div>
	</div>
	<div class="form-group row">
		<label for="meta_description" class="col-sm-2 col-form-label">Meta Description:</label>
		<div class="col-sm-10">
			<textarea name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description" >{{$meta_description}}</textarea>   
		</div>
	</div>
	<div class="form-group row">
		<label for="focus_keyword" class="col-sm-2 col-form-label">Focus Keyword:</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" id="focus_keyword" placeholder="Focus Keyword" value="{{$focus_keyword}}" name="focus_keyword">
		</div>
	</div>
	<div class="form-group row">
		<label for="meta_keyword" class="col-sm-2 col-form-label">Meta Keyword:</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" id="meta_keyword" placeholder="Meta Keyword" value="{{$meta_keyword}}" name="meta_keyword">
		</div>
	</div>
	<div class="form-group row">
		<label for="meta_title" class="col-sm-2 col-form-label">Meta Title:</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" id="meta_title" placeholder="Meta Title" value="{{$meta_title}}" name="meta_title">
		</div>
	</div>                    
</div>
<script src="plugins/admin/slug/speakingurl.min.js"></script>
<script src="plugins/admin/slug/slugify.js"></script>
<script>
	$(document).ready(function(){
		jQuery(function($) {
	    $('#seo_slug').slugify('#name'); // Type as you slug
	});
	});
</script>