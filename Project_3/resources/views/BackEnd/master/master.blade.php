<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/backend/">
	<title>@yield('title')</title>
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link href="css/styles.css" rel="stylesheet">
	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>
	<link rel="stylesheet" href="Awesome/css/all.css">
</head>
<body>
	<!-- header -->
    @include('BackEnd.master.header')
	<!-- header -->
	<!-- sidebar left-->
    @include('BackEnd.master.slidebar')
	<!--/. end sidebar left-->

	<!--main-->
    @yield('content')
	<!--end main-->

    @section('script')
        	<!-- javascript -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
    @show

</body>

</html>