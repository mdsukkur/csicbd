@extends('admin.template_parts.master')

@section('title','Settings')

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
                    <h3 class="content-header-title mb-0">Settings</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Settings</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="primary">Edit Profile</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <form method="post" action="{{url('editInfo')}}">
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-6 offset-3 form-group">
                                                    <label>Name :
                                                        <span class="danger"> *</span>
                                                    </label>
                                                    <input required name="name" class="form-control"
                                                           value="{{Auth::guard('admin')->user()->name ?? ''}}">
                                                </div>

                                                <div class="col-md-6 offset-3 form-group">
                                                    <label>Email :
                                                        <span class="danger"> *</span>
                                                    </label>
                                                    <input type="email" required name="email" class="form-control"
                                                           value="{{Auth::guard('admin')->user()->email ?? ''}}">
                                                </div>

                                                <div class="col-md-6 offset-3 form-group">
                                                    <label>Phone :
                                                        <span class="danger"> *</span>
                                                    </label>
                                                    <input type="tel" required name="phone" class="form-control"
                                                           value="{{Auth::guard('admin')->user()->phone ?? ''}}">
                                                </div>

                                                <div class="col-md-6 offset-3">
                                                    <button type="submit" class="btn btn-danger save_changes">Submit
                                                    </button>
                                                </div>


                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="primary">Change Password</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <div class="oldPassSection">

                                            <div class="col-md-4 offset-3 form-group">
                                                <label>Old Password
                                                    <span class="danger"> *</span>
                                                </label>
                                                <input type="password" name="old_password" id="old_password"
                                                       class="form-control"
                                                       placeholder="Old Password">
                                                <span toggle="#old_password"
                                                      class="fa fa-fw field-icon toggle-password fa-eye"></span>
                                            </div>

                                            <div class="col-md-4 offset-3">
                                                <button type="button" class="btn btn-danger" id="oldPassSubmit">Submit
                                                </button>
                                            </div>

                                        </div>

                                        <div class="newPassSection" style="display: none">

                                            <div class="col-md-4 offset-3 form-group">
                                                <label>New Password
                                                    <span class="danger"> *</span>
                                                </label>
                                                <input type="password" class="form-control" id="password"
                                                       name="password"
                                                       placeholder="New Password">
                                                <span toggle="#password"
                                                      class="fa fa-fw field-icon toggle-password fa-eye"></span>
                                            </div>

                                            <div class="col-md-4 offset-3 form-group">
                                                <label>Confirm Password
                                                    <span class="danger"> *</span>
                                                </label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation"
                                                       placeholder="Confirm Password">
                                                <span toggle="#password-confirm"
                                                      class="fa fa-fw field-icon toggle-password fa-eye"></span>
                                            </div>

                                            <div class="col-md-4 offset-3">
                                                <button type="button" class="btn btn-danger" id="newPassSubmit">Submit
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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
    </script>
@endsection
