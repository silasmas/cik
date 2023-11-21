<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Silas Masimango">
    <meta name="description" content="Portail web du Centre IK" />
    <meta name="csrf-token" content="{{csrf_token() }}">
	<!-- Page Title -->
	<title>{{config('app.name')}}</title>
    <!-- Favicon Icon -->
  	<link rel="icon" href="assets/img/logocik.png">
	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- Start Preloader -->
    <div id="tm-preloader">
        <div id="tm-preloader-in">
            <div></div><div></div><div></div><div></div><div></div>
        </div>
    </div>
    <!-- End Preloader -->
