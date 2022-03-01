<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title> @section('pagetitle')Hostar - Bootstrap 4 Hospital Admin Dashboard Template @show</title>
	<!-- Favicon-->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Plugins Core Css -->
	<link href="/dashboard/css/app.min.css" rel="stylesheet">
    <link href="/dashboard/css/materialize-rtl.min.css" rel="stylesheet">
	<!-- Custom Css -->
	<link href="/dashboard/css/style.css" rel="stylesheet">
	<link href="/dashboard/css/extra_pages.css" rel="stylesheet">
</head>

<body>


@yield('content')

<script src="/dashboard/js/app.min.js"></script>
<!-- Extra page Js -->
<script src="/dashboard/js/pages.js"></script>

@yield('js')

</body>

</html>
