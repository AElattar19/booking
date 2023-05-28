<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Valex -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!-- Favicon -->
		<link rel="icon" href="{{asset('Dashboard/assets/img/brand/favicon.png') }}" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="{{asset('Dashboard/assets/css/icons.css') }}" rel="stylesheet">

		<!--  Owl-carousel css-->
		<link href="{{asset('Dashboard/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

		<!--  Custom Scroll bar-->
		<link href="{{asset('Dashboard/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>

		<!--  Sidebar css -->
		<link href="{{asset('Dashboard/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

		<!-- Sidemenu css -->
		<link rel="stylesheet" href="{{asset('Dashboard/assets/css-rtl/closed-sidemenu.css') }}">

		<!--- Internal Morris css-->
		<link href="{{asset('Dashboard/assets/plugins/morris.js/morris.css') }}" rel="stylesheet">

		<!--- Style css --->
		<link href="{{asset('Dashboard/assets/css-rtl/style.css') }}" rel="stylesheet">

		<!--- Dark-mode css --->
		<link href="{{asset('Dashboard/assets/css-rtl/style-dark.css') }}" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="{{asset('Dashboard/assets/css-rtl/skin-modes.css') }}" rel="stylesheet" />

	</head>

	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{asset('Dashboard/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			@include('dashboard.layouts.include.aside')
			<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header opened -->

                @include('dashboard.layouts.include.header')
				<!-- /main-header -->

				<!-- container opened -->
				<div class="container-fluid">
					
					@yield('body')
				
				</div>
			</div>
			<!-- Container closed -->



			<!-- Footer opened -->
            @include('dashboard.layouts.include.footer')
			<!-- Footer closed -->

		</div>
		<!-- End Page -->
	
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="{{asset('Dashboard/assets/plugins/jquery/jquery.min.js') }}"></script>
		@stack('scripts')
		<!-- Bootstrap Bundle js -->
		<script src="{{asset('Dashboard/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!--Internal  Chart.bundle js -->
		<script src="{{asset('Dashboard/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

		<!-- Ionicons js -->
		<script src="{{asset('Dashboard/assets/plugins/ionicons/ionicons.js') }}"></script>

		<!-- Moment js -->
		<script src="{{asset('Dashboard/assets/plugins/moment/moment.js') }}"></script>

		<!--Internal Sparkline js -->
		<script src="{{asset('Dashboard/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

		<!-- Moment js -->
		<script src="{{asset('Dashboard/assets/plugins/raphael/raphael.min.js') }}"></script>

		<!--Internal  Flot js-->
		<script src="{{asset('Dashboard/assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
		<script src="{{asset('Dashboard/assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
		<script src="{{asset('Dashboard/assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
		<script src="{{asset('Dashboard/assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
		<script src="{{asset('Dashboard/assets/js/dashboard.sampledata.js') }}"></script>
		<script src="{{asset('Dashboard/assets/js/chart.flot.sampledata.js') }}"></script>

		<!-- Custom Scroll bar Js-->
		<script src="{{asset('Dashboard/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

		<!-- Rating js-->
		<script src="{{asset('Dashboard/assets/plugins/rating/jquery.rating-stars.js') }}"></script>
		<script src="{{asset('Dashboard/assets/plugins/rating/jquery.barrating.js') }}"></script>

		<!-- P-scroll js -->
		<script src="{{asset('Dashboard/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
		<script src="{{asset('Dashboard/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

		<!-- Horizontalmenu js-->
		<script src="{{asset('Dashboard/assets/plugins/sidebar/sidebar-rtl.js') }}"></script>
		<script src="{{asset('Dashboard/assets/plugins/sidebar/sidebar-custom.js') }}"></script>

		<!-- Eva-icons js -->
		<script src="{{asset('Dashboard/assets/js/eva-icons.min.js') }}"></script>

		<!-- Sticky js -->
		<script src="{{asset('Dashboard/assets/js/sticky.js') }}"></script>
		<script src="{{asset('Dashboard/assets/js/modal-popup.js') }}"></script>

		<!-- Left-menu js-->
		<script src="{{asset('Dashboard/assets/plugins/side-menu/sidemenu.js') }}"></script>

		<!-- Internal Map -->
		<script src="{{asset('Dashboard/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
		<script src="{{asset('Dashboard/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

		<!--Internal  index js -->
		<script src="{{asset('Dashboard/assets/js/index.js') }}"></script>

		<!-- Apexchart js-->
		<script src="{{asset('Dashboard/assets/js/apexcharts.js') }}"></script>

		<!-- custom js -->
		<script src="{{asset('Dashboard/assets/js/custom.js') }}"></script>
		<script src="{{asset('Dashboard/assets/js/jquery.vmap.sampledata.js') }}"></script>
		
	
	</body>
</html>