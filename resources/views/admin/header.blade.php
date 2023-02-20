<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>sandhaya - Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('public/admin') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/admin') }}/vendor/chartist/css/chartist.min.css">
    <link href="{{ asset('public/admin') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="{{ asset('public/admin') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('public/admin') }}/css/style.css" rel="stylesheet">

    <link href="{{ asset('public/admin') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <style>
    .deznav {
  
    height: 100%;
    top: inherit !important;
}
.deznav {
    border-right: 5px solid #7034d7;
}
.deznav .metismenu ul a {
    
    padding-left: 7px !important;
}
    .nav-header {
    display: none !important;
}
        [data-theme-version="dark"] .deznav {
    background-color: #fff !important;
}
table#example th {
    color: #000 !important;
}
[data-theme-version="dark"] .menu-toggle .nav-header .nav-control .hamburger .line {
    background-color: #000 !important;
}
.deznav .metismenu > li.mm-active > a {
    background: #fff !important;

}
button.btn.dropdown-toggle.btn-light {
    border: 1px solid #ddd !important;
}
div#example_filter input {
    background: 0 !important;
    border: 1px solid #ddd;
}
[data-theme-version="dark"] .footer .copyright a {
    color: #000 !important;
}
.input-group.serch-bar.search-area.d-xl-inline-flex.d-none input {
    background: 0 !important;
    border: 1px solid #ddd;
}
.input-group.serch-bar.search-area.d-xl-inline-flex.d-none button {
    background: 0 !important;
    border: 1px solid #ddd !important;
}
h4.card-title {
    color: #000 !important;
}
[data-theme-version="dark"] .deznav .metismenu > li:hover > a, [data-theme-version="dark"] .deznav .metismenu > li:focus > a, [data-theme-version="dark"] .deznav .metismenu > li.mm-active > a {
    color: #000 !important;
}
[data-theme-version="dark"] .deznav .metismenu > li:hover > a i, [data-theme-version="dark"] .deznav .metismenu > li:focus > a i, [data-theme-version="dark"] .deznav .metismenu > li.mm-active > a i {
    color: #000 !important;
}
[data-theme-version="dark"] .deznav .metismenu > li > a {
    color: #000;
}
[data-theme-version="dark"] .card {
    background-color: #fff;
    box-shadow: none;
}
[data-theme-version="dark"] {
   
    color: #828690;
    background: 0 !important;
}
[data-theme-version="dark"] .deznav .metismenu ul a:hover, [data-theme-version="dark"] .deznav .metismenu ul a:focus, [data-theme-version="dark"] .deznav .metismenu ul a.mm-active {
    color: #000 !important;
}
button.input-group-text.button-search {
    height: 40px !important;
}
.header-info span {
    color: #000 !important;
}
[data-theme-version="dark"] .modal-footer, [data-theme-version="dark"] .modal-header {
    border-color: #ddd;
}
[data-theme-version="dark"] h1, [data-theme-version="dark"] .h1, [data-theme-version="dark"] h2, [data-theme-version="dark"] .h2, [data-theme-version="dark"] h3, [data-theme-version="dark"] .h3, [data-theme-version="dark"] h4, [data-theme-version="dark"] .h4, [data-theme-version="dark"] h5, [data-theme-version="dark"] .h5, [data-theme-version="dark"] h6, [data-theme-version="dark"] .h6 {
    color: #000 !important;
}
[data-theme-version="dark"] .form-control {
    background-color: #fff;
    border-color: #2a2833;
    color: #fff;
    border: 1px solid #ddd;
}
[data-theme-version="dark"] .modal-content {
    background: lightgrey !important;
}
[data-theme-version="dark"] .deznav .metismenu .has-arrow:after {
    border-color: #000 !important;
}
[data-theme-version="dark"][data-sidebar-style="full"][data-layout="vertical"] .menu-toggle .deznav .metismenu > li:hover > a {
    background: #fff !important;
}
[data-theme-version="dark"] .menu-toggle .deznav .metismenu li > ul {
    background: #fff!important;
  
}
[data-theme-version="dark"] .deznav .metismenu a {
    color: #000 !important;
}
[data-theme-version="dark"] .dropdown-menu {
    background-color: #fff;
    /* box-shadow: 0px 0px 0px 1px rgb(255 255 255 / 10%) !important; */
    border: 1px solid #ddd;
}
.deznav .metismenu > li > a i {
    color: #000 !important;
}
h2.text-black.mb-0.font-w600 {
    color: #000 !important;
}
[data-theme-version="dark"] .nav-header .hamburger .line {
    background: #000 !important;
}
a.brand-logo h4 {
     color: #000 !important;
    font-size: 14px;
        padding-left: 36px;
}
.input-group.serch-bar.search-area.d-xl-inline-flex.d-none {
    display: inherit !important;
}
[data-theme-version="dark"] .header {
    background-color: #fff !important;
}
[data-theme-version="dark"] .nav-header, [data-theme-version="dark"] .nav-control {
    background-color: #fff !important;
}
    </style>
</head>
<body>

    <!--<div id="preloader">-->
    <!--    <div class="sk-three-bounce">-->
    <!--        <div class="sk-child sk-bounce1"></div>-->
    <!--        <div class="sk-child sk-bounce2"></div>-->
    <!--        <div class="sk-child sk-bounce3"></div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--<div id="main-wrapper">-->

     
    <!--    <div class="nav-header">-->
    <!--        <a href="{{ url('dashboard') }}" class="brand-logo">-->
    <!--        <h4>Sandhyapan Admin</h4>-->
    <!--        </a>-->

    <!--        <div class="nav-control">-->
    <!--            <div class="hamburger">-->
    <!--                <span class="line"></span><span class="line"></span><span class="line"></span>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--    <div class="header">-->
    <!--        <div class="header-content">-->
    <!--            <nav class="navbar navbar-expand">-->
    <!--                <div class="collapse navbar-collapse justify-content-between">-->
    <!--                    <div class="header-left">-->

    <!--                    </div>-->

    <!--                    <ul class="navbar-nav header-right">-->
				<!--			<li class="nav-item">-->
				<!--				<div class="input-group  serch-bar search-area d-xl-inline-flex d-none">-->
				<!--					<div class="input-group-append">-->
				<!--						<button class="input-group-text button-search"><i class="flaticon-381-search-2"></i></button>-->
				<!--					</div>-->
				<!--					<input type="text" class="form-control" placeholder="Search here...">-->
				<!--				</div>-->
				<!--			</li>-->

    <!--                        <li class="nav-item dropdown header-profile">-->
    <!--                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">-->
    <!--                                <img src="{{ asset('public/admin') }}/images/profile/pic1.jpg" width="20" alt=""/>-->
				<!--					<div class="header-info">-->
				<!--						<span>Admin</span>-->
				<!--						<small>Super Admin</small>-->
				<!--					</div>-->
    <!--                            </a>-->
    <!--                            <div class="dropdown-menu dropdown-menu-right">-->


    <!--                                <a href="{{ url('logout') }}" class="dropdown-item ai-icon">-->
    <!--                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>-->
    <!--                                    <span class="ms-2">Logout </span>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </nav>-->
    <!--        </div>-->
    <!--    </div>-->

