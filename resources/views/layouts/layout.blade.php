<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('/home/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/home/css/app.css') }}">
</head>
<body>
	@yield('body')
	<script src="{{ asset('/home/js/app.js') }}"></script>
</body>
</html>