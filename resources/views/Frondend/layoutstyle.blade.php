@include('Frondend.header')
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

@section('container')

 @show
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