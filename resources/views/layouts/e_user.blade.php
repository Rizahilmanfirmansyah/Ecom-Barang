{{-- <!DOCTYPE html>
<html>
    <head>
        <title>belanja</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body >
        <br><br>
        @yield('content')
    </body>   --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/color-01.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('e_user/css/flexslider.css')}}">
    @livewireStyles
</head>
<body class="home-page home-01 ">

    {{$slot}}

	<!--footer area-->
</body>
@livewireScripts
	<script src="{{ asset('e_user/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('e_user/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('e_user/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('e_user/js/jquery.flexslider.js')}}"></script>
	<script src="{{ asset('e_user/js/jquery.countdown.min.js')}}"></script>
	<script src="{{ asset('e_user/js/chosen.jquery.min.js')}}"></script>
	<script src="{{ asset('e_user/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('e_user/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('e_user/js/functions.js')}}"></script>
</html>