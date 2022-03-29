
<div class="top-bar-area">
    <div class="container">
        <div class="row">
             @foreach($header as $data)
            <div class="col-md-3 logo">
                <a href="/">
                    {{-- <img src="{{Storage::disk('uploads')->url($data->image)}}" alt="Logo" class="logo" > --}}
                    <img src="{{asset('uploads/'.$data->image)}}"  alt="logo">
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






