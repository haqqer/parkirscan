<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Parkir Scanner</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="about-logo" href="{{ asset('images/about-logo.png') }}">
    <link rel="shortcut icon" type="image/logo" href="{{ asset('images/about-logo.png') }}" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/animate.css') }}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/vendor/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/responsive.css') }}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home_page"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="#home_page">Home</a></li>
                    <li><a href="#about_page">About</a></li>
                    <li><a href="#features_page">Features</a></li>
                    <li><a href="#gallery_page">Gallery</a></li>
                    <li><a href="#questions_page">FAQ</a></li>
                    <li><a href="#contact_page">Contacts</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="#">Register</a>                </div>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay angle" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">
                    <figure class="mobile-image wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('images/header-mobile.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-xs"></div>
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s">Parkir Scanner <br> Easy Park With Us</h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>The one and only solution for easy parking in university. <br> Just show your barcode.</p>
                    </div>
                    <div class="space-20"></div>
                    <a href="#" class="bttn-white wow fadeInUp" data-wow-delay="0.8s"><i class="lnr lnr-download"></i>Download App</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Home-Area-End -->
    <!-- About-Area -->
    <section class="section-padding" id="about_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="{{ asset('images/about-logo.png') }}" alt="About Logo">
                        <div class="space-20"></div>
                        <h5 class="title">About Parkir Scanner</h5>
                        <div class="space-30"></div>
                        <h3 class="blue-color">Mudah - Cepat - Modern </h3>
                        <div class="space-20"></div>
                        <p>Parkir Scanner adalah sebuah aplikasi yang dirancang untuk memudahkan kegiatan keluar masuk lapangan parkir di kawasan universitas. Dimana seluruh mahasiswa diwajibkan untuk menunjukkan STNK sebagai syarat keluarnya kendaraan. Dengan mengangkat tema mudah, cepat, dan modern aplikasi ini bertujuan untuk mempersingkat waktu dan mengurangi resiko kehilangan STNK. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area-End -->
    <!-- Progress-Area -->
    <section class="progress-area gray-bg" id="progress_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">NEXT PROGRESS</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">Fitur Tambahan</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p>1. Memungkinkan untuk membooking tempat parkir yang ada. <br> 2. Menampilkan area parkir yang tersedia maupun yang sudah full. <br> 3. Pengguna dapat mengirimkan pesan maupun keluhan melalui media sosial yang sudah kami sediakan.</p>
                        </div>
                        <div class="space-50"></div>
                        <!--<a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>-->
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <figure class="mobile-image">
                        <img src="{{ asset('images/progress-phone.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Progress-Area-End -->
    <!-- Video-Area -->
    <section class="video-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="video-photo">
                        <img src="{{ asset('images/video-image.jpg') }}" alt="">
                        <a href="https://www.youtube.com/watch?v=ScrDhTsX0EQ" class="popup video-button">
                            <img src="{{ asset('images/play-button.png') }}" alt="">                        </a>                    </div>
                </div>
                <div class="col-xs-12 col-md-5 col-md-offset-1">
                    <div class="space-60 hidden visible-xs"></div>
                    <div class="page-title">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">VIDEO ILUSTTRATION</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">How it works?</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p>Lihat video di samping :)</p>
                        </div>
                        <div class="space-50"></div>
                        <!--<a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video-Area-End -->
    <!-- Feature-Area -->
    <section class="feature-area section-padding-top" id="features_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h5 class="title">Features</h5>
                        <div class="space-10"></div>
                        <h3>Easy Park With Us</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <h4>Cepat</h4>
                        <p>Tidak membutuhkan waktu lama saat keluar dari area parkir kampus.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-thumbs-up"></i>
                        </div>
                        <h4>Mudah</h4>
                        <p>Memudahkan petugas dan mahasiswa saat keluar dari area parkir kampus.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-laptop-phone"></i>
                        </div>
                        <h4>Modern</h4>
                        <p>Tidak lagi menggunakan STNK untuk keluar dari area parkir kampus.</p>
                    </div>
                    <div class="space-60"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                    <figure class="mobile-image">
                        <img src="{{ asset('images/feature-image.png') }}" alt="Feature Photo">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-lock"></i>
                        </div>
                        <h4>Aman</h4>
                        <p>Mengurangi resiko kehilangan STNK.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-bubble"></i>
                        </div>
                        <h4>Messenge</h4>
                        <p>Fitur tambahan yang memudahkan pengguna mengirim pesan dan keluhan secara langsung pada official account kita.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-download"></i>
                        </div>
                        <h4>Download</h4>
                        <p>Mudah untuk di download.</p>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature-Area-End -->
    <!-- Testimonial-Area -->
    <section class="testimonial-area" id="testimonial_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Testimonials</h5>
                        <h3 class="dark-color">Our Client Loves US</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{ asset('images/team-1.png') }}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{ asset('images/team-2.jpg') }}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{ asset('images/team-3.jpg') }}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{ asset('images/team-1.png') }}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{ asset('images/team-2.jpg') }}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{ asset('images/team-3.jpg') }}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial-Area-End -->
    <!-- Gallery-Area -->
    <section class="gallery-area section-padding angle" id="gallery_page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 gallery-slider">
                    <div class="gallery-slide">
                        <div class="item"><img src="{{ asset('images/gallery-3.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-2.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-1.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-2.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-3.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-2.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-1.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-2.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-3.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-2.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-1.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-2.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-3.jpg') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/gallery-1.jpg') }}" alt=""></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-lg-3">
                    <div class="page-title">
                        <h5 class="white-color title wow fadeInUp" data-wow-delay="0.2s">Screenshots</h5>
                        <div class="space-10"></div>
                        <h3 class="white-color wow fadeInUp" data-wow-delay="0.4s">Tampilan Aplikasi</h3>
                    </div>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>1. Tampilan awal aplikasi <br> 2. Scan barcode yang sudah ada <br> 3. Hasil data</p>
                    </div>
                    <div class="space-50"></div>
                    <!--<a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery-Area-End -->
    <!-- How-To-Use -->
    <!--<section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="page-title">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Our features</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">Aour Approach of Design is Prety Simple and Clear</h3>
                    </div>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                    </div>
                    <div class="space-50"></div>
                    <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                    <div class="space-60 hidden visible-xs"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-clock"></i>
                        </div>
                        <h4>Easy Notifications</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                    <div class="space-50"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-laptop-phone"></i>
                        </div>
                        <h4>Fully Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                    <div class="space-50"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-cog"></i>
                        </div>
                        <h4>Editable Layout</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How-To-Use-End -->
    <!-- Download-Area -->
    <div class="download-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 hidden-sm">
                    <figure class="mobile-image">
                        <img src="{{ asset('images//download-image.png') }}" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-md-6 section-padding">
                    <h3 class="white-color">Download The App</h3>
                    <div class="space-20"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam possimus eaque magnam eum praesentium unde.</p>
                    <div class="space-60"></div>
                    <a href="#" class="bttn-white sq"><img src="{{ asset('images//apple-icon.png') }}" alt="apple icon"> Apple Store</a>
                    <a href="#" class="bttn-white sq"><img src="{{ asset('images//play-store-icon.png') }}" alt="Play Store Icon"> Play Store</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Download-Area-End -->
    
    <!--Questions-Area -->
    <section id="questions_page" class="questions-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">FAQ</h5>
                        <h3 class="dark-color">Frequently Asked Questions</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="toggole-boxs">
                        <h3>Apakah dengan adanya aplikasi ini dijamin lebih efektif?</h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>Apakah dengan adanya aplikasi ini mampu mengurangi kehilangan STNK? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="space-20 hidden visible-xs"></div>
                    <div class="toggole-boxs">
                        <h3>Bagaimana dengan keamanannya? Apakah Terjangkau? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>Bagaimana jika saya mempunyai kendaraan lebih dari satu atau sedang meminjam motor orang lain? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Questions-Area-End -->
    <!-- Subscribe-Form -->
    <div class="subscribe-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="subscribe-form text-center">
                        <h3 class="blue-color">Subscribe for More Features</h3>
                        <div class="space-20"></div>
                        <form id="mc-form">
                            <input type="email" class="control" placeholder="Enter your email" required="required" id="mc-email">
                            <button class="bttn-white active" type="submit"><span class="lnr lnr-location"></span> Subscribe</button>
                            <label class="mt10" for="mc-email"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe-Form-Area -->
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Contact US</h5>
                            <h3 class="dark-color">Find Us By Bellow Details</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>Dian Nuswantoro University <br /> Jl. Imam Bonjol no.207 <br> Semarang Tengah, Jawa Tengah</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>by Whatsapp : <br> 0852712110412</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p>Email : <br /> p.scanner4210@gmail.com
                            </p>
                        </div>
                    </div>
					<div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-users"></span>
                            </div>
                            <p>Instagram : parkirscanner <br> Twitter : @ParkirScanner <br> Facebook : Parkir Scanner <br> LINE : @xwl8233z
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="lnr lnr-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></span>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <!--Plugin-JS-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/contact-form.js') }}"></script>
    <script src="{{ asset('js/ajaxchimp.js') }}"></script>
    <script src="{{ asset('js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!--Main-active-JS-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
