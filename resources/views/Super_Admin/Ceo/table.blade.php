@extends('Super_Admin.layout')
@section('page_title','Ceo Record')
@section('page_heading','Ceo Record')
@section('ceo_select','active')
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
                  <a href="{{url('ceo/form')}}">
                  <button type="button" class="btn btn-success">Add Ceo Overview</button>
                  </a>
                  
                  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead>
                        <tr Style="font-size:10px;font-style:bold;background-color:black;color:white;">
                           <th>S.N</th>
                           <th>Name</th>
                           <th>Level</th>
                           <th>Title</th>
                           <th>Overview</th>
                           <th>Image 1</th>
                           <th>Image 2</th>
                          <th>Signature</th>
                          <th>status</th>
                          <th>Operation</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($ceo as $data)
          <tr>
            <td>{{$data['id']}}</td>
           
            <td>{{$data['name']}}</td>
            <td>{{$data['level']}}</td>
            <td>{{$data['title']}}</td>
            <td>{{$data['summary']}}</td>

            <td><img src="{{asset('uploads/'.$data->image2)}}" width="100px" height="100px" alt=""></td>
            <td><img src="{{asset('uploads/'.$data->image3)}}" width="100px" height="100px" alt=""></td>
            <td><img src="{{asset('uploads/'.$data->image1)}}" width="100px" height="100px" alt=""></td>
       
            {{-- <td><img src="{{Storage::disk('uploads')->url($data->image2)}}" alt="" width="100px" height="100px"></td> --}}
            {{-- <td><img src="{{Storage::disk('uploads')->url($data->image3)}}" alt="" width="100px" height="100px"></td>
            <td><img src="{{Storage::disk('uploads')->url($data->image1)}}" alt="" width="100px" height="100px"></td> --}}
           
         
            <td>
               @if($data->status==1)
               <a href="{{url('ceo/status/0')}}/{{$data->id}}">
                  <button type="button" class="btn btn-success" style="background-color: green">Active</button>
                   </a>
            @elseif($data->status==0)
                  <a href="{{url('ceo/status/1')}}/{{$data->id}}">
                  <button type="button" class="btn btn-danger" style="background-color:red">Deactive</button>
                   </a>
           
                    @endif
               </td>
                           <td>
                              <a href="{{url('ceo/Edit/')}}/{{$data->id}}"> <i class="fas fa-edit"></i> </a>
                              &nbsp;  &nbsp;
                              <a href="{{url('ceo/Delete')}}/{{$data->id}}"> <i class="fas fa-trash"></i> </a> 
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
   </body>
</html>
@endsection