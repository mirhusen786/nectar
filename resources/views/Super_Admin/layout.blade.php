
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  @yield('page_title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
  <style>
    .navbar .navbar-brand {
    text-transform: uppercase;
    font-size: 15px;}

    .navbar a.dropdown-item {
      text-align: center;
    color: black;
    font-size: 17px;
    padding:0px;
    font-family: bold;
}
   

  </style>
</head>

<body class="">

  <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal">
  Launch demo modal
</button> --}}


  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li  class="@yield('dashboard_select')">
            <a href="{{url('dashboard')}}">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="@yield('header_select')">
            <a href="{{url('header')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Header Details</p>
            </a>
          </li>
           
          

          <li class="@yield('banner_select')">
            <a href="{{url('banner')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Banner Details</p>
            </a>
          </li>

          <li class="@yield('service_select')">
            <a href="{{url('service')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Service Details</p>
            </a>
          </li>

          <li class="@yield('team_select')">
            <a href="{{url('team')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Team Details</p>
            </a>
          </li>

          <li class="@yield('news_select')">
            <a href="{{url('news')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>News Details</p>
            </a>
          </li>

          <li class="@yield('comment_select')">
            <a href="{{url('comment')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Comment Details</p>
            </a>
          </li>

          <li class="@yield('ceo_select')">
            <a href="{{url('ceo')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Ceo Details</p>
            </a>
          </li>

          <li class="@yield('menu_select')">
            <a href="{{url('menu')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Menu Details</p>
            </a>
          </li>

          <li class="@yield('footer_select')">
            <a href="{{url('footer')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Footer Details</p>
            </a>
          </li>

         

          

         

          {{-- <li class="nav-item dropdown @yield('employee_select')">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Employee
            
            <i class="now-ui-icons users_single-02"></i>
             
            </a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{url('employeed')}}">Employee Details </a>
              <a class="dropdown-item"  href="{{url('employees')}}">Employee Salary</a>
              <a class="dropdown-item"  href="{{url('employeea')}}">Employee Attendance</a>
            
            </div>
          </li> --}}

          {{-- <li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
         
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">@yield('page_heading')</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
          
            <ul class="navbar-nav">
            <li><a href="" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-calculator"></i></a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{url('signout')}}">logout</a>
                  <a class="dropdown-item" href="{{url('password')}}">Change Password</a>
                  
                </div>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               
@section('container')

@show


              </div>
              <div class="card-body all-icons">
                <div class="row">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets/demo/demo.js')}}"></script>
</body>

</html>