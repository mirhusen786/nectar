@extends('Super_Admin.layout')
@section('page_title','Header Record')
@section('page_heading','Header Record')
@section('header_select','active')
@section('container')
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- App favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <!-- DataTables -->
      <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- Responsive datatable examples -->
      <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- Bootstrap Css -->
      <link href="{{asset('assets/csss/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="{{asset('assets/csss/icons.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="{{asset('assets/csss/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css"/>
      {{-- custom css --}}
      <link href="{{asset('custom.css')}}" id="app-style" rel="stylesheet" type="text/css"/>
      <style>
      </style>
   </head>
   <body>

      {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg " style="max-width: 1000px">
    <div class="modal-content">
      <!DOCTYPE html>
      <html>
         <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
            <script>
               // Ignore this in your implementation
               window.isMbscDemo = true;
            </script>
            <title>Responsive form</title>
            <!-- Mobiscroll JS and CSS Includes -->
            <link rel="stylesheet" href="{{asset('assets/css/mobiscroll.javascript.min.css')}}">
            <script src="{{asset('assets/js/mobiscroll.javascript.min.js')}}"></script>
            <style type="text/css">
               body {
               margin: 0;
               padding: 0;
               }
               body,
               html {
               height: 100%;
               }
            </style>
         </head>
         <body>
            <div mbsc-page class="demo-responsive">
               <div style="height:100%">
                  <div mbsc-form class="mbsc-form-grid">
                     <div class="mbsc-grid">
                        <h3 align="center">Header Form</h3>
                        <div class="mbsc-row mbsc-justify-content-center">
                           @if(session('status'))
                           <div class="alert alert-secondary" role="alert">{{session('status')}}</div>
                           @endif
                        </div>
                        <form action="{{$url}}" method="post" enctype="multipart/form-data">
                           @csrf
                           <div class="mbsc-row">
                              <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-4">
                                 <label>
                                  Logo
                                 <input type="file" mbsc-input data-input-style="box"  name="image" data-label-style="floating" placeholder="image" required>
                               
                              </label>
                              {{-- <div>
                                 @error('name')
                                 {{$message}}
                                 @enderror
                              </div> --}}
      
                              </div>
                              <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-4">
                                 <label>
                                  Phone
                                 <input type="text" mbsc-input data-input-style="box"  name="phone" data-label-style="floating" placeholder="phone" required>
                               
                              </label>
                              
                              </div>

                              <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-4">
                                 <label>
                                Alternative  Phone
                                 <input type="text" mbsc-input data-input-style="box"  name="phone1" data-label-style="floating" placeholder="phone" required>
                               
                              </label>
                              
                              </div>
                              <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-4">
                                 <label>
                                  Email
                                 <input type="email" mbsc-input data-input-style="box"  name="email" data-label-style="floating" placeholder="email" required>
                               
                              </label>
                              
                              </div>

                              <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-4">
                                 <label>
                                Alternative  Email
                                 <input type="email" mbsc-input data-input-style="box"  name="email1" data-label-style="floating" placeholder="email" required>
                               
                              </label>
                              
                              </div>
      
                              <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-4">
                                 <label>
                                  Address
                                 <input type="input" mbsc-input data-input-style="box"  name="contact" data-label-style="floating" placeholder="Contact" required>
                               
                              </label>
                              
                              </div>
      
                              <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-4">
                                 <label>
                                 Facebook link
                                 <input type="input" mbsc-input data-input-style="box"  name="facebook" data-label-style="floating" placeholder="Facebook Link" required>
                               
                              </label>
                              
                              </div>
      
                              <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-4">
                                 <label>
                                  Twitter Link
                                 <input type="input" mbsc-input data-input-style="box"  name="twitter" data-label-style="floating" placeholder="Twitter Link" required>
                               
                              </label>
                              
                              </div>
      
                              <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-4">
                                 <label>
                                  Youtube link
                                 <input type="input" mbsc-input data-input-style="box"  name="youtube" data-label-style="floating" placeholder="Youtube Link" required>
                               
                              </label>
                              
                              </div>
                           
                           </div>
                          
                           <div class="mbsc-row">
                              <div class="mbsc-col-12 mbsc-col-md-16 mbsc-col-lg-3">
                                 <div class="mbsc-btn-group-block" style="align-content: center">
                                    <button mbsc-button class="mbsc-btn-success">Save</button>
                                 </div>
                              </div>
                           </div>
                           <input type="hidden" name="id"/>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <script>
               mobiscroll.settings = {
                   lang: 'en',            // Specify language like: lang: 'pl' or omit setting to use default
                   theme: 'ios',          // Specify theme like: theme: 'ios' or omit setting to use default
                   themeVariant: 'light'  // More info about themeVariant: https://docs.mobiscroll.com/4-10-9/javascript/forms#opt-themeVariant
               };
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    </div>
  </div>
</div>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <!-- Success message display here -->
                  @if(session()->has('message'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success!</strong>  {{session('message')}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  @endif

                  {{-- Delete msg  display here --}}

                  @if(session()->has('msg'))
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                     <strong>Success!</strong>  {{session('msg')}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  @endif

                 
                  <!-- Success message is closed here -->
                  <a>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Add Header </button>
                  </a>
                  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead>
                        <tr Style="font-size:10px;font-style:bold;background-color:black;color:white;">
                           <th>S.N</th>
                           <th>Logo</th>
                           <th>Email</th>
                           <th>phone</th>
                           <th>Address</th>
                           <th>Faceook Link</th>
                           <th>Twitter Link</th>
                           <th>Gmail Link</th>
                           <th>status</th>
                           <th>Operation</th>
                          
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($header as $key=>$data)
          <tr>
            <td>{{$key+1}}</td>
            <td><img src="{{asset('uploads/'.$data->image)}}" width="100px" height="100px" alt=""></td>
            {{-- <td><img src="{{Storage::disk('uploads')->url($data->image)}}" alt="" width="100px" height="100px"></td> --}}
            <td>{{$data['email']}}</td>
            <td>{{$data['phone']}}</td>
            <td>{{$data['contact']}}</td>
            <td>{{$data['facebook']}}</td>
            <td>{{$data['twitter']}}</td>
            <td>{{$data['youtube']}}</td>
         
            <td>
               @if($data->status==1)
               <a href="{{url('header/status/0')}}/{{$data->id}}">
                  <button type="button" class="btn btn-success" style="background-color: green">Active</button>
                   </a>
            @elseif($data->status==0)
                  <a href="{{url('header/status/1')}}/{{$data->id}}">
                  <button type="button" class="btn btn-danger" style="background-color:red">Deactive</button>
                   </a>
           
                    @endif
               </td>
                           <td>
                              <a href="{{url('header/Edit/')}}/{{$data->id}}"> <i class="fas fa-edit"></i> </a>
                              &nbsp;  &nbsp;
                              <a href="{{url('header/Delete')}}/{{$data->id}}"> <i class="fas fa-trash"></i> </a> 
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      </div> <!-- container-fluid -->
      </div>
      <!-- end main content-->
      </div>
      <!-- END layout-wrapper -->
      <!-- Right bar overlay-->
      <div class="rightbar-overlay"></div>
      <!-- JAVASCRIPT -->
      <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
      <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
      <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
      <script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
      <!-- Required datatable js -->
      <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <!-- Buttons examples -->
      <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
      <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
      <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
      <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
      <!-- Responsive examples -->
      <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
      <!-- Datatable init js -->
      <script src="{{asset('assets/jss/pages/datatables.init.js')}}"></script>
      <!-- App js -->
      <script src="{{asset('assets/jss/app.js')}}"></script>
      <script>
         setTimeout(function(){
            $('.alert').fadeOut('slow');
         }, 2000);
      </script>
     
   </body>
</html>
@endsection