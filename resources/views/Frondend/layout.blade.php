
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buscom - Multipurpose Business and Corporate Template">

    <!-- ========== Page Title ========== -->
    @foreach($header as $data)
    <title>{{$data->tittle}}</title>
@endforeach
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
    <!-- Start Header Top 
    ============================================= -->

    <!-- Header 
    ============================================= -->
   
    

     <!-- Start Banner 
    ============================================= -->
   
    <div class="banner-area">
        <div id="bootcarousel" class="carousel inc-top-heading slide animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
          
            <div class="carousel-inner text-light carousel-zoom">
                 @foreach($banner as $data)
                 @if($data->id==1)
                <div class="item active bg-cover" style="background-image: url({{asset('uploads/'.$data->image)}});">
                    {{-- <td><img src="{{asset('uploads/'.$data->image)}}" width="100px" height="100px" alt=""></td> --}}
                    {{-- <div class="item bg-cover" style="background-image: url(assets/img/2440x1578.png);"> --}}
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="content">
                                                <h3 data-animation="animated slideInRight"> <span>{{$data->sub_heading}}</span></h3>
                                                <h2 data-animation="animated slideInLeft"><strong>{{$data->title}}</strong></h2>
                                                {{-- <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="{{$data->button_slug}}">Our Services</a> --}}
                                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{$data->button_slug}}">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="item bg-cover" style="background-image: url({{asset('uploads/'.$data->image)}});">
                        {{-- <td><img src="{{asset('uploads/'.$data->image)}}" width="100px" height="100px" alt=""></td> --}}
                        {{-- <div class="item bg-cover" style="background-image: url(assets/img/2440x1578.png);"> --}}
                            <div class="box-table shadow dark">
                                <div class="box-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="content">
                                                    <h3 data-animation="animated slideInRight"> <span>{{$data->sub_heading}}</span></h3>
                                                    <h2 data-animation="animated slideInLeft"><strong>{{$data->title}}</strong></h2>
                                                    {{-- <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="{{$data->button_slug}}">Our Services</a> --}}
                                                    <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{$data->button_slug}}">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    
                </div>

            <!-- Left and right controls -->
            <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
      
    </div>

    <!-- End Banner -->
    <!-- Start Our About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start About Content -->

                @foreach($ceo as $data)
                <div class="about-content content-left">
                    <div class="col-md-6 info">
                        <h2>{{$data->title}}</h2>
                        <p>
                           {{$data->summary}}
                        </p>
                        <ul>
                         
                        </ul>
                        <div class="author">
                            <div class="content">
                                <div class="thumb">
                                    <img src="{{asset('uploads/'.$data->image2)}}" alt="Thumb">
                                    {{-- <img src="{{Storage::disk('uploads')->url($data->image2)}}" alt="Thumb"> --}}
                                </div>
                                <div class="info">
                                    <h4>{{$data->name}}</h4>
                                    <span>{{$data->level}}</span>
                                </div>
                            </div>
                            <div class="signature">
                                <img src="{{asset('uploads/'.$data->image1)}}" alt="Thumb">
                                {{-- <img src="{{Storage::disk('uploads')->url($data->image1)}}" alt="signature"> --}}
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 thumb">
                        {{-- <img src="{{Storage::disk('uploads')->url($data->image2)}}" alt="Thumb"> --}}
                        <img src="{{asset('uploads/'.$data->image2)}}" alt="Thumb">
                        {{-- <img src="{{Storage::disk('uploads')->url($data->image3)}}" alt="Thumb"> --}}
                        <img src="{{asset('uploads/'.$data->image3)}}"  alt="Thumb">
                    </div>
                </div>
                <!-- End About -->
@endforeach


            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start Our Services
    ============================================= -->
    <div class="modern-services-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Our services list</h4>
                        <h2>What we’re offering</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-box text-center">
                    <!-- Single Item -->

                    @foreach($service as $data)
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="{{$data->icon_slug}}"></i>
                            </div>
                            <div class="content">
                                <h4>{{$data->title}}</h4>
                                <p>
                                    {{$data->info}}
                                </p>
                                <a href="{{$data->button_slug}}">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                  
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->

    <!-- Start Why Choose Us
    ============================================= -->
    {{-- <div class="choose-us-area default-padding">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="assets/img/building-bg.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row item-flex center">
                <div class="col-md-6 thumb">
                    <div class="thumb-box">
                        <img src="assets/img/800x800.png" alt="Thumb">
                        <img src="assets/img/800x600.png" alt="Thumb">
                    </div>
                </div>
                <div class="col-md-6 info">
                    <div class="content">
                        <h4>Why Choose Us</h4>
                        <h2>Every people trust on us <br> for fast services</h2>
                        <p>
                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting. 
                        </p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-solution"></i>
                                </div>
                                <div class="info">
                                    <h4>Creative Idea</h4>
                                    <p>
                                        Onsulted up my tolerably sometimes perpetual process. Expression acceptance imprudence particular had eat unsatiable awlays agree with pioint.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-analytics"></i>
                                </div>
                                <div class="info">
                                    <h4>Business Growth</h4>
                                    <p>
                                        Onsulted up my tolerably sometimes perpetual process. Expression acceptance imprudence particular had eat unsatiable awlays agree with pioint.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us --> --}}

    <!-- Start Fun Fact Area 
    ============================================= -->
    <div class="fun-factor-box bg-dark text-center text-light default-padding">
        <div class="fun-fact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 item">
                        <div class="fun-fact">
                            <div class="content">
                                <div class="timer" data-to="300008" data-speed="50000">38</div>
                                <span class="medium">Employees</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 item">
                        <div class="fun-fact">
                            <div class="content">
                                <div class="timer" data-to="2348" data-speed="5000">2348</div>
                                <span class="medium">Projects with 100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 item">
                        <div class="fun-fact">
                            <div class="content">
                                <div class="timer" data-to="43" data-speed="5000">43</div>
                                <span class="medium">Award</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 item">
                        <div class="fun-fact">
                            <div class="content">
                                <div class="timer" data-to="50" data-speed="5000">50</div>
                                <span class="medium">Services</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Fact Area -->

    <!-- Star Team Area
    ============================================= -->
    <div class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Our Experts</h4>
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="team-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    @foreach($team as $data)
                    @if($data->status==1)
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb"> <a href="{{url('team/detail')}}/{{$data->name}}">
                                <img src="{{asset('uploads/'.$data->image)}}" alt="Thumb">
                              </a>
                                <ul class="social">
                                    <li class="facebook">
                                        <a href="{{$data->facebook}}">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="{{$data->twitter}}">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="behance">
                                        <a href="{{$data->linkdin}}">
                                            <i class="fab fa-behance"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <div class="inner">
                                    <h4>{{$data->name}}</h4>
                                    <span>{{$data->level}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    @endif
                    @endforeach
                    <!-- End Single Item -->

                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Star Blog Area
    ============================================= -->
    <div class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Our Blog</h4>
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                   
                    <!-- Single Item -->
                    @foreach($news as $data)
                    @if($data->status==1)
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    {{-- <img src="{{asset('uploads/'.$data->image)}}" alt="Thumb"> --}}
                                    {!!$data['image']!!}
                                    {{-- <img src="{{Storage::disk('uploads')->url($data->image)}}" alt="Thump"> --}}
                                    <div class="post-date">
                                        27 Apr
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <a href="{{url('news')}}/{{$data->id}}">{{$data->category}}</a>
                                </div>
                                <h4>
                                    <a href="{{url('news')}}/{{$data->id}}">{{$data->tittle}}</a>
                                </h4>
                                <p>
                                   {{$data->summary}}
                                </p>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li>
                                      
                                        <a href="#">  <img src="{{asset('uploads/'.$data->auth_image)}}" alt="Thumb">{{$data->auth_name}}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 15 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @else
                    @endif
                    @endforeach
                    <!-- End Single Item -->
                  
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding-top bottom-half">
        <div class="container">
            <div class="contact-items">
               @foreach($header as $data)
               @if($data->status==1)
                <div class="row">
                    <div class="col-md-6 address">
                        <div class="address-items text-center text-light" style="background-image: url(assets/img/800x800.png);">
                            <ul class="info">
                                <li>
                                    <div class="icon"><i class="flaticon-location"></i></div> 
                                    <h4>Office Location</h4>
                                    <span>{{$data->contact}}</span>
                                </li>
                                <li>
                                    <div class="icon"><i class="flaticon-call-center"></i></div>
                                    <h4>Phone</h4>
                                    <span>{{$data->phone}} <br>{{$data->phone1}}</span>
                                </li>
                                <li>
                                    <div class="icon"><i class="flaticon-email"></i> </div>
                                    <h4>Email</h4>
                                    <span>{{$data->email}}<br>{{$data->email1}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @else
                   
                    @endif
                    @endforeach
                    <div class="col-md-6 form-box">
                        <h2>Let's lalk about your idea</h2>
                        <p>
                            Our next drew much you with rank. Tore many held age hold rose than our. She literature sentiments any contrasted. Set aware joy sense young now tears china shy. 
                        </p>

                       <h3 align="center" style="font-family:bold" class="alert"> {{session('msg')}}</h3>
                        <form action="insert" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comment" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.5703782332275!2d85.31021321498768!3d27.69967038279509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1918e77a958d%3A0x8adb3649babf6b7e!2sNectar%20Digit%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1648529407496!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->

 
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