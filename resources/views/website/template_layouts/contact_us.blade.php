@extends('website.template_parts.master')

@section('title','Contact US')

@section('breadcrumb')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Contact US</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Contact US</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')

    @if($officeAddress->isNotEmpty())

        <section id="contact-us-page">
            <div class="container">

                <div class="row">

                    @foreach($officeAddress as $address)

                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-lg-0 mb-5">
                            <div class="office">
                                <i class="icon icofont icofont-location-pin"></i>
                                <h4>
                                    {{$address->title ?? '--'}}
                                </h4>
                                <ul>
                                    <li>Street : {{$address->Street ?? '--'}}</li>
                                    <li>City : {{$address->city ?? '--'}}</li>
                                    <li>Zip Code : {{$address->zip_code}}</li>
                                </ul>
                                <ul class="contact-social">

                                    @if(($address->facebook ?? null) != null)

                                        <li><a href="{{$address->facebook ?? null}}" target="_blank"><i
                                                        class="icofont icofont-social-facebook"></i></a></li>

                                    @endif

                                    @if(($address->twitter ?? null) != null)

                                        <li><a href="{{$address->twitter ?? null}}" target="_blank"><i
                                                        class="icofont icofont-social-twitter"></i></a></li>

                                    @endif

                                    @if(($address->linkedin ?? null) != null)

                                        <li><a href="{{$address->linkedin ?? null}}" target="_blank"><i
                                                        class="icofont icofont-social-linkedin"></i></a></li>

                                    @endif
                                </ul>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
        </section>

    @endif


    @include('website.template_parts.contact')

@endsection