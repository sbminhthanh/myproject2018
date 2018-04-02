<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">
    <base href="{{asset('')}}">
    <title>
        @yield('title') 
    </title>
    <!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="admin/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="admin/assets/vendor_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="admin/assets/vendor_components/Ionicons/css/ionicons.min.css">		
    {{--  Select2  --}}
    <link rel="stylesheet" href="admin/assets/vendor_components/select2/dist/css/select2.min.css">  
	<!-- Theme style -->
	<link rel="stylesheet" href="admin/css/master_style.css">
    <!-- Ionicons -->
	<link rel="stylesheet" href="admin/assets/vendor_components/Ionicons/css/ionicons.min.css">   
    <!-- toast CSS -->
    <link href="admin/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="admin/assets/vendor_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">  
    <!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="admin/assets/vendor_plugins/iCheck/all.css">
	<!-- foxadmin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="admin/css/skins/_all-skins.css">
	<link rel="stylesheet" href="admin/css/style.css">
    <!-- jQuery 3 -->
	<script src="admin/assets/vendor_components/jquery/dist/jquery.min.js"></script>
    @yield('include-header')

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
    {{--  Wrapper  --}}
    <div class="wrapper">
        {{--  Header  --}}
            @include('admin.layout.header')
        {{--  End Header  --}}
        {{--  Menu  --}}
            @include('admin.layout.menu')
        {{--  End Menu  --}}
        <div class="content-wrapper">
            {{--  Header - Content  --}}
            <section class="content-header">
                @yield('content-header') 
            </section>
            {{--  End Header - Content  --}}
            {{--  Content  --}}
                <section class="content">
                    <div class="row">
                        @yield('content') 
                    </div>
                </section>
            {{--  End Content   --}}
        </div>
        {{--  Footer  --}}
            @include('admin.layout.footer')
        {{--  End Footer  --}}
    </div>
    {{-- End Wrapper  --}} 	

   
	<!-- popper -->
	<script src="admin/assets/vendor_components/popper/dist/popper.min.js"></script>	
	<!-- Bootstrap 4.0-->
	<script src="admin/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>	
	<!-- Select2 -->
	<script src="admin/assets/vendor_components/select2/dist/js/select2.full.js"></script>	
	<!-- InputMask -->
	<script src="admin/assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
	<script src="admin/assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="admin/assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>	
	<!-- date-range-picker -->
	<script src="admin/assets/vendor_components/moment/min/moment.min.js"></script>
	<!-- bootstrap datepicker -->
	<script src="admin/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>	
	<script src="admin/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.vi.min.js"></script>	
	<!-- bootstrap time picker -->
	<script src="admin/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>	
	<!-- SlimScroll -->
	<script src="admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>	
	<!-- iCheck 1.0.1 -->
	<script src="admin/assets/vendor_plugins/iCheck/icheck.min.js"></script>	
	<!-- FastClick -->
	<script src="admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>	
    <!-- toast -->
	<script src="admin/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script src="admin/js/pages/toastr.js"></script>
    <!-- Sweet-Alert  -->
    <script src="admin/assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <script src="admin/assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>
	<!-- foxadmin App -->
	<script src="admin/js/template.js"></script>	
	<!-- foxadmin for demo purposes -->
	<script src="admin/js/demo.js"></script>	
	<!-- foxadmin for advanced form element -->
	{{--  <script src="admin/js/pages/advanced-form-element.js"></script>  --}}
	<script src="admin/js/my-jquery.js"></script>  
    @include('admin.layout.message')
    @yield('include-footer')
    @yield('script') 
</body>
</html>
