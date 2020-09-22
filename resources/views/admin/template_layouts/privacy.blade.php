@extends('admin.template_parts.master')

@section('title','TERM & SERVICES')

@section('css')
    <link rel="stylesheet" href="//cdn.ckeditor.com/4.5.7/standard/skins/moono/editor.css">
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
                    <h3 class="content-header-title mb-0">TERM & SERVICES</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">TERM & SERVICES</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                @if(is_null($privacy))

                    <form action="{{route('term_service.store')}}" method="post" enctype="multipart/form-data">

                        @else

                            <form action="{{route('term_service.update',($privacy['id'] ?? ''))}}" method="post">

                                @method('PUT')

                                @endif

                                @csrf

                                <div class="col-md-6 offset-3">

                                    <div class="form-group">
                                        <label>
                                            Content :
                                        </label>
                                        <textarea id="editor1" name="content" rows="15" class="form-control"
                                                  placeholder="Description"
                                                  required>{{$privacy['content'] ?? ''}}</textarea>
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
    <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function () {
            CKEDITOR.replace( 'editor1' );
        });
    </script>
@endsection
