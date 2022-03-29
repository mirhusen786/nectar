

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
                            @foreach($header as $data)
                            <li>
                                <a href="{{$data->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{$data->twitter}}"><i class="fab fa-twitter"></i></a>
                            </li>
                           
                           
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-md-2 col-sm-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Usefull Links</h4>
                        <ul>
                            @foreach($footer as $data)
                            <li>
                                <a href="{{$data->slug}}">{{$data->menu_name}}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-md-2 col-sm-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Company</h4>
                        <ul>
                            @foreach($footer as $data)
                            <li>
                                <a href="{{$data->slug}}">{{$data->menu_name}}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-md-4 col-sm-6 item">
                    <div class="f-item contact address">
                        @foreach($header as $data)
                        <h4 class="widget-title">Contact Us</h4>
                        <ul>
                            <li>
                                <div class="icon"><i class="flaticon-location"></i></div>
                                <span>{{$data->contact}}</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-call-center"></i>
                                </div>
                                <span>{{$data->phone}} <br>{{$data->phone1}} </span>
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
<!-- End Footer-->

