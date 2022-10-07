<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Dashboard - {{ env('APP_NAME') }}</title>
    <!-- General CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('ladun') }}/dashboard/stisla/css/bootstrap.min.css">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('ladun') }}/dashboard/stisla/css/jqvmap.min.css">
    <link rel="stylesheet" href="{{ asset('ladun') }}/dashboard/stisla/css/summernote-bs4.css">
    <link rel="stylesheet" href="{{ asset('ladun') }}/dashboard/stisla/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://s3.jagoanstorage.com/nadhamedia/lib_cdn/owlcarousel2/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('ladun') }}/dashboard/stisla/css/datatables.min.css">
    <link rel="stylesheet" href="{{ asset('ladun') }}/iziToast/iziToast.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('ladun') }}/dashboard/stisla/css/style.css">
    <link rel="stylesheet" href="{{ asset('ladun') }}/dashboard/stisla/css/components.css">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
    <link rel="stylesheet" href="{{ asset('ladun') }}/dashboard/nProg/nprogress.css" />

</head>

<body style="font-family: 'Nunito Sans';">
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg" style='background-color:#0984e3;'></div>
            <nav class="navbar navbar-expand-lg main-navbar" id='divNavbar'>
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('ladun') }}/dashboard/img/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('/auth/logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            @include('layout.sideMenu')
