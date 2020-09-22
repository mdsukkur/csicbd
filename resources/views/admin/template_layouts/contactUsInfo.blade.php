@extends('admin.template_parts.master')

@section('title','Contact Information')

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
                    <h3 class="content-header-title mb-0">Contact Information </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> Contact Information</a>
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
                                    <h4 class="danger">Pending Contact Information</h4>
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
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($contactUs->isNotEmpty())
                                                @foreach($contactUs->where('status',0) as $id => $contact)

                                                    <tr>
                                                        <td>{{$id + 1}}</td>
                                                        <td>
                                                            {{$contact->name ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$contact->phone ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$contact->email ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$contact->message ?? '--'}}
                                                        </td>
                                                        <td>
                                                            <span data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="Approved">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#approved{{$contact->id}}"
                                                                       class="btn btn-primary btn-xs">
                                                                        <i class="fa fa-thumbs-up"></i>
                                                                    </a>
                                                            </span>

                                                            <span data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="Cancel">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#cancel{{$contact->id}}"
                                                                       class="btn btn-warning btn-xs">
                                                                        <i class="fa fa-close"></i>
                                                                    </a>
                                                            </span>

                                                            <span data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="Delete">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#delete{{$contact->id}}"
                                                                       class="btn btn-danger btn-xs">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                            </span>
                                                        </td>
                                                    </tr>



                                                    <!-- Approved Modal Start From Here -->

                                                    <div class="modal fade" id="approved{{$contact->id}}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Are you sure you want to
                                                                        Contacted this Contact Info
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <form action="{{route('contactus.update',$contact->id)}}"
                                                                      method="post">

                                                                    @method('PATCH')
                                                                    @csrf

                                                                    <input type="hidden" name="status" value="1">

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

                                                    <!-- Approved Modal End Here -->


                                                    <!-- Cancel Modal Start From Here -->

                                                    <div class="modal fade" id="cancel{{$contact->id}}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Are you sure you want to
                                                                        Cancel this Contact Info
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <form action="{{route('contactus.update',$contact->id)}}"
                                                                      method="post">

                                                                    @method('PATCH')
                                                                    @csrf

                                                                    <input type="hidden" name="status" value="2">

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

                                                    <!-- Cancel Modal End Here -->


                                                    <!-- Delete Modal Start From Here -->

                                                    <div class="modal fade" id="delete{{$contact->id}}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Are you sure you want to
                                                                        Delete this Contact Info
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <form action="{{route('contactus.destroy',$contact->id)}}"
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

                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="primary">All Contact Information</h4>
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
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($contactUs->isNotEmpty())
                                                @foreach($contactUs->where('status','!=',0) as $id => $contact)

                                                    <tr>
                                                        <td>{{$id + 1}}</td>
                                                        <td>
                                                            {{$contact->name ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$contact->phone ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$contact->email ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$contact->message ?? '--'}}
                                                        </td>
                                                        <td>
                                                            @if($contact->status == 0)
                                                                <span class="badge badge-warning">pending</span>
                                                            @elseif($contact->status == 1)
                                                                <span class="badge badge-primary">contacted</span>
                                                            @elseif($contact->status == 2)
                                                                <span class="badge badge-danger">canceled</span>
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

            </div>
        </div>
    </div>

@endsection
