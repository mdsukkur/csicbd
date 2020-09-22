<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$general->site_title ?? ''}} | @yield('title') </title>


    <link rel="apple-touch-icon" href="{{asset("general/".($general->icon ?? ''))}}">
    <link rel="shortcut icon" type="image/x-icon"
          href="{{asset("general/".($general->icon ?? ''))}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">


    @include('admin.template_parts.head')


    @yield('css')

</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">


<!--<div class="loader" id="loader">-->
<!--    <img src="{{asset('loader.gif')}}">-->
<!--</div>-->


@include('admin.template_parts.topbar')


@include('admin.template_parts.sidebar')


@yield('content')


@include('admin.template_parts.footer')


@include('admin.template_parts.scripts')


@yield('scripts')

<script>
    $(document).ready(function () {

        // window.onload = function () {

        //     $('#loader').fadeOut(500, function () {
        //         $('#loader').remove();
        //     });

        // }

    })

</script>

</body>
</html>