<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--favicon-->
	<link rel="icon" href="{{asset('public/assets/images/favicon.ico')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('public/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('public/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('public/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet" />
	<link href="{{asset('public/assets/css/app.css')}}" rel="stylesheet" />
	<link href="{{asset('public/assets/css/icons.css')}}" rel="stylesheet" />
	<title>Admin</title>
    @yield('page-css')
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
        @include('admin.layouts.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
        @include('admin.layouts.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				@yield('content')
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		<a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
		<!--End Back To Top Button-->
        @include('admin.layouts.footer')
	</div>
	<!--end wrapper-->

    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->

	<script src="{{asset('public/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('public/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script src="{{asset('public/assets/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('public/assets/js/app.js')}}"></script>
	<script>
		new PerfectScrollbar(".app-container");
	</script>
    @yield('page-js')
</body>

</html>
