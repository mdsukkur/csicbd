<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if(($general->icon ?? null) == null)

        <link rel="shortcut icon" href="{{asset('website/assets/img/favicon.png')}}" type="image/x-icon"/>

    @else

        <link rel="shortcut icon" href="{{asset("general/".($general->icon ?? ''))}}" type="image/x-icon"/>

    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$general->site_title ?? ''}} - @yield('title') </title>

    @include('website.template_parts.head')

</head>

<body>

<!-- Start: Preloader ============================= -->

<!--<div class="preloader">
    <div class="loader"></div>
</div>-->

<!-- End: Preloader ============================= -->


<!-- Start: Header Top ============================= -->

@include('website.template_parts.headerTop')

<!-- End: Header Top ============================= -->


<!-- Start: Header ============================= -->
<header id="header">

    @include('website.template_parts.navbar')

    @yield('breadcrumb')

</header>

<!-- End: Header ============================= -->


@yield('content')


<!-- Start: Footer Copyright ============================= -->

@include('website.template_parts.footer')

<!-- End: Footer Copyright ============================= -->

@include('website.template_parts.scripts')

</body>


<!-- Mirrored from nayrathemes.com/demo/html/startkit/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2019 07:19:11 GMT -->
</html>