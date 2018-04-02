@extends('index') 
@section('header-last')
	<link rel="stylesheet" type="text/css" media="all" href="css/theme-grand-news/style.css">
@endsection
@section('footer-first')
	<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
	<script src="plugins/jquery.appear.js"></script>
	<script src="plugins/afterresize.min.js"></script>
	<script src="plugins/jquery.easytabs.min.js"></script>
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
	<script src="plugins/twitter/jquery.tweet.min.js"></script>
	<script src="plugins/flickr.js"></script>
	<script src="plugins/jquery.easing.1.3.js"></script>
	<script src="plugins/colorpicker/colorpicker.js"></script>
	<script src="js/styleswitcher.js"></script>

	<!--Theme Initializer-->
	<script src="js/theme.plugins.js"></script>
	<script src="js/theme.js"></script>
@endsection

@section('content')
	<!-- Theme 1 - news -->
	<section class="news-theme-grand-news">
		<!-- Home -->
		<section class="news-home">
			<div class="news-banner">
				<div class="row">
					<div class="col-sm-6 col-xs-12 one_half div_wrapper" style="background:url(images/theme-grand-news/banner-1.jpg)">
						<div class="post_header">
				    		<div class="post_detail post_date">
				  				<span class="post_info_author">
				  					<span class="gravatar"><img alt="" src="http://1.gravatar.com/avatar/db6f032dce962144efc9b625779461a1?s=60&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/db6f032dce962144efc9b625779461a1?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60"></span>John Philippe
				  				</span>
					  			<span class="post_info_date">
						  			<a href="http://themes.themegoods.com/grandnews/demo1/3-delicious-post-holiday-detox-recipes-courtesy-of-marc-jacobs-personal-chef/">March 24, 2016</a>
						  		</span>
				  			</div>
							<h2><a href="http://themes.themegoods.com/grandnews/demo1/3-delicious-post-holiday-detox-recipes-courtesy-of-marc-jacobs-personal-chef/" title="3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef">3 Delicious Post-Holiday Detox Recipes, Courtesy of Personal Chef</a></h2>
						</div>
					</div>
				</div>
			</div>
		</section>		
	</section>
@endsection