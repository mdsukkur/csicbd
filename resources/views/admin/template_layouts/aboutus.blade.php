@extends('admin.template_parts.master')

@section('title','About US')

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
                    <h3 class="content-header-title mb-0">About US Management</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">About US Management</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">


                @if(is_null($aboutus))

                    <form action="{{route('aboutus.store')}}" method="post" enctype="multipart/form-data">

                        @else

                            <form action="{{route('aboutus.update',($aboutus->id ?? ''))}}" method="post"
                                  enctype="multipart/form-data">

                                @method('PATCH')

                                @endif

                                @csrf

                                <div class="col-md-6 offset-3">

                                    <div class="form-group">
                                        <label>
                                            Title :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input class="form-control" value="{{$aboutus->title ?? ''}}" name="title"
                                               required
                                               placeholder="Title" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Short Description :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input class="form-control" name="short_desc"
                                               value="{{$aboutus->short_desc ?? ''}}"
                                               required
                                               placeholder="Short Description">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Main Description :
                                        </label>
                                        <textarea name="details" rows="10" class="form-control"
                                                  placeholder="Description"
                                                  required>{{$aboutus->details ?? ''}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Slider Image :
                                        </label>

                                        <input type="file"
                                               name="image"
                                               class="form-control"
                                               onchange="AdminavaliableScreenshot(this)"
                                               @if(is_null($aboutus)) required @endif>

                                        @if(($aboutus->image ?? null) != null)

                                            <img src="{{asset("aboutus/".($aboutus->image ?? ''))}}"
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
    </script>
@endsection
