
@extends('index') 
@section('footer-first')
	<script src="plugins/jquery.appear.js"></script>
	<script src="plugins/afterresize.min.js"></script>
	<script src="plugins/jquery.easytabs.min.js"></script>
	<script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
	<script src="plugins/twitter/jquery.tweet.min.js"></script>
	<script src="plugins/flickr.js"></script>
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="plugins/jquery.easing.1.3.js"></script>
	<script src="plugins/colorpicker/colorpicker.js"></script>
	<script src="js/styleswitcher.js"></script>
	
	<!--Theme Initializer-->
	<script src="js/theme.plugins.js"></script>
	<script src="js/theme.js"></script>
@endsection

@section('content')
<div class="section_offset">
	<div class="container">
		<div class="row">
			<section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
				<div class="row">
					<!--item portfolio-->
					<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 m_bottom_50">
						<figure>
							<!--image-->
							<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
								<img src="images/home_img_5.jpg" alt="">
								<div class="popup_buttons tr_all_long">
									<a href="images/home_img_5.jpg" data-group="portfolio" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
										<i class="icon-plus"></i>
									</a>
									<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>
							<!--description-->
							<figcaption>
								<h4 class="fw_light fs_middle"><a href="#" class="color_dark tr_all">Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed</a></h4>
								<!--project's info-->
								<ul class="dotted_list m_bottom_5 color_grey_light_2">
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="color_grey_light_2 fs_small">
											<i class="icon-picture"></i>
										</a>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="fs_medium color_grey">
											<i>Mobile</i></a>, 
										<a href="#" class="fs_medium color_grey"><i>Technology</i>
										</a>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="color_red_hover">
											<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
										</a>
									</li>
								</ul>
								<p class="m_bottom_12 fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. </p>
								<div class="clearfix">
									<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
									<a href="#" class="color_purple color_pink_hover f_left d_block fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-link"></i>
										</span>
										View Project
									</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 m_bottom_50">
						<figure>
							<!--image-->
							<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
								<img src="images/home_img_6.jpg" alt="">
								<div class="popup_buttons tr_all_long">
									<a href="http://www.youtube.com/watch?v=SZEflIVnhH8" data-group="portfolio" data-title="Title 2" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
										<i class="icon-play"></i>
									</a>
								</div>
							</div>
							<!--description-->
							<figcaption>
								<h4 class="fw_light fs_middle"><a href="#" class="color_dark tr_all">Vivamus eget nibh</a></h4>
								<!--project's info-->
								<ul class="dotted_list m_bottom_5 color_grey_light_2">
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="color_grey_light_2 fs_small">
											<i class="icon-video"></i>
										</a>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="fs_medium color_grey">
											<i>Mobile</i></a>, 
										<a href="#" class="fs_medium color_grey"><i>Technology</i>
										</a>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="color_red_hover">
											<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">176</i>
										</a>
									</li>
								</ul>
								<p class="m_bottom_12 fw_light">Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing.</p>
								<div class="clearfix">
									<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="row">
					<!--item portfolio-->
					<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 m_bottom_50">
						<figure>
							<!--image-->
							<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
								<img src="images/home_img_7.jpg" alt="">
								<div class="popup_buttons tr_all_long">
									<a href="images/home_img_7.jpg" data-group="portfolio" data-title="Title 3" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
										<i class="icon-plus"></i>
									</a>
									<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>
							<!--description-->
							<figcaption>
								<h4 class="fw_light fs_middle"><a href="#" class="color_dark tr_all">Praesent justo dolor, lobortis quis, lobortis dignissim</a></h4>
								<!--project's info-->
								<ul class="dotted_list m_bottom_5 color_grey_light_2">
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="color_grey_light_2 fs_small">
											<i class="icon-music-1"></i>
										</a>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="fs_medium color_grey">
											<i>Mobile</i></a>, 
										<a href="#" class="fs_medium color_grey"><i>Technology</i>
										</a>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="color_red_hover">
											<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">14</i>
										</a>
									</li>
								</ul>
								<p class="m_bottom_12 fw_light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. </p>
								<div class="clearfix">
									<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
									<a href="#" class="color_purple color_pink_hover f_left d_block fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-link"></i>
										</span>
										View Project
									</a>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 m_bottom_50">
						<figure>
							<!--image-->
							<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
								<img src="images/home_img_8.jpg" alt="">
								<div class="popup_buttons tr_all_long">
									<a href="http://vimeo.com/61099540" data-group="portfolio" data-title="Title 4" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
										<i class="icon-play"></i>
									</a>
								</div>
							</div>
							<!--description-->
							<figcaption>
								<h4 class="fw_light fs_middle"><a href="#" class="color_dark tr_all">Ut tellus dolor, dapibus eget</a></h4>
								<!--project's info-->
								<ul class="dotted_list m_bottom_5 color_grey_light_2">
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="color_grey_light_2 fs_small">
											<i class="icon-video"></i>
										</a>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="fs_medium color_grey">
											<i>Mobile</i></a>, 
										<a href="#" class="fs_medium color_grey"><i>Technology</i>
										</a>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<a href="#" class="color_red_hover">
											<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">56</i>
										</a>
									</li>
								</ul>
								<p class="m_bottom_12 fw_light">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
								<div class="clearfix">
									<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
				<!--paginations-->
				<div class="clearfix">
					<ul class="hr_list fs_medium paginations t_align_c m_right_20 f_left m_xs_bottom_10 f_xs_none">
						<li>
							<a href="#" class="rc_first_hr color_dark">1</a>
						</li>
						<li class="active">
							<a href="#" class=" color_dark">2</a>
						</li>
						<li>
							<a href="#" class="rc_last_hr color_dark">3</a>
						</li>
					</ul>
					<div class="f_right f_xs_none">
						<a href="#" class="button_type_2 color_dark r_corners transparent fs_medium prev_page_button f_left m_right_5 bg_color_purple_hover">Prev Page</a>
						<a href="#" class="button_type_2 color_dark r_corners transparent fs_medium next_page_button f_left m_right_5 bg_color_purple_hover">Next Page</a>
					</div>
				</div>
			</section>
			<aside class="col-lg-3 col-md-3 col-sm-3">
				<div class="m_bottom_40 m_xs_bottom_30">
					<h5 class="fw_light color_dark m_bottom_20">Text Widget</h5>
					<p class="fw_light">Nulla venenatis. In pede mi, aliquet sit amet, euismod in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis.</p>
				</div>
				<div class="m_bottom_50 m_xs_bottom_30">
					<h5 class="fw_light color_dark m_bottom_20">Categories</h5>
					<ul class="vr_list_type_4 color_dark fw_light">
						<li class="m_bottom_12">
							<a href="#" class="color_dark d_inline_b">
								<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
									<i class="icon-angle-right"></i>
								</span>
								Web design
							</a>
						</li>
						<li class="m_bottom_12">
							<a href="#" class="color_dark d_inline_b">
								<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
									<i class="icon-angle-right"></i>
								</span>
								Web development
							</a>
						</li>
						<li class="m_bottom_12">
							<a href="#" class="color_dark d_inline_b">
								<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
									<i class="icon-angle-right"></i>
								</span>
								Marketing
							</a>
						</li>
						<li class="m_bottom_12">
							<a href="#" class="color_dark d_inline_b">
								<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
									<i class="icon-angle-right"></i>
								</span>
								Tips
							</a>
						</li>
						<li class="m_bottom_12">
							<a href="#" class="color_dark d_inline_b">
								<span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
									<i class="icon-angle-right"></i>
								</span>
								Resources
							</a>
						</li>
					</ul>
				</div>
				<div class="tabs m_bottom_45 m_xs_bottom_30">
					<!--tabs nav-->
					<ul class="tabs_nav type_3 hr_list d_inline_b d_md_block m_bottom_30 m_xs_bottom_20">
						<li class="f_md_none"><a href="#popular" class="color_dark d_block n_sc_hover tr_all_medium">Popular</a></li>
						<li class="f_md_none"><a href="#recent" class="color_dark d_block n_sc_hover tr_all_medium">Recent</a></li>
						<li class="f_md_none"><a href="#comments" class="color_dark d_block n_sc_hover tr_all_medium">Comments</a></li>
					</ul>
					<!--tabs content-->
					<div id="popular">
						<!--popular-->
						<article class="clearfix m_bottom_35 m_xs_bottom_20">
							<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
								<img src="images/popular_img_1.jpg" alt="">
							</a>
							<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Proin dictum</b></a>
							<ul class="dotted_list color_grey_light_2 article_stats">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-picture"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>June 26, 2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>3D</i>
									</a>,
									<a href="#" class="fs_small color_grey">
										<i>Graphic Design</i>
									</a>
								</li>
							</ul>
						</article>
						<article class="clearfix m_bottom_35 m_xs_bottom_20">
							<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
								<img src="images/popular_img_2.jpg" alt="">
							</a>
							<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Aliquam dapibus tincidunt metus</b></a>
							<ul class="dotted_list color_grey_light_2 article_stats">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-doc-text-inv"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>June 29, 2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>Mobile</i>
									</a>,
									<a href="#" class="fs_small color_grey">
										<i>Technology</i>
									</a>
								</li>
							</ul>
						</article>
						<article class="clearfix">
							<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
								<img src="images/popular_img_3.jpg" alt="">
							</a>
							<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Donec sagittis euismod purus</b></a>
							<ul class="dotted_list color_grey_light_2 article_stats">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-video"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>June 25, 2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>Video</i>
									</a>,
									<a href="#" class="fs_small color_grey">
										<i>Music</i>
									</a>
								</li>
							</ul>
						</article>
					</div>
					<div id="recent">
						<!--recent-->
						<article class="clearfix m_bottom_35 m_xs_bottom_20">
							<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
								<img src="images/popular_img_3.jpg" alt="">
							</a>
							<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Donec sagittis euismod purus</b></a>
							<ul class="dotted_list color_grey_light_2 article_stats">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-video"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>June 25, 2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>Video</i>
									</a>,
									<a href="#" class="fs_small color_grey">
										<i>Music</i>
									</a>
								</li>
							</ul>
						</article>
						<article class="clearfix m_bottom_35 m_xs_bottom_20">
							<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
								<img src="images/popular_img_2.jpg" alt="">
							</a>
							<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Aliquam dapibus tincidunt metus</b></a>
							<ul class="dotted_list color_grey_light_2 article_stats">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-doc-text-inv"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>June 29, 2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>Mobile</i>
									</a>,
									<a href="#" class="fs_small color_grey">
										<i>Technology</i>
									</a>
								</li>
							</ul>
						</article>
						<article class="clearfix">
							<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
								<img src="images/popular_img_1.jpg" alt="">
							</a>
							<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Proin dictum</b></a>
							<ul class="dotted_list color_grey_light_2 article_stats">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-picture"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>June 26, 2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_small color_grey">
										<i>3D</i>
									</a>,
									<a href="#" class="fs_small color_grey">
										<i>Graphic Design</i>
									</a>
								</li>
							</ul>
						</article>
					</div>
					<div id="comments">
						<!--comments-->
						<ul class="hr_list vr_list_type_2 fw_light color_grey lh_medium">
							<li class="m_bottom_15">
								<i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
								<a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Proin dictum</b></a>
							</li>
							<li class="m_bottom_15">
								<i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
								<a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Aliquam dapibus tincidunt metus</b></a>
							</li>
							<li class="m_bottom_15">
								<i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
								<a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Donec sagittis euismod purus</b></a>
							</li>
							<li class="m_bottom_15">
								<i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
								<a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Lorem ipsum dolor sit</b></a>
							</li>
							<li>
								<i class="icon-comment-empty m_right_8 fs_large color_grey_light_2 d_block f_left"></i>
								<a href="#" class="color_grey">admin</a> on <a href="#" class="color_dark"><b>Nam elit agna,endrerit sit amet tincidunt ac</b></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="m_xs_bottom_0">
					<h5 class="fw_light color_dark m_bottom_20">Tags</h5>
					<!--tags list-->
					<ul class="hr_list tags_list">
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">interviews</a></li>
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">design</a></li>
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">development</a></li>
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">marketing</a></li>
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">press</a></li>
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">projects</a></li>
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">resources</a></li>
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">tips</a></li>
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">tricks</a></li>
						<li class="m_right_5 m_bottom_5"><a href="#" class="r_corners button_type_2 d_block color_dark color_pink_hover fs_medium">web</a></li>
					</ul>
				</div>
			</aside>
		</div>
	</div>
</div>
@endsection