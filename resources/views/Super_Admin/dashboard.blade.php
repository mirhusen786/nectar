@extends('Super_Admin/layout')
@section('page_title','Dashboard')
@section('dashboard_select','active')
@section('container')
<div class="row">
   <div class="col-xl-3 col-md-2 mb-2">
      <div class="card border-left-primary shadow h-100 py-4">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-20">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-4">&nbsp &nbsp &nbsp&nbsp 
                     Credit Limit
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-black-800 align-items-center">
                     &nbsp &nbsp 
                     <i class="fas fa-rupee-sign"></i> 
                     <?Php
                        echo"mirhusen";
                        
                                     ?>
                  </div>
               </div>
               <div class="col-auto">
                  <i class="fas fa-hand-holding-usd fa-3x"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
   {{-- total send       --}}
   <div class="col-xl-3 col-md-2 mb-2">
      <div class="card border-left-primary shadow h-100 py-4">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-20">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-4">&nbsp &nbsp &nbsp &nbsp 
                     Cash Available
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-black-800 align-items-center">
                     &nbsp &nbsp 
                     <i class="fas fa-rupee-sign"></i> 
                     <?Php
                        ?>
                  </div>
               </div>
               <div class="col-auto">
                  <i class="fas fa-hand-holding-usd fa-3x"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-md-2 mb-2">
      <div class="card border-left-primary shadow h-100 py-4">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-20">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-4">&nbsp &nbsp 
                     Total Send Amount
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-black-800 align-items-center">
                     &nbsp &nbsp 
                     <i class="fas fa-rupee-sign"></i> 
                     <?Php
                        ?>
                  </div>
               </div>
               <div class="col-auto">
                  <i class="fas fa-hand-holding-usd fa-3x"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-md-2 mb-2">
      <div class="card border-left-primary shadow h-100 py-4">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-20">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-4"> &nbsp  &nbsp 
                     Total Paid Amount
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-black-800 align-items-center">
                     &nbsp &nbsp 
                     <i class="fas fa-rupee-sign"></i> 
                     <?Php
                        ?>
                  </div>
               </div>
               <div class="col-auto">
                  <i class="fas fa-hand-holding-usd fa-3x"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<br><br>

<br><br><br><br>
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
{{-- ending pagination content here --}}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
</body>
</html>
@endsection