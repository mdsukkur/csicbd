@extends('website.template_parts.master')

@section('title','Create an Account')

@section('breadcrumb')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Create an Account</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Signup</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{--<div class="card-header">{{ __('Register') }}</div>--}}

                    <div class="card-body get-in-touch">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Full Name :') }}
                                    <span class="danger"> *</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus
                                           placeholder="Enter Your Name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Phone Number :') }}
                                    <span class="danger"> *</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel"
                                           class="form-control @error('phone') is-invalid @enderror" name="phone"
                                           value="{{ old('phone') }}" required autocomplete="phone"
                                           placeholder="Enter Your Phone Number">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <span class="invalid-phone" role="alert">
                                        <strong class="danger"></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    {{ __('E-Mail Address :') }}
                                    <span class="danger"> *</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email"
                                           placeholder="Enter Your Email Address">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Present Address :') }}
                                    <span class="danger"> *</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control @error('address') is-invalid @enderror" name="address"
                                           value="{{ old('address') }}" required autocomplete="address"
                                           placeholder="Must have district & country & postal code">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Password') }}
                                    <span class="danger"> *</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password" placeholder="Enter Your Password">

                                    <span toggle="#password" class="fa fa-fw field-icon toggle-password fa-eye"></span>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Confirm Password') }}
                                    <span class="danger"> *</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password"
                                           placeholder="Confirm Password">
                                    <span toggle="#password-confirm" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary boxed-btn save_changes">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

    <script>
        $(document).ready(function () {

            $('#phone').on("blur", function (e) {
                e.preventDefault();

                phone = $(this).val();

                $.ajax({
                    type: "post",
                    url: "{{url('numberCheck')}}",
                    data: {
                        'phone': phone,
                    },
                    beforeSend: function () {
                        $('.loader').show();

                    },
                    complete: function () {
                        $('.loader').hide();

                    },
                    success: function (response) {

                        if (response == 'false') {

                            $('.invalid-phone strong').text('Already Taken');
                            $('.save_changes').prop('disabled', true);

                        } else {

                            $('.invalid-phone strong').text('');
                            $('.save_changes').prop('disabled', false);

                        }

                    },
                    error: function (response) {

                        swal({
                            title: "Something wrong! Please check again",
                            icon: "warning"
                        }).then(function () {
                            location.reload();
                        });

                    }

                });

            });

        })
    </script>

@endsection
