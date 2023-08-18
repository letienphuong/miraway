
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Miraway </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo_favicon.png')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;500;700&family=Merienda:wght@400;700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500&family=Poppins:wght@400;500;600&family=Roboto:ital,wght@0,100;0,500;0,700;1,700&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- CSS here -->
            <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
            <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/ticker-style.css')}}">
            {{-- <link rel="stylesheet" href="{{asset('assets/css/flaticon.css"')}}">
            <link rel="stylesheet" href="{{asset('assets/css/slicknav.css"')}}"> --}}
            <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

   </head>
   <body>
    <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <img class="logo_header" src="{{asset('assets/img/logo_miraway.png')}}" alt="">
                                </div>

                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img style="width:200px;" src="{{asset('assets/img/logo_miraway.png')}}" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation" style="float:right;">
                                            <li><a href="index.html">Giới thiệu</a></li>
                                            <li><a href="categori.html">Giải pháp</a></li>
                                            <li><a href="about.html">Tin tức và sự kiện</a></li>
                                            <li><a href="latest_news.html">Cơ hội nghề nghiệp</a></li>
                                            <li><a href="{{route('create-article')}}">Viết bài</a></li>
                                            <li><a href="{{route('login')}}">Đăng nhập</a></li>
                                            {{-- @if (Session::has('username'))
                                            <li><a>Xin chào, {{ Session::get('username') }}</a></li>
                                            @else
                                            @endif --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none">
                                    <div class="slicknav_menu">
                                        <a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_open" style="outline: none;">
                                            <span class="slicknav_menutxt">MENU</span>
                                            <span class="slicknav_icon">
                                                <span class="slicknav_icon-bar"></span>
                                                <span class="slicknav_icon-bar"></span>
                                                <span class="slicknav_icon-bar"></span>
                                            </span>
                                        </a>
                                        <ul class="slicknav_nav" aria-hidden="false" role="menu" style="display: block;">
                                            <li><a href="index.html" role="menuitem" tabindex="0">GIới thiệu</a></li>
                                            <li><a href="categori.html" role="menuitem" tabindex="0">Giải pháp</a></li>
                                            <li><a href="about.html" role="menuitem" tabindex="0">Tin tức và sự kiện</a></li>
                                            <li><a href="latest_news.html" role="menuitem" tabindex="0">Cơ hội nghề nghiệp</a></li>
                                            <li><a href="contact.html" role="menuitem" tabindex="0">Đăng nhập</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
