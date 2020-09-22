<section id="header-top">
    <div class="container">

        <div class="row">
            <div class="col-lg-7 col-md-7 text-md-left text-center mb-lg-0 mb-1">
                <ul class="header-social d-inline-block">

                    @if(($general->facebook ?? null) != null)

                        <li><a href="{{$general->facebook ?? ''}}"><i class="icofont icofont-social-facebook"></i></a>
                        </li>

                    @endif
                    @if(($general->twitter ?? null) != null)

                        <li><a href="{{$general->twitter ?? ''}}"><i class="icofont icofont-social-twitter"></i></a>
                        </li>

                    @endif
                    @if(($general->linkedin ?? null) != null)

                        <li><a href="{{$general->linkedin ?? ''}}"><i class="icofont icofont-social-linkedin"></i></a>
                        </li>

                    @endif
                </ul>
                <div class="address d-inline-block"><i class="icofont icofont-social-google-map"></i>
                    {{$general->address ?? ''}}
                </div>
            </div>
            <div class="col-lg-5 col-md-5 text-center text-md-right">
                <div class="email d-inline-block">
                    <a href="mailto:{{$general->email_1 ?? ''}}" target="_top"><i class="fa fa-envelope-o mr-2"></i>Quick
                        Email</a>
                </div>
                <div class="phone d-inline-block">
                    <i class="fa fa-phone mr-2"></i>
                    {{$general->phone_1 ?? ''}}{{$general->phone_2 ?? ''}}
                </div>
            </div>
        </div>
    </div>
</section>