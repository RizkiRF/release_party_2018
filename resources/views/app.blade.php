<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    @yield('meta')
    <meta name="author" content="Diky Arga">
    <meta name="description" content="Release Party TealinuxOS">
    <meta name="keywords" content="release, tealinuxos, doscom, udinus, open-source ">
    <style media="screen">
        .caption-title{
            line-height: 1.6;
        }
    </style>
    <link rel="shortcut icon" href="http://studio.tealinuxos.org/css/homepage/favicon.png">

    <title>Release Party TeaLinux OS 8</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link href="{{ asset('css/plugins/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/streamline-icons.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">


    <link href="{{asset('css/themes/green.css')}}" rel="stylesheet">


    <link rel="stylesheet" title="green" media="screen" href="{{asset('css/themes/green.css')}}">

    <link href="{{asset ('css/demo.css')}}" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="{{asset('js/ie/respond.min.js')}}"></script>
    <![endif]-->

    <script src="{{asset ('js/modernizr.min.js')}}"></script>

    <script src="{{asset ('js/plugins/pace.js')}}"></script>

</head>

<body class="animate-page" data-spy="scroll" data-target="#navbar" data-offset="100">


<div class="preloader"></div>

<nav class="navbar navbar-default navbar-fixed-top reveal-menu js-reveal-menu reveal-menu-hidden">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{asset('images/header-logo.png')}}" alt="Gather"> </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#top">Beranda</a>
                </li>
                <li><a href="#pembicara">Pembicara</a>
                </li>
                <li><a href="#agenda">Agenda</a>
                </li>
                <li><a href="#galeri">Galeri</a>
                </li>
                <li><a href="#detail">Detail</a>
                </li>
                <li><a href="#daftar">Daftar</a>
                </li>
                <li><a href="#kontak">Kontak</a>
                </li>
                <li><a href="#faq">FAQ</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Daftar</a>
                        </li>

                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Sesudah bayar</li>
                        <li><a href="#">Konfirmasi Pembayaran</a>
                        </li>
                        <li><a href="#">Cetak Tiket</a>
                        </li>

                        </li>
                    </ul>
        </div>

    </div>
</nav>


@yield('content')

<footer>
    <div class="social-icons">
        <a href="#" class="wow zoomIn"> <i class="fa fa-twitter"></i> </a>
        <a href="#" class="wow zoomIn" data-wow-delay="0.2s"> <i class="fa fa-facebook"></i> </a>
        <a href="#" class="wow zoomIn" data-wow-delay="0.4s"> <i class="fa fa-linkedin"></i> </a>
    </div>
    <p> <small class="text-muted">@doscomedia 2016</small>
    </p>
</footer>
<a href="#top" class="back_to_top"><img src="{{asset ('images/back_to_top.png')}}" alt="back to top">
</a>

<script src="{{asset ('js/jquery.min.js')}}"></script>

<script src="{{asset ('js/bootstrap.min.js')}}"></script>

<script src="{{asset ('js/plugins/countdown.js')}}"></script>
<script src="{{asset ('js/plugins/wow.js')}}"></script>
<script src="{{asset ('js/plugins/slick.js')}}"></script>
<script src="{{asset ('js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset ('js/plugins/validate.js')}}"></script>
<script src="{{asset ('js/plugins/appear.js')}}"></script>
<script src="{{asset ('js/plugins/count-to.js')}}"></script>
<script src="{{asset ('js/plugins/nicescroll.js')}}"></script>

<!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
<script src="{{asset ('js/plugins/infobox.js')}}"></script>
<!-- <script src="js/plugins/google-map.js"></script>
<script src="js/plugins/directions.js"></script> -->




<script src="{{ asset('js/includes/contact_form.js')}}"></script>

<script src="{{ asset('js/main.js') }}"></script>

@yield('footer')


</html>
