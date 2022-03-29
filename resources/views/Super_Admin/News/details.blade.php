<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buscom - Multipurpose Business and Corporate Template">

    <!-- ========== Page Title ========== -->
  
    <title>{{$view->tittle}}</title>

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

   

<div class="top-bar-area">
    <div class="container">
        <div class="row">
             @foreach($header as $data)
            <div class="col-md-3 logo">
                <a href="index.html">
                    <img src=" {{asset('uploads/'.$data->image)}}" alt="Logo" class="logo" >
                    {{-- {{asset('uploads/'.$data->auth_image)}} --}}
                    {{-- <img src="assets/img/logo.png" class="logo" alt="Logo"> --}}
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
                                <span>Email</span> {{$data->email}}
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-call-center"></i>
                            </div>
                            <div class="info">
                                <span>Phone</span> {{$data->phone}}
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->







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

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version One</a></li>
                                <li><a href="index-2.html">Home Version Two</a></li>
                                <li><a href="index-3.html">Home Version Three</a></li>
                                <li><a href="index-4.html">Home Version Four</a></li>
                                <li><a href="index-5.html">Home Version Five</a></li>
                                <li><a href="index-op.html">Onepage Version One <span class="badge">New</span></a></li>
                                <li><a href="index-op-2.html">Onepage Version Two <span class="badge">New</span></a></li>
                            </ul>
                       
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
@foreach($banner as $data)
    <div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url({{asset('uploads/'.$data->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{$data->heading}}</h1>
                </div>
            </div>
        </div>
    </div>
@endforeach
   

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="breadcrumb">
                       
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                       
                        <li class="active">{{$view->tittle}}</li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Faq 
    ============================================= -->
    <div class="faq-page-area default-padding">
        <div class="container">
            <div class="row">
                <div class="faq-items col-md-12">
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                           {{$view->tittle}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            {{$view->summary}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        
                            <!-- End Single Item -->

                            <div class="col-md-6 form-box">
                                <h2>Comment</h2>
                              

                               <h4 style="color:black"> {{session('message')}}</h4><br>
                                <form action="{{url('comments')}}" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                                <span class="alert-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                                <span class="alert-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
                                                <span class="alert-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group comments">
                                                <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <button type="submit" name="submit" id="submit">Submit
                                               
                                            </button>
                                        </div>
                                    </div>
                                 
                                    <input type="hidden" name="id"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq -->

    <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark">
        <div class="container">
            <div class="footer-content default-padding">
                <div class="row">

                    <div class="equal-height col-md-4 col-sm-6 item">
                        <div class="f-item about">
                            <h4 class="widget-title">About</h4>
                            <p>
                                Required honoured trifling eat pleasure man relati Assurance yet bed was improving furniture man Distrusts delighted services and a high degre tobiscotuition end of imposition.
                            </p>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Usefull Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Classic Business</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Company</h4>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Faq</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-md-4 col-sm-6 item">
                        <div class="f-item contact address">
                            <h4 class="widget-title">Contact Us</h4>
                            @foreach($header as $data)
                            <ul>
                                <li>
                                    <div class="icon"><i class="flaticon-location"></i></div>
                                    <span>{{$data->contact}}</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-call-center"></i>
                                    </div>
                                    <span>{{$data->phone}}  </span>
                                </li>
                                <li>
                                    <div class="icon"><i class="flaticon-email"></i> </div>
                                    <span>{{$data->email}}</span>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Copyrigh &copy; 2021 Buscom, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    
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
<script>
    setTimeout(function(){
       $('.alert').fadeOut('slow');
    }, 4000);
 </script>
</body>
</html>
    <!-- End Footer-->

    <!-- jQuery Frameworks
 