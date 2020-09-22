@extends('errors.master')

@section('title','404 Error')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 p-0">
                            <div class="card-header bg-transparent border-0">
                                <h2 class="error-code text-center mb-2">404</h2>
                                <h3 class="text-uppercase text-center">Page Not Found !</h3>
                            </div>
                            <div class="card-content">
                                <div class="row py-2">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <a href="{{ url()->previous() }}
                                                " class="btn btn-primary btn-block"><i class="ft-home"></i>
                                            Go Back</a>
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