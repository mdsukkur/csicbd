@extends('admin.template_parts.master')

@section('title','Complain Management')

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
                    <h3 class="content-header-title mb-0">Complain Management</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Complain Management</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">


                <div class="row">

                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body text-left w-100">
                                            <h3 class="primary">
                                                {{$allComplain->count() ?? 0}}
                                            </h3>
                                            <span>Total Complain</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-bell primary font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body text-left w-100">
                                            <h3 class="danger">
                                                {{$allComplain->where('status',0)->count() ?? 0}}
                                            </h3>
                                            <span>Pending Complain</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-bell danger font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body text-left w-100">
                                            <h3 class="success">
                                                {{$allComplain->where('status',1)->count() ?? 0}}
                                            </h3>
                                            <span>Approved Complain</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-bell success font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body text-left w-100">
                                            <h3 class="warning">
                                                {{$allComplain->where('status',2)->count() ?? 0}}
                                            </h3>
                                            <span>Canceled Complain</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-bell warning font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Configuration option table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="danger">Pending Complain Lists</h4>
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
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Subject</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($allComplain->isNotEmpty())
                                                @foreach($allComplain as $id => $complain)
                                                    @if($complain->status == 0)

                                                        <tr>
                                                            <td>{{$id + 1}}</td>
                                                            <td>
                                                                {{date('d M, Y h:i a',strtotime($complain->created_at))}}
                                                            </td>
                                                            <td>
                                                                {{$complain->name ?? '--'}}
                                                            </td>
                                                            <td>
                                                                {{$complain->phone ?? '--'}}
                                                            </td>
                                                            <td>
                                                                {{$complain->subject ?? '----'}}
                                                            </td>
                                                            <td>
                                                                <span data-placement="top" data-toggle="tooltip"
                                                                      data-original-title="Approved">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#approved{{$complain->id}}"
                                                                       class="btn btn-primary btn-xs">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </span>

                                                                <span data-placement="top" data-toggle="tooltip"
                                                                      data-original-title="Cancel">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#cancel{{$complain->id}}"
                                                                       class="btn btn-warning btn-xs">
                                                                        <i class="fa fa-close"></i>
                                                                    </a>
                                                                </span>

                                                                <span data-placement="top" data-toggle="tooltip"
                                                                      data-original-title="Delete">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#delete{{$complain->id}}"
                                                                       class="btn btn-danger btn-xs">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                        </tr>




                                                        <!-- Approved Modal Start From Here -->

                                                        <div class="modal fade" id="approved{{$complain->id}}">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">
                                                                            Approved This Complain
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <form action="{{route('complain.update',$complain->id)}}"
                                                                          method="post">

                                                                        @method('PATCH')
                                                                        @csrf

                                                                        <input type="hidden" name="type" value="a">

                                                                        <div class="modal-body">

                                                                            <div class="form-group">
                                                                                <label>
                                                                                    Approved Note : <span
                                                                                            class="danger"> *</span>
                                                                                </label>
                                                                                <textarea name="admin_note"
                                                                                          rows="7" class="form-control"
                                                                                          required></textarea>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                    class="btn btn-warning"
                                                                                    data-dismiss="modal">Close
                                                                            </button>
                                                                            <button type="submit"
                                                                                    class="btn btn-danger save_changes">
                                                                                Save
                                                                                changes
                                                                            </button>
                                                                        </div>

                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Approved Modal End Here -->



                                                        <!-- Cancel Modal Start From Here -->

                                                        <div class="modal fade" id="cancel{{$complain->id}}">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">
                                                                            Cancel This Complain
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <form action="{{route('complain.update',$complain->id)}}"
                                                                          method="post">

                                                                        @method('PATCH')
                                                                        @csrf

                                                                        <input type="hidden" name="type" value="c">

                                                                        <div class="modal-body">

                                                                            <div class="form-group">
                                                                                <label>
                                                                                    Cancel Note : <span
                                                                                            class="danger"> *</span>
                                                                                </label>
                                                                                <textarea name="admin_note"
                                                                                          rows="7" class="form-control"
                                                                                          required></textarea>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                    class="btn btn-warning"
                                                                                    data-dismiss="modal">Close
                                                                            </button>
                                                                            <button type="submit"
                                                                                    class="btn btn-danger save_changes">
                                                                                Save
                                                                                changes
                                                                            </button>
                                                                        </div>

                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Cancel Modal End Here -->



                                                        <!-- Delete Modal Start From Here -->

                                                        <div class="modal fade" id="delete{{$complain->id}}">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">
                                                                            Are you sure you want to
                                                                            Delete this Question
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <form action="{{route('complain.destroy',$complain->id)}}"
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


                                                    @endif
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


                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="primary">All Complain Lists</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse">
                                    <div class="card-body card-dashboard">

                                        <table class="table table-striped table-bordered dataex-html5-selectors dataTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Admin Message</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($allComplain->isNotEmpty())
                                                @foreach($allComplain->where('status','!=',0) as $id => $complain)

                                                    <tr>
                                                        <td>{{$id + 1}}</td>
                                                        <td>
                                                            {{date('d M, Y h:i a',strtotime($complain->created_at))}}
                                                        </td>
                                                        <td>
                                                            {{$complain->name ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$complain->phone ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$complain->email ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$complain->subject ?? '----'}}
                                                        </td>
                                                        <td>
                                                            {{$complain->admin_note ?? '----'}}
                                                        </td>
                                                        <td>
                                                            @if($complain->status == 1)
                                                                <span class="badge badge-primary">
                                                                    approved
                                                                </span>
                                                            @elseif($complain->status == 2)
                                                                <span class="badge badge-danger">
                                                                    canceled
                                                                </span>
                                                            @endif
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