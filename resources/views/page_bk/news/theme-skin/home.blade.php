@extends('index') 
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
@section('banner')
@endsection
@section('content')
	<section class="bg_light_2 breaking_news">
		<div class="container wrapper t_xs_align_c">
			<div class="bn_title fs_small color_light r_corners bg_color_red f_left m_right_20 t_sm_align_c f_xs_none d_inline_b">Breaking News</div>
			<!--carousel-->
			<div id="breaking_news" class="owl-carousel f_right f_xs_none fs_medium">
				<!--item-->
				<div><b class="color_dark">The best priced product!</b> Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque...</div>
				<!--item-->
				<div><b class="color_dark">The best priced product!</b> Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque...</div>
				<!--item-->
				<div><b class="color_dark">The best priced product!</b> Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque...</div>
			</div>
		</div>
	</section>
	<!--content-->
	<section class="section_offset_3">
		<div class="container">
			<!--slider-->
			<div class="wrapper">
				<div class="flex_container f_left f_md_none wrapper" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<img src="images/flexslider_img_2.jpg" alt="">
								<div class="fs_caption r_corners wrapper d_xs_none">
									<header class="bg_light">
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
											<li class="relative d_inline_m">
												<a href="#" class="fs_small color_grey"><i>3D</i></a>,
												<a href="#" class="fs_small color_grey"><i>Graphic Design</i></a>
											</li>
										</ul>
									</header>
									<h3 class="color_dark fw_light m_bottom_12">Think outside the box!</h3>
									<p class="m_bottom_12 fs_medium">Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede...</p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</div>
							</li>
							<li>
								<img src="images/flexslider_img_1.jpg" alt="">
								<div class="fs_caption r_corners wrapper d_xs_none">
									<header class="bg_light">
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
											<li class="relative d_inline_m">
												<a href="#" class="fs_small color_grey"><i>Mobile</i></a>,
												<a href="#" class="fs_small color_grey"><i>Technology</i></a>
											</li>
										</ul>
									</header>
									<h3 class="color_dark fw_light m_bottom_12">The best priced product!</h3>
									<p class="m_bottom_12 fs_medium">Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec...</p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</div>
							</li>
							<li class="slider_video_wrap">
								<iframe src="http://www.youtube.com/embed/-BrDlrytgm8?wmode=transparent" frameborder="0" allowfullscreen></iframe>
							</li>
							<li>
								<img src="images/flexslider_img_3.jpg" alt="">
								<div class="fs_caption r_corners wrapper d_xs_none">
									<header class="bg_light">
										<ul class="dotted_list color_grey_light_2 article_stats">
											<li class="m_right_15 relative d_inline_m">
												<a href="#" class="color_grey_light_2 fs_small">
													<i class="icon-link"></i>
												</a>
											</li>
											<li class="m_right_15 relative d_inline_m">
												<a href="#" class="fs_small color_grey">
													<i>May 9, 2013</i>
												</a>
											</li>
											<li class="relative d_inline_m">
												<a href="#" class="fs_small color_grey"><i>Process</i></a>,
												<a href="#" class="fs_small color_grey"><i>Technology</i></a>
											</li>
										</ul>
									</header>
									<h3 class="color_dark fw_light m_bottom_12">Try The 30 Day Free Trial With All Features</h3>
									<p class="m_bottom_12 fs_medium">Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit...</p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="thumbnails_container f_md_none f_right bg_light_2 md_wrapper" data-appear-animation="fadeInLeft" data-appear-animation-delay="800">
					<ul>
						<li class="tr_all f_md_left t_md_align_c f_xs_none t_xs_align_l">
							<article class="clearfix">
								<div class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
									<img src="images/thumbnails_img_1.jpg" alt="">
								</div>
								<p class="color_dark d_block lh_medium m_bottom_5 tr_all"><b>Think outside the box!</b></p>
								<ul class="dotted_list color_grey_light_2 article_stats">
									<li class="m_right_15 relative d_inline_m">
										<span class="color_grey_light_2 fs_small">
											<i class="icon-picture"></i>
										</span>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<span class="fs_small color_grey">
											<i>June 26, 2013</i>
										</span>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<span class="fs_small color_grey"><i>3D</i></span>,
										<span class="fs_small color_grey"><i>Graphic Design</i></span>
									</li>
								</ul>
							</article>
						</li>
						<li class="tr_all f_md_left t_md_align_c f_xs_none t_xs_align_l">
							<article class="clearfix">
								<div class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
									<img src="images/thumbnails_img_2.jpg" alt="">
								</div>
								<p class="color_dark d_block lh_medium m_bottom_5 tr_all"><b>The best priced product!</b></p>
								<ul class="dotted_list color_grey_light_2 article_stats">
									<li class="m_right_15 relative d_inline_m">
										<span class="color_grey_light_2 fs_small">
											<i class="icon-doc-text-inv"></i>
										</span>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<span class="fs_small color_grey">
											<i>June 29, 2013</i>
										</span>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<span class="fs_small color_grey"><i>Mobile</i></span>,
										<span class="fs_small color_grey"><i>Technology</i></span>
									</li>
								</ul>
							</article>
						</li>
						<li class="tr_all f_md_left t_md_align_c f_xs_none t_xs_align_l">
							<article class="clearfix">
								<div class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
									<img src="images/thumbnails_img_3.jpg" alt="">
								</div>
								<p class="color_dark d_block lh_medium m_bottom_5 tr_all"><b>Nam elit agna,endrerit sit amet, tincidunt</b></p>
								<ul class="dotted_list color_grey_light_2 article_stats">
									<li class="m_right_15 relative d_inline_m">
										<span class="color_grey_light_2 fs_small">
											<i class="icon-video"></i>
										</span>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<span class="fs_small color_grey">
											<i>June 25, 2013</i>
										</span>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<span class="fs_small color_grey"><i>Video</i></span>,
										<span class="fs_small color_grey"><i>Music</i></span>
									</li>
								</ul>
							</article>
						</li>
						<li class="tr_all f_md_left t_md_align_c f_xs_none t_xs_align_l">
							<article class="clearfix">
								<div class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20 f_sm_none m_sm_bottom_10 d_sm_inline_b d_xs_block f_xs_left m_xs_bottom_0">
									<img src="images/thumbnails_img_4.jpg" alt="">
								</div>
								<p class="color_dark d_block lh_medium m_bottom_5 tr_all"><b>Try The 30 Day Free Trial With All Features </b></p>
								<ul class="dotted_list color_grey_light_2 article_stats">
									<li class="m_right_15 relative d_inline_m">
										<span class="color_grey_light_2 fs_small">
											<i class="icon-link"></i>
										</span>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<span class="fs_small color_grey">
											<i>May 9, 2013</i>
										</span>
									</li>
									<li class="m_right_15 relative d_inline_m">
										<span class="fs_small color_grey"><i>Process</i></span>,
										<span class="fs_small color_grey"><i>Technology</i></span>
									</li>
								</ul>
							</article>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>    
	<section class="section_offset_3 bg_light_2 relative">
		<div class="container">
			<div class="row">
				<div class="owl-carousel" data-plugin-options='{"itemsCustom": [[992,4],[768,3],[450,1],[10,1]],"autoPlay":true,"singleItem" : false}' data-nav="lp_nav_">
					<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown">
						<!--image-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b">
							<img src="images/blog_img_7.jpg" alt="">
							<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
								<a href="images/blog_img_7.jpg" data-group="latest_news" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<!--description-->
						<figcaption>
							<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Endrerit sit amet, tincidunt ac</a></h6>
							<!--project's info-->
							<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-doc-text-inv"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey fs_small">
										<i>June 29,2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
									<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_scheme_hover">
										<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
						</figcaption>
					</figure>
					<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="200">
						<!--image-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b">
							<img src="images/shop_img_5.jpg" alt="">
							<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
								<a href="images/shop_img_5.jpg" data-group="latest_news" data-title="Title 2" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<!--description-->
						<figcaption>
							<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Vivamus eget nibh</a></h6>
							<!--project's info-->
							<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-quote"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey fs_small">
										<i>June 29,2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
									<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_scheme_hover">
										<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
						</figcaption>
					</figure>
					<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="400">
						<!--image-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b">
							<img src="images/magazine_img_1.jpg" alt="">
							<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
								<a href="images/magazine_img_1.jpg" data-group="latest_news" data-title="Title 3" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<!--description-->
						<figcaption>
							<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Aliquam dapibus tincidunt</a></h6>
							<!--project's info-->
							<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-picture"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey fs_small">
										<i>June 29,2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
									<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_scheme_hover">
										<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
						</figcaption>
					</figure>
					<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="600">
						<!--image-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b">
							<img src="images/portfolio_img_22.jpg" alt="">
							<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
								<a href="images/home_img_2.jpg" data-group="latest_news" data-title="Title 3" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<!--description-->
						<figcaption>
							<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Fusce euismod consequat ante</a></h6>
							<!--project's info-->
							<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-picture"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey fs_small">
										<i>June 29,2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
									<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_scheme_hover">
										<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
						</figcaption>
					</figure>
					<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="800">
						<!--image-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b">
							<img src="images/blog_img_7.jpg" alt="">
							<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
								<a href="images/blog_img_7.jpg" data-group="latest_news" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<!--description-->
						<figcaption>
							<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Endrerit sit amet, tincidunt ac</a></h6>
							<!--project's info-->
							<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-doc-text-inv"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey fs_small">
										<i>June 29,2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
									<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_scheme_hover">
										<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
						</figcaption>
					</figure>
					<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="1000">
						<!--image-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b">
							<img src="images/shop_img_5.jpg" alt="">
							<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
								<a href="images/shop_img_5.jpg" data-group="latest_news" data-title="Title 2" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<!--description-->
						<figcaption>
							<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Vivamus eget nibh</a></h6>
							<!--project's info-->
							<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-quote"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey fs_small">
										<i>June 29,2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
									<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_scheme_hover">
										<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
						</figcaption>
					</figure>
					<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="1200">
						<!--image-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b">
							<img src="images/magazine_img_1.jpg" alt="">
							<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
								<a href="images/magazine_img_1.jpg" data-group="latest_news" data-title="Title 3" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<!--description-->
						<figcaption>
							<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Aliquam dapibus tincidunt</a></h6>
							<!--project's info-->
							<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-picture"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey fs_small">
										<i>June 29,2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
									<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_scheme_hover">
										<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
						</figcaption>
					</figure>
					<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="1400">
						<!--image-->
						<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b">
							<img src="images/portfolio_img_22.jpg" alt="">
							<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
								<a href="images/home_img_2.jpg" data-group="latest_news" data-title="Title 3" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
									<i class="icon-plus"></i>
								</a>
								<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
									<i class="icon-link"></i>
								</a>
							</div>
						</div>
						<!--description-->
						<figcaption>
							<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Fusce euismod consequat ante</a></h6>
							<!--project's info-->
							<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey_light_2 fs_small">
										<i class="icon-picture"></i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_grey fs_small">
										<i>June 29,2013</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
									<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_scheme_hover">
										<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
									</a>
								</li>
								<li class="m_right_15 relative d_inline_m">
									<a href="#" class="color_red_hover">
										<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
									</a>
								</li>
							</ul>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
		<!--carousel nav-->
		<button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover lp_nav_prev d_md_none" data-appear-animation="fadeIn">
			<i class="icon-left-open-big"></i>
		</button>
		<button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover lp_nav_next d_md_none" data-appear-animation="fadeIn">
			<i class="icon-right-open-big"></i>
		</button>
	</section>
	<section class="section_offset_3">
		<div class="container">
			<div class="m_bottom_15" data-appear-animation="bounceInLeft">
				<h5 class="d_inline_m fw_light color_dark m_right_15">Technology</h5>
				<a href="#" class="button_type_1 mini_side_offset fs_medium color_dark tr_all r_corners d_inline_m color_purple_hover">View All</a>
			</div>
			<div class="row">
				<section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
					<div class="clearfix m_bottom_50 m_xs_bottom_15">
						<!--post-->
						<article class="news_main_item f_left f_xs_none w_xs_full m_xs_bottom_30" data-appear-animation="fadeInDown" data-appear-animation-delay="200">
							<!--post content-->
							<figure>
								<a href="blog_single_image_post.html" class="d_block wrapper r_corners m_bottom_20">
									<img src="images/news_img_1.jpg" alt="">
								</a>
								<figcaption>
									<h4 class="fw_light m_bottom_5 fs_middle"><a href="blog_single_image_post.html" class="color_dark tr_all">Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed, nulla</a></h4>
									<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-doc-text-inv"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey fs_small">
												<i>June 29,2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_medium color_grey"><i>Mobile</i></a>,
											<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
											</a>
										</li>
									</ul>
									<p class="m_bottom_12">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque... </p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</figcaption>
							</figure>
						</article>
						<ul class="news_list f_right f_xs_none w_xs_full" data-appear-animation="fadeInDown" data-appear-animation-delay="400">
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_2.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Etiam cursus leo vel metus</b></a>
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
											<a href="#" class="fs_small color_grey"><i>3D</i></a>,
											<a href="#" class="fs_small color_grey"><i>Graphic Design</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">7</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">33</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_3.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Praesent justo dolor</b></a>
									<ul class="dotted_list color_grey_light_2 article_stats">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-music-1"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey">
												<i>June 29, 2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey"><i>Mobile</i></a>,
											<a href="#" class="fs_small color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">2</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">4</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_4.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Nam elit agna,endrerit sit amet, tincidunt </b></a>
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
											<a href="#" class="fs_small color_grey"><i>Video</i></a>,
											<a href="#" class="fs_small color_grey"><i>Music</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">17</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">291</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_5.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>In pede mi, aliquet sit amet, euismod in, auctor ut </b></a>
									<ul class="dotted_list color_grey_light_2 article_stats">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-link"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey">
												<i>May 9, 2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey"><i>Process</i></a>,
											<a href="#" class="fs_small color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">0</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">37</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_6.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Aenean auctor wisi et</b></a>
									<ul class="dotted_list color_grey_light_2 article_stats">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-quote"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey">
												<i>May 9, 2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey"><i>Process</i></a>,
											<a href="#" class="fs_small color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">0</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">37</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
						</ul>
					</div>
					<!--advertising area-->
					<div class="advertising_area type_3 t_align_c bg_light_2 color_grey m_bottom_50 m_xs_bottom_30" data-appear-animation="fadeInDown">
						<span class="tt_uppercase translucent">Advertisment</span>
						<div class="tt_uppercase bg_light_3 vc_child"><div class="d_inline_m translucent fw_light lh_medium">Advertising Area<br><span class="fs_medium">728 x 90</span></div></div>
					</div>
					<div class="m_bottom_15" data-appear-animation="bounceInLeft">
						<h5 class="d_inline_m fw_light color_dark m_right_15">Resources</h5>
						<a href="#" class="button_type_1 mini_side_offset fs_medium color_dark tr_all r_corners d_inline_m color_purple_hover">View All</a>
					</div>
					<div class="clearfix m_bottom_45 m_xs_bottom_15">
						<!--post-->
						<article class="news_main_item f_left f_xs_none w_xs_full m_xs_bottom_30" data-appear-animation="fadeInDown" data-appear-animation-delay="200">
							<!--post content-->
							<figure>
								<a href="blog_single_image_post.html" class="d_block wrapper r_corners m_bottom_20">
									<img src="images/news_img_7.jpg" alt="">
								</a>
								<figcaption>
									<h4 class="fw_light m_bottom_5 fs_middle"><a href="blog_single_image_post.html" class="color_dark tr_all">Quisque diam lorem, interdum</a></h4>
									<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-doc-text-inv"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey fs_small">
												<i>June 29,2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_medium color_grey"><i>Mobile</i></a>,
											<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
											</a>
										</li>
									</ul>
									<p class="m_bottom_12">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque... </p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</figcaption>
							</figure>
						</article>
						<ul class="news_list f_right f_xs_none w_xs_full" data-appear-animation="fadeInDown" data-appear-animation-delay="400">
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_8.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Vestibulum iaculis lacinia est</b></a>
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
											<a href="#" class="fs_small color_grey"><i>3D</i></a>,
											<a href="#" class="fs_small color_grey"><i>Graphic Design</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">7</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">33</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_9.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Neque porro quisquam est, qui dolorem ipsum </b></a>
									<ul class="dotted_list color_grey_light_2 article_stats">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-music-1"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey">
												<i>June 29, 2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey"><i>Mobile</i></a>,
											<a href="#" class="fs_small color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">2</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">4</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_10.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Pellentesque sed dolor</b></a>
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
											<a href="#" class="fs_small color_grey"><i>Video</i></a>,
											<a href="#" class="fs_small color_grey"><i>Music</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">17</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">291</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_11.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</b></a>
									<ul class="dotted_list color_grey_light_2 article_stats">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-link"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey">
												<i>May 9, 2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey"><i>Process</i></a>,
											<a href="#" class="fs_small color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">0</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">37</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
							<li class="tr_delay">
								<article class="clearfix">
									<a href="#" class="d_block r_corners wrapper f_left m_right_20 m_md_right_10 m_xs_right_20">
										<img src="images/news_img_12.jpg" alt="">
									</a>
									<a href="#" class="color_dark d_block lh_medium m_bottom_5"><b>Aliquam congue fermentum</b></a>
									<ul class="dotted_list color_grey_light_2 article_stats">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-quote"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey">
												<i>May 9, 2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_small color_grey"><i>Process</i></a>,
											<a href="#" class="fs_small color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">0</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">37</i>
											</a>
										</li>
									</ul>
								</article>
							</li>
						</ul>
					</div>
                    
					<!--title & nav-->
					<div class="clearfix m_bottom_23 m_sm_bottom_10 m_xs_bottom_20" data-appear-animation="bounceInLeft">
						<h5 class="fw_light f_left f_xs_none color_dark m_xs_bottom_10">Web Design</h5>
						<div class="f_right f_xs_none clearfix">
							<button class="icon_wrap_size_5 circle color_grey_light f_left m_right_8 web_design_prev fn_type_2 color_scheme_hover tr_all">
								<i class="icon-angle-left fs_large"></i>
							</button>
							<button class="icon_wrap_size_5 circle color_grey_light f_left web_design_next fn_type_2 color_scheme_hover tr_all">
								<i class="icon-angle-right fs_large"></i>
							</button>
						</div>
					</div>
					<!--carousel-->
					<div class="row">
						<div class="owl-carousel featured_products type_2 m_bottom_45 m_xs_bottom_0" data-plugin-options='{"singleItem":false,"itemsCustom":[[992,3],[768,3],[600,2],[10,1]]}' data-nav="web_design_">
							<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="200">
								<!--image-->
								<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
									<img src="images/design_img_1.jpg" alt="">
									<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
										<a href="images/design_img_1.jpg" data-group="web_design" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
											<i class="icon-plus"></i>
										</a>
										<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>
                                
								<!--description-->
								<figcaption>
									<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Endrerit sit amet, tincidunt ac</a></h6>
									<!--project's info-->
									<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-doc-text-inv"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey fs_small">
												<i>June 29,2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_medium color_grey"><i>Mobile</i></a>,
											<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
											</a>
										</li>
									</ul>
									<p class="m_bottom_12">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et...</p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</figcaption>
                                
							</figure>
							<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="400">
								<!--image-->
								<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
									<img src="images/design_img_2.jpg" alt="">
									<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
										<a href="images/design_img_2.jpg" data-group="web_design" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
											<i class="icon-plus"></i>
										</a>
										<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>
								<!--description-->
								<figcaption>
									<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Vivamus eget nibh</a></h6>
									<!--project's info-->
									<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-quote"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey fs_small">
												<i>June 29,2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_medium color_grey"><i>Mobile</i></a>,
											<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
											</a>
										</li>
									</ul>
									<p class="m_bottom_12">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et...</p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</figcaption>
							</figure>
							<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="600">
								<!--image-->
								<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
									<img src="images/design_img_3.jpg" alt="">
									<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
										<a href="images/design_img_3.jpg" data-group="web_design" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
											<i class="icon-plus"></i>
										</a>
										<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>
								<!--description-->
								<figcaption>
									<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Aliquam dapibus tincidunt</a></h6>
									<!--project's info-->
									<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-doc-text-inv"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey fs_small">
												<i>June 29,2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
											<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
											</a>
										</li>
									</ul>
									<p class="m_bottom_12">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et...</p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</figcaption>
							</figure>
							<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="800">
								<!--image-->
								<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
									<img src="images/design_img_1.jpg" alt="">
									<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
										<a href="images/design_img_1.jpg" data-group="web_design" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
											<i class="icon-plus"></i>
										</a>
										<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>
								<!--description-->
								<figcaption>
									<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Endrerit sit amet, tincidunt ac</a></h6>
									<!--project's info-->
									<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-doc-text-inv"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey fs_small">
												<i>June 29,2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_medium color_grey"><i>Mobile</i></a>,
											<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
											</a>
										</li>
									</ul>
									<p class="m_bottom_12">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et...</p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</figcaption>
							</figure>
							<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="1000">
								<!--image-->
								<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
									<img src="images/design_img_2.jpg" alt="">
									<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
										<a href="images/design_img_2.jpg" data-group="web_design" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
											<i class="icon-plus"></i>
										</a>
										<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>
								<!--description-->
								<figcaption>
									<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Vivamus eget nibh</a></h6>
									<!--project's info-->
									<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-quote"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey fs_small">
												<i>June 29,2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_medium color_grey"><i>Mobile</i></a>,
											<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
											</a>
										</li>
									</ul>
									<p class="m_bottom_12">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et...</p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</figcaption>
							</figure>
							<figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" data-appear-animation-delay="1200">
								<!--image-->
								<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
									<img src="images/design_img_3.jpg" alt="">
									<div class="popup_buttons tr_all_long w_md_full t_md_align_c">
										<a href="images/design_img_3.jpg" data-group="web_design" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10 f_md_none d_md_inline_b">
											<i class="icon-plus"></i>
										</a>
										<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left f_md_none d_md_inline_b">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>
								<!--description-->
								<figcaption>
									<h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Aliquam dapibus tincidunt</a></h6>
									<!--project's info-->
									<ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i class="icon-doc-text-inv"></i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey fs_small">
												<i>June 29,2013</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="fs_medium color_grey"><i>3D</i></a>,
											<a href="#" class="fs_medium color_grey"><i>Technology</i></a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_scheme_hover">
												<i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">12</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
											</a>
										</li>
									</ul>
									<p class="m_bottom_12">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et...</p>
									<a href="#" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
										<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
											<i class="icon-angle-right"></i>
										</span>
										Read More
									</a>
								</figcaption>
							</figure>
						</div>
					</div>
				</section>
				<aside class="col-lg-3 col-md-3 col-sm-3">
					<div class="m_bottom_23" data-appear-animation="fadeInDown" data-appear-animation-delay="600">
						<ul class="hr_list social_icons">
							<!--tooltip_container class is required-->
							<li class="m_right_15 m_bottom_15 tooltip_container">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Facebook</span>
								<a href="#" class="d_block facebook_static_color icon_wrap_size_2 circle color_light">
									<i class="icon-facebook fs_small"></i>
								</a>
							</li>
							<li class="m_right_15 m_bottom_15 tooltip_container">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Twitter</span>
								<a href="#" class="d_block twitter_static_color icon_wrap_size_2 circle color_light">
									<i class="icon-twitter fs_small"></i>
								</a>
							</li>
							<li class="m_right_15 m_bottom_15 m_sm_right_0 tooltip_container m_xs_right_15">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">Google Plus</span>
								<a href="#" class="d_block googleplus_static_color icon_wrap_size_2 circle color_light">
									<i class="icon-gplus-1 fs_small"></i>
								</a>
							</li>
							<li class="m_right_15 m_md_right_0 m_sm_right_15 m_bottom_15 tooltip_container">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">Pinterest</span>
								<a href="#" class="d_block pinterest_static_color icon_wrap_size_2 circle color_light">
									<i class="icon-pinterest fs_small"></i>
								</a>
							</li>
							<li class="m_bottom_15 m_md_right_15 tooltip_container">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">RSS</span>
								<a href="#" class="d_block rss icon_wrap_size_2 circle color_light">
									<i class="icon-rss-1 fs_small"></i>
								</a>
							</li>
							<li class="m_right_15 m_bottom_15 m_md_right_15 m_sm_right_0 m_xs_right_15 tooltip_container">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">Dribbble</span>
								<a href="#" class="d_block dribbble_static_color icon_wrap_size_2 circle color_light">
									<i class="icon-dribbble fs_small"></i>
								</a>
							</li>
							<li class="m_right_15 m_bottom_15 tooltip_container">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">Flickr</span>
								<a href="#" class="d_block flickr_static_color icon_wrap_size_2 circle color_light">
									<i class="icon-flickr-1 fs_small"></i>
								</a>
							</li>
							<li class="m_right_15 m_bottom_15 tooltip_container">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">Youtube</span>
								<a href="#" class="d_block youtube_static_color icon_wrap_size_2 circle color_light">
									<i class="icon-youtube-play fs_small"></i>
								</a>
							</li>
							<li class="m_right_15 m_bottom_15 tooltip_container m_sm_right_0 m_xs_right_15">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">Vimeo</span>
								<a href="#" class="d_block vimeo_static_color icon_wrap_size_2 circle color_light">
									<i class="icon-vimeo fs_small"></i>
								</a>
							</li>
							<li class="m_bottom_15 tooltip_container">
								<!--tooltip-->
								<span class="d_block r_corners color_default tooltip fs_small tr_all">Instagram</span>
								<a href="#" class="d_block instagram_static_color icon_wrap_size_2 circle color_light">
									<i class="icon-instagramm fs_small"></i>
								</a>
							</li>
						</ul>
					</div>
					<!--advertising area-->
					<div class="advertising_area t_align_c bg_light_2 color_grey m_bottom_40 m_xs_bottom_30" data-appear-animation="fadeInDown">
						<span class="tt_uppercase translucent">Advertisment</span>
						<div class="tt_uppercase bg_light_3 vc_child"><div class="d_inline_m translucent fw_light lh_medium">Advertising Area<br><span class="fs_medium">250 x 250</span></div></div>
					</div>
					<div class="tabs m_bottom_45 m_xs_bottom_30" data-appear-animation="fadeInDown">
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
					<div class="m_bottom_45 m_xs_bottom_30" data-appear-animation="fadeInDown">
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
					<div class="m_bottom_45 m_xs_bottom_30" data-appear-animation="fadeInDown">
						<h5 class="fw_light color_dark m_bottom_23">Tags</h5>
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
                    
                    
					<div class="m_bottom_40 m_xs_bottom_30" data-appear-animation="fadeInDown">
						<h5 class="fw_light color_dark m_bottom_23">Popular Video</h5>
						<div class="iframe_video_wrap">
							<iframe src="http://player.vimeo.com/video/71476743"></iframe>
						</div>
					</div>
                    
					<!--advertising area-->
					<div class="advertising_area type_2 t_align_c bg_light_2 color_grey m_bottom_45 m_xs_bottom_30" data-appear-animation="fadeInDown">
						<span class="tt_uppercase translucent">Advertisment</span>
						<div class="advertising_row">
							<div class="clearfix">
								<div class="half_column f_left">
									<div class="tt_uppercase bg_light_3 vc_child">
										<div class="d_inline_m translucent"><span class="d_sm_none d_xs_block">Advertising<br>Area<br></span>125 x125</div>	
									</div>
								</div>
								<div class="half_column f_right">
									<div class="tt_uppercase bg_light_3 vc_child">
										<div class="d_inline_m translucent"><span class="d_sm_none d_xs_block">Advertising<br>Area<br></span>125 x125</div>	
									</div>
								</div>
							</div>
							<div class="clearfix">
								<div class="half_column f_left">
									<div class="tt_uppercase bg_light_3 vc_child">
										<div class="d_inline_m translucent"><span class="d_sm_none d_xs_block">Advertising<br>Area<br></span>125 x125</div>	
									</div>
								</div>
								<div class="half_column f_right">
									<div class="tt_uppercase bg_light_3 vc_child">
										<div class="d_inline_m translucent"><span class="d_sm_none d_xs_block">Advertising<br>Area<br></span>125 x125</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>
@endsection