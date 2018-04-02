<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">
    <base href="{{asset('')}}">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
    <title>
        @yield('title') 
    </title>
   
    <!--web fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
    @yield('header-first')
    <!--libs css-->
    <link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="plugins/rs-plugin/css/settings.css">
    <link rel="stylesheet" type="text/css" media="all" href="plugins/colorpicker/colorpicker.css">
    <!--theme css-->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/theme-animate.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    <!--head libs-->
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="plugins/jquery.queryloader2.min.js"></script>
    <script src="plugins/modernizr.js"></script>
    @yield('header-last')
</head>
<body class="sticky_menu">
    {{--  Wrapper  --}}
    <div class="wide_layout bg_light">
        <header role="banner" class="relative">
            {{--  Header  --}}
                @include('layout.header')
            {{--  End Header  --}}
            <hr>
            {{--  Menu  --}}
                @include('layout.menu')
            {{--  End Menu  --}}
        </header>
        <div class="content-wrapper">
            {{--  Content  --}}
                @yield('content') 
            {{--  End Content   --}}
        </div>
        {{--  Footer  --}}
            @include('layout.footer')
        {{--  End Footer  --}}
    </div>
    {{-- End Wrapper  --}} 	

   
	<!--back to top button-->
    <button id="back_to_top" class="circle icon_wrap_size_2 color_blue_hover color_grey_light_4 tr_all d_md_none">
        <i class="icon-angle-up fs_large"></i>
    </button>

    <!--Libs-->
    @yield('footer-first')
    
    @yield('footer-last')
    @include('layout.message')
    
    @yield('script') 
</body>
</html>
