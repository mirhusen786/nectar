{{-- @include('Frondend.header') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buscom - Multipurpose Business and Corporate Template">

    <!-- ========== Page Title ========== -->
    {{-- @foreach($header as $data)
    <title>{{$data->tittle}}</title>
@endforeach --}}
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('nechtor/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('nechtor/style.css')}}" rel="stylesheet">
    <link href="{{asset('nechtor/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->


    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">

</head>
<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    {{-- <div class="top-bar-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
                    <a href="index.html">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="col-md-9 address-info text-right">
                    <div class="info box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> Info@gmail.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-call-center"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> +123 456 7890
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-countdown"></i>
                                </div>
                                <div class="info">
                                    <span>Office Hours</span> Sat - Wed : 8:00 - 4:00
                                </div> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

   
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border active-border logo-less small-pad navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

              
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Page Title 
    ============================================= -->
    <div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Gallery Grid</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Portfolio
    ============================================= -->
    <div class="portfolio-area default-padding">
        <div class="container">
            <div class="gallery-items-area">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".development">Development</button>
                            <button data-filter=".consulting">Consulting</button>
                            <button data-filter=".finance">Finance</button>
                            <button data-filter=".branding">Branding</button>
                            <button data-filter=".capital">Capital</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary">
                            <div id="portfolio-grid" class="gallery-items col-4">
                                <!-- Single Item -->
                                <div class="pf-item development capital">
                                    <div class="effect-box">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </div>
                                        <div class="info">
                                            <div class="left">
                                                <h4><a href="#">Marketing</a></h4>
                                                <p>business, finance</p>
                                            </div>
                                            <div class="right">
                                                <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </div>
                                        <div class="info">
                                            <div class="left">
                                                <h4><a href="#">Analysis</a></h4>
                                                <p>business, finance</p>
                                            </div>
                                            <div class="right">
                                               <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting finance">
                                    <div class="effect-box">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </div>
                                        <div class="info">
                                            <div class="left">
                                                <h4><a href="#">Profit</a></h4>
                                                <p>business, finance</p>
                                            </div>
                                            <div class="right">
                                                <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item finance">
                                    <div class="effect-box">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </div>
                                        <div class="info">
                                            <div class="left">
                                                <h4><a href="#">Business</a></h4>
                                                <p>business, finance</p>
                                            </div>
                                            <div class="right">
                                                <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item capital development">
                                    <div class="effect-box">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </div>
                                        <div class="info">
                                            <div class="left">
                                                <h4><a href="#">Success</a></h4>
                                                <p>business, finance</p>
                                            </div>
                                            <div class="right">
                                                <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </div>
                                        <div class="info">
                                            <div class="left">
                                                <h4><a href="#">Marketing</a></h4>
                                                <p>business, finance</p>
                                            </div>
                                            <div class="right">
                                                <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item development capital">
                                    <div class="effect-box">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </div>
                                        <div class="info">
                                            <div class="left">
                                                <h4><a href="#">Planing</a></h4>
                                                <p>business, finance</p>
                                            </div>
                                            <div class="right">
                                                <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item finance">
                                    <div class="effect-box">
                                        <div class="thumb">
                                            <img src="assets/img/800x800.png" alt="thumb">
                                        </div>
                                        <div class="info">
                                            <div class="left">
                                                <h4><a href="#">Report</a></h4>
                                                <p>business, finance</p>
                                            </div>
                                            <div class="right">
                                                <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->
 <!-- Start Footer-->

    <!-- End Footer-->
    @include('Frondend.footer')
 
    <script src="{{asset('nechtor/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('nechtor/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('nechtor/js/equal-height.min.js')}}"></script>
    <script src="{{asset('nechtor/js/jquery.appear.js')}}"></script>
    <script src="{{asset('nechtor/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('nechtor/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('nechtor/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('nechtor/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('nechtor/js/wow.min.js')}}"></script>
    <script src="{{asset('nechtor/js/progress-bar.min.js')}}"></script>
    <script src="{{asset('nechtor/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('nechtor/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('nechtor/js/count-to.js')}}"></script>
    <script src="{{asset('nechtor/js/YTPlayer.min.js')}}"></script>
    <script src="{{asset('nechtor/js/circle-progress.js')}}"></script>
    <script src="{{asset('nechtor/js/bootsnav.js')}}"></script>
    <script src="{{asset('nechtor/js/main.js')}}"></script>
    <script>
        setTimeout(function(){
           $('.alert').fadeOut('slow');
        }, 4000);
     </script>
    </body>
    </html>