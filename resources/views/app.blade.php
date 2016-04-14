<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="author" content="Diky Arga">
    <meta name="description" content="Telease pary">
    <meta name="keywords" content="release, tealinuxos, doscom, ">

    <!-- <script type="text/javascript">
        //<![CDATA[
        try {
            if (!window.CloudFlare) {
                var CloudFlare = [{
                    verbose: 0,
                    p: 1459494062,
                    byc: 0,
                    owlid: "cf",
                    bag2: 1,
                    mirage2: 0,
                    oracle: 0,
                    paths: {
                        cloudflare: "/cdn-cgi/nexp/dok3v=1613a3a185/"
                    },
                    atok: "9b85829e92d24c946eb7c9d618fe7f5e",
                    petok: "5658ac097700dc540ace52f00d7b16eeaf0e4d8f-1459524619-3600",
                    zone: "web3canvas.com",
                    rocket: "0",
                    apps: {
                        "abetterbrowser": {
                            "ie": "7",
                            "opera": null,
                            "chrome": null,
                            "safari": null,
                            "firefox": null
                        },
                        "ga_key": {
                            "ua": "UA-38030533-1",
                            "ga_bs": "2"
                        }
                    },
                    sha2test: 0
                }];
                ! function(a, b) {
                    a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=e982913d31/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                }()
            }
        } catch (e) {};
        //]]>
    </script> -->
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
<!--modal-->
<div id="pembicara1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Anjar Hardiena</h4></center>
            </div>
            <div class="modal-body">
                <p><b>Pengalaman Kerja :</b></p>
                <ul>
                    <li>Chief Operating Officer CLOUDKILAT(2014 ~ sekarang)</li>
                    <li>Chief Linux PT. INFINSYS SYSTEM INDONESIA(2011 ~ Sekarang)</li>
                    <li>Staff Ahli Direktorat SIPLK bidang Open Source Software(2009 ~ 2011)</li>
                    <li>Koordinator IGOS Center Bekasi Kementrian Riset dan Teknologi(2009 ~ Sekarang)</li>
                </ul>
                <br>
                <p><b>Penghargaan :</b></p>
                <ul>
                    <li>Penghargaan oleh Pemerintah Indonesia dari MENKOMINFO 2008</li>
                    <li>Komite Penggerak Indonesia Linux Conference(2014, 2015)</li>
                    <li>Peserta Konfrensi Asia Afrika tentang Open Source 2008</li>
                    <li>Wakil Ketua Divisi IT dari berbagai acara OpensourceNasional & internasional.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<div id="pembicara2" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Masas Dani</h4></center>
            </div>
            <div class="modal-body">
                <p><b>Pengalaman Kerja :</b></p>
                <ul>
                    <li>Chief Technology Officer GNEWS - Social News Reader (2015 ~ sekarang)</li>
                    <li>VP Engineering GDILab (2014 ~ Sekarang)</li>
                    <li>Technical Director GDILAB (2013 ~ 2014)</li>
                    <li>Chief Executive Officer Blung Studio (2012 ~ 2013)</li>
                </ul>
                <br>
                <p><b>Project :</b></p>
                <ul>
                    <li>Olympiasel - Web Informasi Olimpiade Telkomsel 2013 (2013)</li>
                    <li>E-Gamelan Android & Blackberry (2012 - 2013)</li>
                    <li>Gnews IOs (2014)</li>
                    <li>Tea Linux OS (2010 - 2012)</li>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<div id="pembicara3" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Shokibi</h4></center>
            </div>
            <div class="modal-body">
                <p><b>Kegiatan :</b></p>
                <ul>
                    <li>Jual Beli Komputer Bekas</li>
                    <li>Penulis Buku Panduan Aplikasi Open Source</li>
                    <li>Penulis Buku Panduan Aplikasi Open Source</li>
                    <li>Melayani Migrasi, Support Center dan Training Implementasi software open source</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<div id="pembicara4" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Team Doscom</h4></center>
            </div>
            <div class="modal-body">
                <p><center>Kami adalah komunitas open source di bidang perangkat lunak yang memilik visi untuk " Memasyarakatkan Open Source dan Meng-Open Source-kan Masyrakat " melalui berbagai kegitan seperti workshop,
                    seminar dan sharing session, Kami juga meracik sebuah sistem operasi bernama TeaLinuxOS.</center> </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="register-now" tabindex="-1" role="dialog" aria-labelledby="register-now-label">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="register-now-label">Event Registration
                </h4>
            </div>
            <div class="modal-body">
                <div class="registration-form">

                    <form action="https://www.paypal.com/cgi-bin/webscr" method="POST" target="_top" id="paypal-regn">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label>Choose a Pass</label>
                                    <select class="form-control" name="os0" required>
                                        <option value="">Choose...</option>
                                        <option value="Silver Pass">Silver Pass $49.00 USD</option>
                                        <option value="Gold Pass">Gold Pass $99.00 USD</option>
                                        <option value="VIP Pass">VIP Pass $149.00 USD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>No. of Seats</label>
                                    <select class="form-control" name="quantity" required>
                                        <option value="">Choose...</option>
                                        <option value="1">1 seat</option>
                                        <option value="2">2 seats</option>
                                        <option value="3">3 seats</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="agree" required> I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>
                                </label>
                            </div>
                        </div>




                        <input type="hidden" name="cmd" value="_xclick">

                        <input type="hidden" name="business" value="surjithctly@gmail.com">
                        <input type="hidden" name="lc" value="US">

                        <input type="hidden" name="item_name" value="Gather Event Pass">

                        <input type="hidden" name="on0" value="Pass">
                        <input type="hidden" name="button_subtype" value="services">
                        <input type="hidden" name="no_note" value="1">

                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="bn" value="Event_BuyNow_WPS_IN">

                        <input type="hidden" name="option_select0" value="Silver Pass">

                        <input type="hidden" name="option_amount0" value="49.00">

                        <input type="hidden" name="option_select1" value="Gold Pass">

                        <input type="hidden" name="option_amount1" value="99.00">

                        <input type="hidden" name="option_select2" value="VIP Pass">

                        <input type="hidden" name="option_amount2" value="149.00">
                        <input type="hidden" name="option_index" value="0">


                        <input type="hidden" name="notify_url" value="http://demo.web3canvas.com/themeforest/gather/php/verify-ipn.php">

                        <input type="hidden" name="return" value="http://demo.web3canvas.com/themeforest/gather/success.html">

                        <input type="hidden" name="cancel_return" value="http://demo.web3canvas.com/themeforest/gather/index.html">

                        <div class="text-center top-space">
                            <button type="submit" id="reserve-btn" class="btn btn-success btn-lg">Reserve my Seat</button>

                            <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="{{asset ('js/jquery.min.js')}}"></script>

<script src="{{asset ('js/bootstrap.min.js')}}"></script>

<script src="{{asset ('js/plugins/countdown.js')}}"></script>
<script src="{{asset ('js/plugins/wow.js')}}"></script>
<script src="{{asset ('js/plugins/slick.js')}}"></script>
{{--<script src="{{asset ('js/plugins/magnific-popup.js')}}"></script>--}}
<script src="{{asset ('js/plugins/validate.js')}}"></script>
<script src="{{asset ('js/plugins/appear.js')}}"></script>
<script src="{{asset ('js/plugins/count-to.js')}}"></script>
<script src="{{asset ('js/plugins/nicescroll.js')}}"></script>

<!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
<script src="{{asset ('js/plugins/infobox.js')}}"></script>
<!-- <script src="js/plugins/google-map.js"></script>
<script src="js/plugins/directions.js"></script> -->




{{--<script src="{{asset ('js/includes/contact_form.js')}}"></script>--}}

<script src="{{ asset('js/main.js') }}"></script>


@yield('footer')
</html>
