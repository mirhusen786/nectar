@extends('Super_Admin.layout')
@section('page_title','Banner Record')
@section('page_heading','Banner Record')
@section('banner_select','active')
@section('container')
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
                  <div class="mbsc-row mbsc-justify-content-center">
                     @if(session('status'))
                     <div class="alert alert-secondary" role="alert">{{session('status')}}</div>
                     @endif
                  </div>
                  <form action="{{$url}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="mbsc-row">
                        <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-3">
                           <label>
                            Titile
                           <input type="text" mbsc-input data-input-style="box" value="{{$banner->title}}" name="title" data-label-style="floating" placeholder="image" required>
                         
                        </label>
                        {{-- <div>
                           @error('name')
                           {{$message}}
                           @enderror
                        </div> --}}

                        </div>
                        <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-3">
                           <label>
                           Sub Heading
                           <input type="text" mbsc-input data-input-style="box" value="{{$banner->sub_heading}}" name="sub_heading" data-label-style="floating" placeholder="Sub Heading" required>
                         
                        </label>
                        
                        </div>

                        <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-3">
                           <label>
                            Button Slug
                           <input type="text" mbsc-input data-input-style="box" value="{{$banner->button_slug}}" name="button_slug" data-label-style="floating" placeholder="Button Slug" required>
                         
                        </label>
                        
                        </div>

                        <div class="mbsc-col-12 mbsc-col-md-6 mbsc-col-lg-3">
                           <label>
                           Banner Image
                           <input type="file" mbsc-input data-input-style="box" value="{{$banner->image}}" name="image" data-label-style="floating" placeholder="image">
                         
                        </label>
                        
                        </div>

                       

                       
                       
                   
                    
                    
                  </div>
                    
                     <div class="mbsc-row">
                        <div class="mbsc-col-12 mbsc-col-md-16 mbsc-col-lg-2">
                           <div class="mbsc-btn-group-block">
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
   </body>
</html>
@endsection