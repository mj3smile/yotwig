<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') | yotwigAPI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/loginregister/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/loginregister/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/loginregister/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/loginregister/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/loginregister/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/loginregister/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/loginregister/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/loginregister/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/loginregister/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                @yield('content')
            </div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="{{url('assets/loginregister/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/loginregister/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/loginregister/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('assets/loginregister/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/loginregister/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/loginregister/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{url('assets/loginregister/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/loginregister/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/loginregister/js/main.js')}}"></script>

</body>
</html>
