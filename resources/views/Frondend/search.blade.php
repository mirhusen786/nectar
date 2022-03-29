<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buscom - Multipurpose Business and Corporate Template">

    <!-- ========== Page Title ========== -->
    <title>Buscom - Multipurpose Business and Corporate Template</title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    @include('Frondend.header')

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
                    @foreach($header as $data)
                    <ul>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <ul class="social">
                        <li><a href="{{$data->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{$data->twitter}}"><i class="fab fa-twitter"></i></a></li>
                       
                    </ul>
                    @endforeach
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

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            {!! getTopNavCat() !!}
                           
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

  

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Our Services
    ============================================= -->
    <div class="services-area text-center carousel-shadow default-padding">
        <div class="container-medium">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-items services-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        @if($services->isNotEmpty())
                        @foreach ($services as $data)
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-analysis"></i>
                            </div>
                            <h4>{{$data->title}}</h4>
                            <p>
                               {{$data->details}}
                              </p>
                            <a href="#">Read More <i class="ti-arrow-right"></i></a>
                        </div>
                        <!-- End Single Item -->
    @endforeach
@else 
           <h4 align="center">Sorry services is not found</h4>
   
@endif
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->

  
    @include('Frondend.footer')

    <!-- jQuery Frameworks
    ============================================= -->
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

</body>
</html>