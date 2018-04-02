@extends('index') 
@section('footer-first')
	<script src="plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/jquery.appear.js"></script>
    <script src="plugins/afterresize.min.js"></script>
    <script src="plugins/jquery.easing.1.3.js"></script>
    <script src="plugins/jquery.easytabs.min.js"></script>
    <script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
    <!--<script src="plugins/twitter/jquery.tweet.min.js"></script>-->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/flickr.js"></script>
    <script src="plugins/colorpicker/colorpicker.js"></script>
    <script src="js/styleswitcher.js"></script>
    <!--Theme Initializer-->
    <script src="js/theme.plugins.js"></script>
    <script src="js/theme.js"></script>
@endsection

@section('content')
	<!--revolution slider-->
	<section class="relative w_full m_bottom_15">
		<div class="r_slider">
			<ul>
				<li data-transition="fade" data-slotamount="10">
				   <img src="images/slide_01.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
				   <div class="caption sfl str" data-x="left" data-y="108" data-speed="700"><h1 class="color_dark fw_light">The New Direction<br> for Your Success</h1></div>
				   <div class="caption sfl str" data-x="left" data-y="243" data-speed="700" data-start="1200">Ut pharetra augue nec augue. Nam elit agna,endrerit<br>sit amet, tincidunt ac, viverra sed, nulla. Donec porta<br>diam eu massa. Quisque diam lorem, interdum. </div>
				   <div class="caption sfl str" data-x="left" data-y="339" data-speed="700" data-start="1400">
				   		<a href="#" role="button" class="tt_uppercase button_type_3 transparent color_purple r_corners fs_medium d_block tr_all">Learn More</a>
				   </div>
				</li>
				<li data-transition="fade" data-slotamount="10">
				   <img src="images/slide_02.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
				   <div class="caption lfb ltb" data-x="left" data-y="bottom" data-hoffset="-118" data-speed="600"><img src="images/slide_caption_01.png" alt=""></div>
				   <div class="caption sfl str" data-x="755" data-y="109" data-speed="700" data-start="1500"><h1 class="color_light fw_light">The best<br>priced product!</h1></div>
				   <div class="caption sfl str color_light" data-x="755" data-y="244" data-speed="700" data-start="1700">Vestibulum ante ipsum primis in faucibus orci luctus<br>et ultrices posuere cubilia Curae; Suspendisse<br>sollicitudin velit sed leo. Ut pharetra augue nec.</div>
				   <div class="caption sfl str" data-x="755" data-y="339" data-speed="700" data-start="1900">
				   		<a href="#" role="button" class="tt_uppercase button_type_3 color_purple r_corners fs_medium d_block tr_all">Buy Now!</a>
				   </div>
				</li>
				<li data-transition="fade" data-slotamount="10">
				   <img src="images/slide_03.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
				   <div class="caption lft ltt" data-autoplay="false" data-autoplayonlyfirsttime="false" data-nextslideatend="false" data-x="529" data-y="55" data-speed="1200" data-easing="easeOutBounce">
						<iframe src="https://www.youtube.com/embed/Du8ld5hrqN0?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0" width="640" height="390"></iframe>
					</div>
				   <div class="caption sfl str" data-x="left" data-y="108" data-speed="700" data-start="1650"><h1 class="color_light fw_light">Think outside<br>the box!</h1></div>
				   <div class="caption sfl str color_grey_light_3" data-x="left" data-y="243" data-speed="700" data-start="1850">Vestibulum libero nisl, porta vel, scelerisque eget,<br>malesuada at, neque. Etiam cursus leo vel metus.<br>Nulla facilisi. Aenean nec eros. </div>
				   <div class="caption sfl str clearfix" data-x="left" data-y="339" data-speed="700" data-start="2050">
				   		<a href="#" role="button" class="tt_uppercase button_type_3 color_purple r_corners fs_medium d_block f_left m_right_10 tr_all">Get Started</a>
				   		<a href="#" role="button" class="tt_uppercase button_type_3 transparent color_purple r_corners fs_medium d_block f_left m_right_10 tr_all d_mxs_none">Take A Tour</a>
				   </div>
				</li>
			</ul>
		</div>
	</section>
	<!--content-->
	<!--who we are-->
	<section class="section_offset">
		<div class="container t_align_c">
			<h3 class="color_dark fw_light m_bottom_15 heading_1" data-appear-animation="bounceInLeft">Who We Are</h3>
			<p class="m_bottom_35 heading_2" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Donec eget tellus non erat lacinia fermentum. </p>
			<div class="tabs">
				<!--tabs nav-->
				<ul class="tabs_nav hr_list d_inline_b d_xs_block m_bottom_30 m_xs_bottom_20" data-appear-animation="bounceInLeft" data-appear-animation-delay="800">
					<li class="f_xs_none"><a href="#tab-1" class="color_dark d_block n_sc_hover">The Company</a></li>
					<li class="f_xs_none"><a href="#tab-2" class="color_dark d_block n_sc_hover">Our Philosophy</a></li>
					<li class="f_xs_none"><a href="#tab-3" class="color_dark d_block n_sc_hover">Our Mission</a></li>
					<li class="f_xs_none"><a href="#tab-4" class="color_dark d_block n_sc_hover">Why Choose Us</a></li>
				</ul>
				<!--tabs content-->
				<article id="tab-1" data-appear-animation="fadeInUp" data-appear-animation-delay="450">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_20">
							<img src="images/home_img_1.jpg" class="r_corners" alt="">
						</div>
						<div class="col-lg-6 col-md-6 t_align_l fw_light">
							<p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
							<p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
							<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
						</div>
					</div>
				</article>
				<article id="tab-2">
					<div class="row">
						<div class="col-lg-6 col-md-6 m_sm_bottom_20 t_align_l fw_light">
							<p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
							<p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
							<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
						</div>
						<div class="col-lg-6 col-md-6">
							<img src="images/home_img_1.jpg" class="r_corners" alt="">
						</div>
					</div>
				</article>
				<article id="tab-3">
					<div class="row">
						<div class="col-lg-6 col-md-6 m_sm_bottom_20">
							<div class="iframe_video_wrap">
								<iframe src="https://www.youtube.com/embed/Du8ld5hrqN0?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0"></iframe>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 t_align_l fw_light">
							<p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
							<p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
							<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
						</div>
					</div>
				</article>
				<article id="tab-4" class="t_align_l fw_light">
					<p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
					<p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<p class="m_bottom_15">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
					<p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
					<p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
				</article>
			</div>
		</div>
	</section>
	<!--what we do-->
	<section class="section_offset image_bg_1">
		<div class="container">
			<h3 class="color_dark fw_light m_bottom_15 t_align_c heading_3" data-appear-animation="bounceInLeft">What We Do</h3>
			<p class="m_bottom_40 t_align_c heading_4" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. </p>
			<div data-appear-animation="fadeInUp" data-appear-animation-delay="800">
				<!--first four services-->
				<div class="row m_bottom_30" >
					<!--service-->
					<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
						<figure class="item_services">
							<h6 class="m_bottom_5 relative">
								<a href="#" class="color_dark d_block n_sc_hover">Web Design</a>
								<span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
									<i class="icon-feather tr_all"></i>
								</span>
							</h6>
							<p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
							<a href="#" class="color_dark fs_medium color_pink_hover">Read More
							 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
							 	<i class="icon-angle-right"></i>
							 </span>
							</a>
						</figure>
					</div>
					<!--service-->
					<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
						<figure class="item_services">
							<h6 class="m_bottom_5 relative">
								<a href="#" class="color_dark d_block n_sc_hover">Branding</a>
								<span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
									<i class="icon-tag tr_all"></i>
								</span>
							</h6>
							<p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
							<a href="#" class="color_dark fs_medium color_pink_hover">Read More
							 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
							 	<i class="icon-angle-right"></i>
							 </span>
							</a>
						</figure>
					</div>
					<!--service-->
					<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
						<figure class="item_services">
							<h6 class="m_bottom_5 relative">
								<a href="#" class="color_dark d_block n_sc_hover">Animation &amp; Motion</a>
								<span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
									<i class="icon-video tr_all"></i>
								</span>
							</h6>
							<p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
							<a href="#" class="color_dark fs_medium color_pink_hover">Read More
							 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
							 	<i class="icon-angle-right"></i>
							 </span>
							</a>
						</figure>
					</div>
					<!--service-->
					<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
						<figure class="item_services">
							<h6 class="m_bottom_5 relative">
								<a href="#" class="color_dark d_block n_sc_hover">Web Development</a>
								<span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
									<i class="icon-tools tr_all"></i>
								</span>
							</h6>
							<p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
							<a href="#" class="color_dark fs_medium color_pink_hover">Read More
							 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
							 	<i class="icon-angle-right"></i>
							 </span>
							</a>
						</figure>
					</div>
				</div>
				<!--second four services-->
				<div class="row services_animate">
					<!--service-->
					<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
						<figure class="item_services">
							<h6 class="m_bottom_5 relative">
								<a href="#" class="color_dark d_block n_sc_hover">E-commerce</a>
								<span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
									<i class="icon-basket tr_all"></i>
								</span>
							</h6>
							<p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
							<a href="#" class="color_dark fs_medium color_pink_hover">Read More
							 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
							 	<i class="icon-angle-right"></i>
							 </span>
							</a>
						</figure>
					</div>
					<!--service-->
					<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
						<figure class="item_services">
							<h6 class="m_bottom_5 relative">
								<a href="#" class="color_dark d_block n_sc_hover">Mobile</a>
								<span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
									<i class="icon-mobile tr_all"></i>
								</span>
							</h6>
							<p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
							<a href="#" class="color_dark fs_medium color_pink_hover">Read More
							 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
							 	<i class="icon-angle-right"></i>
							 </span>
							</a>
						</figure>
					</div>
					<!--service-->
					<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
						<figure class="item_services">
							<h6 class="m_bottom_5 relative">
								<a href="#" class="color_dark d_block n_sc_hover">SEO</a>
								<span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
									<i class="icon-search tr_all"></i>
								</span>
							</h6>
							<p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
							<a href="#" class="color_dark fs_medium color_pink_hover">Read More
							 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
							 	<i class="icon-angle-right"></i>
							 </span>
							</a>
						</figure>
					</div>
					<!--service-->
					<div class="col-lg-3 col-md-3 col-sm-3">
						<figure class="item_services">
							<h6 class="m_bottom_5 relative">
								<a href="#" class="color_dark d_block n_sc_hover">Analytics</a>
								<span class="d_block icon_wrap_size_3 circle color_pink wrapper animation_fill">
									<i class="icon-chart-line tr_all"></i>
								</span>
							</h6>
							<p class="fs_medium m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et.</p>
							<a href="#" class="color_dark fs_medium color_pink_hover">Read More
							 <span class="d_inline_m m_left_5 icon_wrap_size_0 circle color_grey_light tr_all">
							 	<i class="icon-angle-right"></i>
							 </span>
							</a>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--our featured projects-->
	<section class="section_offset relative">
		<div class="container">
			<h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft">Our Featured Projects</h3>
			<p class="m_bottom_35 t_align_c" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla.</p>
			<div class="row" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
				<!--projects carousel-->
				<div class="owl-carousel" data-nav="fp_nav_" data-plugin-options='{"itemsCustom" : [[992,3],[768,2],[100,1]], "singleItem" : false}'>
					<!--project-->
					<figure class="t_xs_align_c col-lg-12">
						<!--image container-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
							<img src="images/home_img_2.jpg" alt="">
							<div class="popup_buttons tr_all_long">
								<a href="images/home_img_5.jpg" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<figcaption class="t_xs_align_l">
							<!--project's title-->
							<h4 class="fw_light fs_middle"><a href="#" class="color_dark">Nam elit agna, endrerit sit amet, tincidunt ac</a></h4>
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
									<a href="#" class="fs_medium color_grey">
										<i>Technology</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
							<p class="m_bottom_10 fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
							<div class="clearfix">
								<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-angle-right"></i>
									</span>
									Read More
								</a>
								<a href="#" class="color_purple color_pink_hover f_left d_block">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-link"></i>
									</span>
									View Project
								</a>
							</div>
						</figcaption>
					</figure>
					<!--project-->
					<figure class="t_xs_align_c col-lg-12">
						<!--image container-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
							<img src="images/home_img_3.jpg" alt="">
							<div class="popup_buttons tr_all_long">
								<a href="http://www.youtube.com/watch?v=SZEflIVnhH8" data-group="featured_projects" data-title="Vivamus eget nibh" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
									<i class="icon-play"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<figcaption class="t_xs_align_l">
							<!--project's title-->
							<h4 class="fw_light fs_middle"><a href="#" class="color_dark">Vivamus eget nibh</a></h4>
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
									<a href="#" class="fs_medium color_grey">
										<i>Technology</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">176</i>
									</a>
								</li>
							</ul>
							<p class="m_bottom_10 fw_light">Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. Mauris accumsan nulla vel diam.</p>
							<div class="clearfix">
								<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-angle-right"></i>
									</span>
									Read More
								</a>
							</div>
						</figcaption>
					</figure>
					<!--project-->
					<figure class="t_xs_align_c col-lg-12">
						<!--image container-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
							<img src="images/home_img_4.jpg" alt="">
							<div class="popup_buttons tr_all_long">
								<a href="images/home_img_7.jpg" data-group="featured_projects" data-title="Praesent justo dolor, loborti quis" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<figcaption class="t_xs_align_l">
							<!--project's title-->
							<h4 class="fw_light fs_middle"><a href="#" class="color_dark">Praesent justo dolor, loborti quis, lobortis dignissim</a></h4>
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
									<a href="#" class="fs_medium color_grey">
										<i>Technology</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">14</i>
									</a>
								</li>
							</ul>
							<p class="m_bottom_10 fw_light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</p>
							<div class="clearfix">
								<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-angle-right"></i>
									</span>
									Read More
								</a>
								<a href="#" class="color_purple color_pink_hover f_left d_block">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-link"></i>
									</span>
									View Project
								</a>
							</div>
						</figcaption>
					</figure>
					<!--project-->
					<figure class="t_xs_align_c col-lg-12">
						<!--image container-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
							<img src="images/home_img_10.jpg" alt="">
							<div class="popup_buttons tr_all_long">
								<a href="images/home_img_8.jpg" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<figcaption class="t_xs_align_l">
							<!--project's title-->
							<h4 class="fw_light fs_middle"><a href="#" class="color_dark">Suspendisse sollicitudin velit sed leo. Ut pharetra</a></h4>
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
									<a href="#" class="fs_medium color_grey">
										<i>Technology</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
							<p class="m_bottom_10 fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede.</p>
							<div class="clearfix">
								<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-angle-right"></i>
									</span>
									Read More
								</a>
								<a href="#" class="color_purple color_pink_hover f_left d_block">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-link"></i>
									</span>
									View Project
								</a>
							</div>
						</figcaption>
					</figure>
					<!--project-->
					<figure class="t_xs_align_c col-lg-12">
						<!--image container-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
							<img src="images/home_img_11.jpg" alt="">
							<div class="popup_buttons tr_all_long">
								<a href="images/home_img_9.jpg" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
									<i class="icon-link-1"></i>
								</a>
							</div>
						</div>
						<figcaption class="t_xs_align_l">
							<!--project's title-->
							<h4 class="fw_light fs_middle"><a href="#" class="color_dark">Endrerit sit amet, tincidu</a></h4>
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
									<a href="#" class="fs_medium color_grey">
										<i>Technology</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
							<p class="m_bottom_10 fw_light">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum.</p>
							<div class="clearfix">
								<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-angle-right"></i>
									</span>
									Read More
								</a>
								<a href="#" class="color_purple color_pink_hover f_left d_block">
									<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
										<i class="icon-link"></i>
									</span>
									View Project
								</a>
							</div>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
		<!--carousel nav-->
		<button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_prev d_md_none">
			<i class="icon-left-open-big"></i>
		</button>
		<button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_next d_md_none">
			<i class="icon-right-open-big"></i>
		</button>
	</section>
	<section class="section_offset image_bg_2">
		<div class="container">
			<div class="row">
				<!--testimonials-->
				<section class="col-lg-6 col-md-6 m_bottom_20" data-appear-animation="fadeInUp">
					<h3 class="color_light t_align_c m_bottom_15 fw_light">Testimonials</h3>
					<p class="m_bottom_35 t_align_c color_grey_light_2">Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae. </p>
					<div class="owl-carousel" data-nav="t_nav_" data-plugin-options='{"autoPlay":false,"autoHeight":true,"transitionStyle": "backSlide"}'>
						<!--item-->
						<div>
							<!--quote-->
							<blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
								<p class="m_bottom_15"><i>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
								<p><i>Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.</i></p>
							</blockquote>
							<div class="d_table w_full">
								<div class="d_table_cell">
									<!--author photo-->
									<div class="d_inline_m circle wrapper m_right_10">
										<img src="images/testimonial_img_1.jpg" alt="">
									</div>
									<!--author name-->
									<div class="d_inline_m">
										<b class="fs_large d_block color_light">John Doe</b>
										<p class="fs_medium color_grey_light_2">Co-founder, Company Name</p>
									</div>
								</div>
								<div class="d_table_cell t_align_r v_align_m d_mxs_none">
									<button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
										<i class="icon-left-open-big"></i>
									</button>
									<button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
										<i class="icon-right-open-big"></i>
									</button>
								</div>
							</div>
						</div>
						<!--item-->
						<div>
							<!--quote-->
							<blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
								<p><i>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.Consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
							</blockquote>
							<div class="d_table w_full">
								<div class="d_table_cell">
									<!--author photo-->
									<div class="d_inline_m circle wrapper m_right_10">
										<img src="images/testimonial_img_2.jpg" alt="">
									</div>
									<!--author name-->
									<div class="d_inline_m">
										<b class="fs_large d_block color_light">Marta Healy</b>
										<p class="fs_medium color_grey_light_2">CEO, Company Name</p>
									</div>
								</div>
								<div class="d_table_cell t_align_r v_align_m d_mxs_none">
									<button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
										<i class="icon-left-open-big"></i>
									</button>
									<button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
										<i class="icon-right-open-big"></i>
									</button>
								</div>
							</div>
						</div>
						<!--item-->
						<div>
							<!--quote-->
							<blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
								<p class="m_bottom_15"><i>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
								<p><i>Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</i></p>
							</blockquote>
							<div class="d_table w_full">
								<div class="d_table_cell">
									<!--author photo-->
									<div class="d_inline_m circle wrapper m_right_10">
										<img src="images/testimonial_img_3.jpg" alt="">
									</div>
									<!--author name-->
									<div class="d_inline_m">
										<b class="fs_large d_block color_light">Alice Smith</b>
										<p class="fs_medium color_grey_light_2">Designer, Company Name</p>
									</div>
								</div>
								<div class="d_table_cell t_align_r v_align_m d_mxs_none">
									<button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
										<i class="icon-left-open-big"></i>
									</button>
									<button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
										<i class="icon-right-open-big"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--our clients-->
				<section class="col-lg-6 col-md-6 t_sm_align_c" data-appear-animation="fadeInUp" data-appear-animation-delay="150">
					<h3 class="color_light t_align_c m_bottom_15 fw_light">Our Clients</h3>
					<p class="m_bottom_35 t_align_c color_grey_light_2">Donec eget tellus non erat lacinia fermentum.</p>
					<!--carousel-->
					<div class="owl-carousel m_bottom_15" data-plugin-options='{"pagination":true,"transitionStyle" : "backSlide"}' data-nav="c_nav_">
						<!--item-->
						<div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_1.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_2.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_3.jpg" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_4.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_5.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_6.jpg" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						<div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_7.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_8.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30 m_mxs_bottom_10">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_9.jpg" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_mxs_bottom_10">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_10.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_11.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_12.jpg" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						<div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_1.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_2.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m_bottom_30">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_3.jpg" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_4.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_5.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="clients_item db_xs_centered relative wrapper r_corners d_sm_inline_b d_xs_block">
										<a href="#" class="d_block translucent tr_all wrapper r_corners">
											<img src="images/client_logo_6.jpg" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--clients carousel nav-->
					<div class="d_table w_full clients_nav">
						<!--paginations container-->
						<div class="d_table_cell half_column clients_pags_container v_align_m"></div>
						<!--navigations-->
						<div class="d_table_cell half_column t_align_r v_align_m">
							<button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all c_nav_prev">
								<i class="icon-left-open-big"></i>
							</button>
							<button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all c_nav_next">
								<i class="icon-right-open-big"></i>
							</button>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
	<!--banner-->
	<section class="section_offset bg_light_2">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-9 col-sm-8 col-lg-offset-1" data-appear-animation="fadeInUp">
					<h3 class="color_dark fw_light m_bottom_15">Try The <span class="color_green">30 Day Free Trial</span> With All Features</h3>
					<p class="heading_4">Your 30-day money back guarantee starts after your 30-day free trial.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4" data-appear-animation="fadeInUp" data-appear-animation-delay="150">
					<a href="#" id="get_started" class="button_type_4 r_corners d_inline_b color_green tt_uppercase fs_large m_top_5 m_sm_top_25 tr_all">Get Started</a>
				</div>
			</div>
		</div>
	</section>

@endsection