@extends('admin.template_parts.master')

@section('title','Admin Management')

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
                    <h3 class="content-header-title mb-0">Admin Management</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Admin Management</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <button class="btn btn-danger float-right mt-2 mb-5 mr-1" type="button" data-toggle="modal"
                        data-target="#admin">
                    Add New Admin
                </button>

                <div class="clearfix"></div>


                <!-- Add New Admin Start From Here -->

                <div class="modal fade" id="admin">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Add New Slider
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <form action="{{route('admins.store')}}" method="post">
                                @csrf

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label>
                                            Name :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input class="form-control" name="name" required placeholder="Name">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Phone :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input class="form-control" name="phone" required placeholder="Phone Number">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Email :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input type="email" class="form-control" name="email" required
                                               placeholder="Email Address">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Password :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input type="password" class="form-control" name="password" required
                                               placeholder="Password">
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" class="btn btn-danger save_changes">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

                <!-- Add New Admin End Here -->


                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="primary">All Admin Lists</h4>
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
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($allAdmin->isNotEmpty())
                                                @foreach($allAdmin as $id => $user)

                                                    <tr>
                                                        <td>{{$id + 1}}</td>
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
                                                            <span data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="Delete">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#delete{{$user->id}}"
                                                                       class="btn btn-danger btn-xs">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                            </span>
                                                        </td>
                                                    </tr>


                                                    <!-- Delete Modal Start From Here -->

                                                    <div class="modal fade" id="delete{{$user->id}}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Are you sure you want to
                                                                        Delete this Slider
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <form action="{{route('admins.destroy',$user->id)}}"
                                                                      method="post">

                                                                    @method('DELETE')
                                                                    @csrf


                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                                class="btn btn-warning"
                                                                                data-dismiss="modal">No
                                                                        </button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger save_changes">
                                                                            Yes
                                                                        </button>
                                                                    </div>

                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Delete Modal End Here -->



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

            </div>
        </div>
    </div>

@endsection