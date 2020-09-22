@extends('website.template_parts.master')

@section('title','Term & Service')

@section('breadcrumb')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Term & Service</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Term & Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <section id="about-us" class="mb-3 section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    {!! html_entity_decode(($term['content'] ?? ''))  !!}
                </div>

            </div>
        </div>
    </section>

@endsection