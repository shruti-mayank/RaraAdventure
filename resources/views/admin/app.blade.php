<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Rara Adventure|Admin')</title>
	@include('admin/layout/head')
</head>
<body>
	@include('admin/layout/header')

	@yield('content')

	@include('admin/layout/footer')
</body>
</html>
