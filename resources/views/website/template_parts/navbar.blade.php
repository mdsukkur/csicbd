<!-- Navigation Starts -->
<div class="navbar-area sticky-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="logo main">
                    <a href="{{url('/')}}">

                        @if(($general->logo ?? null) != null)


                            <img class="responsive" src="{{asset('general/'.($general->logo ?? null))}}"
                                 alt="{{($general->site_title ?? null)}}">

                        @else

                            <img class="responsive" src="{{asset('website/assets/img/logo.png')}}"
                                 alt="Startkit">

                        @endif
                    </a>
                </div>
            </div>

            <!-- Nav -->
            <div class="col-lg-9 d-none d-lg-block">
                <nav class="text-right main-menu">
                    <ul>
                        <li class="@if(request()->path() == '/') {{'active'}} @endif">
                            <a href="{{url('/')}}">Home</a>
                        </li>

                        <li class="@if(request()->path() == 'About') {{'active'}} @endif">
                            <a href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="@if(request()->path() == 'Contact') {{'active'}} @endif">
                            <a href="{{route('contact')}}">Contact Us</a>
                        </li>

                        @if(!is_null(\Illuminate\Support\Facades\Auth::id()))

                            @if(request()->path() != 'MyAccount')

                                <li>
                                    <a href="{{url('MyAccount/#tab-2')}}">
                                        শেয়ার জিজ্ঞাসা
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('MyAccount/#tab-3')}}">Complain</a>
                                </li>

                            @endif

                            <li class="@if(request()->path() == 'MyAccount') {{'active'}} @endif">
                                <a href="{{route('myaccount')}}">My Account</a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                        @else

                            <li class="@if(request()->path() == 'login') {{'active'}} @endif">
                                <a href="{{url('login')}}">Signin</a>
                            </li>

                            <li class="@if(request()->path() == 'register') {{'active'}} @endif">
                                <a href="{{url('register')}}">Signup</a>
                            </li>

                        @endif


                        <li class="@if(request()->path() == 'term&condition') {{'active'}} @endif">
                            <a href="{{route('term&condition')}}">Term & Condition</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <!-- Nav End -->


        </div>
    </div>

    <!-- Start Mobile Menu -->
    <div class="mobile-menu-area d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav class="mobile-menu-active">
                            <ul>
                                <li class="@if(request()->path() == '/') {{'active'}} @endif">
                                    <a href="{{url('/')}}">Home</a>
                                </li>

                                <li class="@if(request()->path() == 'About') {{'active'}} @endif">
                                    <a href="{{route('about')}}">About Us</a>
                                </li>
                                <li class="@if(request()->path() == 'Contact') {{'active'}} @endif">
                                    <a href="{{route('contact')}}">Contact Us</a>
                                </li>

                                @if(!is_null(\Illuminate\Support\Facades\Auth::id()))

                                    @if(request()->path() != 'MyAccount')

                                        <li>
                                            <a href="{{url('MyAccount/#tab-2')}}">
                                                শেয়ার জিজ্ঞাসা
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{url('MyAccount/#tab-3')}}">Complain</a>
                                        </li>

                                    @endif

                                    <li class="@if(request()->path() == 'MyAccount') {{'active'}} @endif">
                                        <a href="{{route('myaccount')}}">My Account</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                @else

                                    <li class="@if(request()->path() == 'login') {{'active'}} @endif">
                                        <a href="{{url('login')}}">Signin</a>
                                    </li>

                                    <li class="@if(request()->path() == 'register') {{'active'}} @endif">
                                        <a href="{{url('register')}}">Signup</a>
                                    </li>

                                @endif


                                <li class="@if(request()->path() == 'term&condition') {{'active'}} @endif">
                                    <a href="{{route('term&condition')}}">Term & Condition</a>
                                </li>

                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Menu -->
</div>
<!-- Navigation End -->

<!-- Header Slider -->

