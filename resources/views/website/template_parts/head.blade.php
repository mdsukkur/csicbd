<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('website/assets/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('website/demo/demo.css')}}">

<!-- COLORS | CURRENTLY USED DIFFERENTLY TO SWITCH FOR DEMO. IN ORIGINAL FILE ALL COLORS AVAILABLE IN COLORS FOLDER -->
<link rel="stylesheet" href="{{asset('website/assets/css/colors/default.css')}}" title="default">
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default1.css')}}" title="default1">--}}
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default2.css')}}" title="default2">--}}
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default3.css')}}" title="default3">--}}
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default4.css')}}" title="default4">--}}
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default5.css')}}" title="default5">--}}
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default6.css')}}" title="default6">--}}
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default7.css')}}" title="default7">--}}
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default8.css')}}" title="default8">--}}
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default9.css')}}" title="default9">--}}
{{--<link rel="alternate stylesheet" href="{{asset('website/assets/css/colors/default10.css')}}" title="default10">--}}
<link rel="stylesheet" href="{{asset('admin/app-assets/vendors/css/extensions/sweetalert.css')}}">



@yield( 'css' )

<style>
    .select2 {
        width: 100% !important;
    }
</style>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->