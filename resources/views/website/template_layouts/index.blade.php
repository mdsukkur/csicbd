@extends('website.template_parts.master')

@section('title','Home')


@section('breadcrumb')

    <div class="row">
        <div class="col-md-12">
            <div class="header-slider">


                @if($allSlider->isNotEmpty())
                    @foreach($allSlider as $key => $slider)

                        @php
                            $position = '';
                        @endphp

                        @if($key == 0)
                            @php
                                $position = 'text-left';
                            @endphp
                        @endif

                        @if($key == 1)
                            @php
                                $position = 'text-center';
                            @endphp
                        @endif

                        @if($key == 2)
                            @php
                                $position = 'text-right';
                            @endphp
                        @endif

                        <div class="header-single-slider">
                            <figure>
                                <img src="{{asset("slider/$slider->image")}}" alt="{{$slider->title}}">
                                <figcaption>
                                    <div class="content">
                                        <div class="container inner-content {{$position}}">
                                            <h1>
                                                {{$slider->title ?? ''}}
                                            </h1>
                                            <p>
                                                {{$slider->details ?? ''}}
                                            </p>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                    @endforeach

                @else


                    <div class="header-single-slider">
                        <figure>
                            <img src="{{asset('website/assets/img/homepage/slider/slider01.jpg')}}" alt="">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-left">
                                        <h1>Strengths of Successful Businesses</h1>
                                        <p>Randomised words which don't look even slightly believable. If you are going
                                            to
                                            use a passage of Lorem Ipsum, you need to be sure there isn't anembarrassing
                                            hidden in the middle of text.</p>
                                        <a href="#" class="boxed-btn">Explore More <i
                                                    class="icofont icofont-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="header-single-slider">
                        <figure>
                            <img src="{{asset('website/assets/img/homepage/slider/slider02.jpg')}}" alt="">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-center">
                                        <h1>Strengths of Successful Businesses</h1>
                                        <p>Randomised words which don't look even slightly believable. If you are going
                                            to
                                            use a passage of Lorem Ipsum, you need to be sure there isn't anembarrassing
                                            hidden in the middle of text.</p>
                                        <a href="#" class="boxed-btn">Explore More <i
                                                    class="icofont icofont-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="header-single-slider">
                        <figure>
                            <img src="{{asset('website/assets/img/homepage/slider/slider03.jpg')}}" alt="">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-right">
                                        <h1>Strengths of Successful <br> Businesses</h1>
                                        <p>Randomised words which don't look even slightly believable. If you are going
                                            to
                                            use a passage of Lorem Ipsum, you need to be sure there isn't anembarrassing
                                            hidden in the middle of text.</p>
                                        <a href="#" class="boxed-btn">Explore More <i
                                                    class="icofont icofont-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>


                @endif


            </div>
        </div>
    </div>

@endsection

@section('content')

    <!-- Start: About US ============================= -->
    @include('website.template_parts.about')
    <!-- End: About US ============================= -->


    <!-- Start: Fun Fact ============================= -->
    <section class="my-5" id="fun-fact">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                    <div class="fact-item">
                        <i class="icofont icofont-runner-alt-1"></i>
                        <div><strong><span class="counter">{{$totalUser}}</span></strong></div>
                        <p>Users</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                    <div class="fact-item">
                        <i class="icofont icofont-question"></i>
                        <div><strong><span class="counter">{{$totalQuestion}}</span></strong></div>
                        <p>Questions</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-md-0 mb-4">
                    <div class="fact-item">
                        <i class="icofont icofont-star-shape"></i>
                        <div><strong><span class="counter">{{$totalComplain}}</span></strong></div>
                        <p>Complains</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="fact-item">
                        <i class="icofont icofont-company"></i>
                        <div><strong><span class="counter">{{$totalCompany}}</span></strong></div>
                        <p>Active Company</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Fun Fact ============================= -->


    <!-- Start: Contact Us ============================= -->
    @include('website.template_parts.contact')
    <!-- End: Contact Us ============================= -->

@endsection