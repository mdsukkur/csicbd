@extends('admin.template_parts.master')

@section('title','User Management')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">User Management</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">User Management</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Configuration option table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <table class="table table-striped table-bordered dataex-html5-selectors dataTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Since</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($allUser->isNotEmpty())
                                                @foreach($allUser as $key => $user)

                                                    <tr>
                                                        <td>{{$key + 1}}</td>
                                                        <td>
                                                            {{date('d M, Y h:i a',strtotime($user->created_at))}}
                                                        </td>
                                                        <td>
                                                            {{$user->name ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$user->phone ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$user->email ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$user->address ?? '--'}}
                                                        </td>
                                                        <td>
                                                            <span data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="All Details">
                                                                <a href="{{route('admin.userdetails',$user->id)}}"
                                                                   class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-info"></i>
                                                                </a>
                                                            </span>
                                                        </td>
                                                    </tr>

                                                @endforeach
                                            @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Configuration option table -->

            </div>
        </div>
    </div>

@endsection
