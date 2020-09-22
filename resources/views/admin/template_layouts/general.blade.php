@extends('admin.template_parts.master')

@section('title','General Setting')

@section('css')
    <style>
        .updateAll {
            position: absolute;
            left: 70%;
            margin: -19px 0;
        }
    </style>
@endsection

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">General Setting</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">General Setting</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">


                @if(is_null($general))

                    <form action="{{route('general.store')}}" method="post" enctype="multipart/form-data">

                @else

                    <form action="{{route('general.update',($general->id ?? ''))}}" method="post"
                          enctype="multipart/form-data">

                    @method('PATCH')

                @endif

                    @csrf

                        <div class="col-md-6 offset-3">

                            <div class="form-group">
                                <label>
                                    Site Title :
                                    <span class="danger"> *</span>
                                </label>
                                <input class="form-control" value="{{$general->site_title ?? ''}}"
                                       name="site_title"
                                       required
                                       placeholder="Site Title" autofocus>
                            </div>

                            <div class="form-group">
                                <label>
                                    Logo :
                                    <span class="danger"> *</span>
                                </label>

                                <input type="file"
                                       name="logo"
                                       class="form-control"
                                       onchange="AdminavaliableScreenshot(this)"
                                       @if(is_null($general)) required @endif>

                                @if(($general->logo ?? null) != null)

                                    <img src="{{asset("general/".($general->logo ?? ''))}}"
                                         alt="Bank Transition Slip"
                                         class="img-fluid mt-1 sliderImage"
                                         style="height: 200px;">

                                @else

                                    <img src="#"
                                         alt="Bank Transition Slip"
                                         class="img-fluid mt-1 sliderImage"
                                         style="height: 200px;display: none">

                                @endif

                            </div>

                            <div class="form-group">
                                <label>
                                    Site Icon :
                                    <span class="danger"> *</span>
                                </label>

                                <input type="file"
                                       name="icon"
                                       class="form-control"
                                       onchange="iconM(this)"
                                       @if(is_null($general)) required @endif>

                                @if(($general->icon ?? null) != null)

                                    <img src="{{asset("general/".($general->icon ?? ''))}}"
                                         alt="Bank Transition Slip"
                                         class="img-fluid mt-1 icon"
                                         style="height: 200px;">

                                @else

                                    <img src="#"
                                         alt="Bank Transition Slip"
                                         class="img-fluid mt-1 icon"
                                         style="height: 200px;display: none">

                                @endif

                            </div>

                            <div class="form-group">
                                <label>
                                    Address :
                                    <span class="danger"> *</span>
                                </label>
                                <textarea name="address" class="form-control" required
                                          rows="7" placeholder="Address">{{$general->address ?? ''}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>
                                    Email :
                                    <span class="danger"> *</span>
                                </label>
                                <input type="email" class="form-control" value="{{$general->email_1 ?? ''}}"
                                       name="email_1"
                                       required
                                       placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label>
                                    Optional Email :
                                </label>
                                <input type="email" class="form-control" value="{{$general->email_2 ?? ''}}"
                                       name="email_2"
                                       placeholder="Optional Email">
                            </div>

                            <div class="form-group">
                                <label>
                                    Phone Number :
                                    <span class="danger"> *</span>
                                </label>
                                <input type="tel" class="form-control" value="{{$general->phone_1 ?? ''}}"
                                       name="phone_1"
                                       required
                                       placeholder="Phone Number">
                            </div>

                            <div class="form-group">
                                <label>
                                    Optional Phone :
                                </label>
                                <input type="tel" class="form-control" value="{{$general->phone_2 ?? ''}}"
                                       name="phone_2"
                                       placeholder="Optional Phone Number">
                            </div>

                            <div class="form-group">
                                <label>
                                    Footer Copyright :
                                    <span class="danger"> *</span>
                                </label>
                                <input class="form-control" value="{{$general->copyright ?? ''}}"
                                       name="copyright" required
                                       placeholder="Footer Copyright">
                            </div>

                            <div class="form-group">
                                <label>
                                    Footer Copyright Link :
                                </label>
                                <input class="form-control" value="{{$general->copyright_link ?? ''}}"
                                       name="copyright_link"
                                       placeholder="Footer Copyright Link">
                            </div>

                            <div class="form-group">
                                <label>
                                    Facebook :
                                </label>
                                <input class="form-control" value="{{$general->facebook ?? ''}}"
                                       name="facebook"
                                       placeholder="Facebook">
                            </div>

                            <div class="form-group">
                                <label>
                                    Twitter :
                                </label>
                                <input class="form-control" value="{{$general->twitter ?? ''}}"
                                       name="twitter"
                                       placeholder="Twitter">
                            </div>

                            <div class="form-group">
                                <label>
                                    Linkedin :
                                </label>
                                <input class="form-control" value="{{$general->linkedin ?? ''}}"
                                       name="linkedin"
                                       placeholder="Linkedin">
                            </div>

                            <button type="submit" class="btn btn-danger save_changes float-right mr-5 mb-3">Save
                                Changes
                            </button>

                        </div>

                    </form>

            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script>
        $(document).ready(function () {

        });

        function AdminavaliableScreenshot(input) {
            if (input.files && input.files[0]) {
                $('.sliderImage').show();

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.sliderImage')
                        .attr('src', e.target.result)

                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function iconM(input) {
            if (input.files && input.files[0]) {
                $('.icon').show();

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.icon')
                        .attr('src', e.target.result)

                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
