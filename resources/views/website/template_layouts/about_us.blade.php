@extends('website.template_parts.master')

@section('title','About US')

@section('breadcrumb')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>About US</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">About US</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')

    @include('website.template_parts.about')

@endsection