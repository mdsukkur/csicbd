@extends('errors.master')

@section('title','Login')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">

                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <h2 class="font-weight-bold warning">
                                            <img src="{{asset('general/'.($general->icon ?? ''))}}"
                                                 alt="branding logo" height="70px">
                                            {{$general->site_title ?? ''}}
                                        </h2>
                                    </div>

                                </div>
                                <div class="card-content">


                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif


                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                        <span>Using Account Details</span></p>
                                    <div class="card-body">


                                        <form class="form-horizontal" method="POST"
                                              action='{{ route('loginadmin') }}'
                                              aria-label="{{ __('Login') }}">

                                            @csrf

                                            <fieldset class="form-group position-relative has-icon-left">

                                                <input id="phone"
                                                       {{--type="email"--}} class="form-control @error('phone') is-invalid @enderror"
                                                       name="phone" value="{{ old('phone') }}" required
                                                       autocomplete="phone" autofocus
                                                       placeholder="Phone Number without country code">

                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>

                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" required
                                                       autocomplete="current-password"
                                                       placeholder="Enter Your Password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </fieldset>

                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-sm-left">
                                                    <fieldset>
                                                        <input class="form-check-input" type="checkbox"
                                                               name="remember"
                                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary btn-block">
                                                <i
                                                        class="ft-unlock"></i> Login
                                            </button>
                                        </form>

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