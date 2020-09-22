@extends('admin.template_parts.master')

@section('title','Office Address')

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
                    <h3 class="content-header-title mb-0">Office Address</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Office Address</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <button class="btn btn-danger float-right mt-2 mb-5 mr-1" type="button" data-toggle="modal"
                        data-target="#slider">
                    Add New Office Address
                </button>

                <div class="clearfix"></div>


                <!-- Add New Slider Start From Here -->

                <div class="modal fade" id="slider">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Add New Office Address
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <form action="{{route('officeAddress.store')}}" method="post">
                                @csrf

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label>
                                            Title :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input class="form-control" name="title" required placeholder="USA office address
">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Street :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input class="form-control" name="Street" required placeholder="2810 Argonne Street
">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            City :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input class="form-control" name="city" required placeholder="Eagleville">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Zip Code :
                                            <span class="danger"> *</span>
                                        </label>
                                        <input class="form-control" name="zip_code" required placeholder="19403">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Facebook :
                                        </label>
                                        <input class="form-control" name="facebook" placeholder="Facebook">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Twitter :
                                        </label>
                                        <input class="form-control" name="twitter" placeholder="Twitter">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Linkedin :
                                        </label>
                                        <input class="form-control" name="linkedin" placeholder="Linkedin">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            status :
                                            <span class="danger"> *</span>
                                        </label>
                                        <select name="status" class="form-control">

                                            @foreach($status as $key => $value)

                                                <option value="{{$key}}">
                                                    {{$value}}
                                                </option>

                                            @endforeach

                                        </select>
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

                <!-- Add New Slider End Here -->


                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="primary">All Office Address Lists</h4>
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
                                                <th>Title</th>
                                                <th>Street</th>
                                                <th>City</th>
                                                <th>Zip Code</th>
                                                <th>Facebook</th>
                                                <th>Twitter</th>
                                                <th>Linkedin</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($allAddress->isNotEmpty())
                                                @foreach($allAddress as $key => $address)

                                                    <tr>
                                                        <td>{{$key + 1}}</td>
                                                        <td>
                                                            {{$address->title ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$address->Street ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$address->city ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$address->zip_code ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$address->facebook ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$address->twitter ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$address->linkedin ?? '--'}}
                                                        </td>
                                                        <td>
                                                            @if($address->status == 0)
                                                                <span class="badge badge-warning">
                                                                    Inactive
                                                                </span>
                                                            @elseif($address->status == 1)
                                                                <span class="badge badge-primary">
                                                                    Active
                                                                </span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <span data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="Edit">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#edit{{$address->id}}"
                                                                       class="btn btn-warning btn-xs">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                            </span>

                                                            <span data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="Delete">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#delete{{$address->id}}"
                                                                       class="btn btn-danger btn-xs">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                            </span>
                                                        </td>
                                                    </tr>




                                                    <!-- Edit Modal Start From Here -->

                                                    <div class="modal fade" id="edit{{$address->id}}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Update Slider
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <form action="{{route('officeAddress.update',$address->id)}}"
                                                                      method="post" enctype="multipart/form-data">

                                                                    @method('PATCH')
                                                                    @csrf

                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label>
                                                                                Title :
                                                                                <span class="danger"> *</span>
                                                                            </label>
                                                                            <input class="form-control" name="title"
                                                                                   value="{{$address->title}}"
                                                                                   required placeholder="USA office address
">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>
                                                                                Street :
                                                                                <span class="danger"> *</span>
                                                                            </label>
                                                                            <input class="form-control" name="Street"
                                                                                   value="{{$address->Street}}"
                                                                                   required placeholder="2810 Argonne Street
">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>
                                                                                City :
                                                                                <span class="danger"> *</span>
                                                                            </label>
                                                                            <input class="form-control" name="city"
                                                                                   value="{{$address->city}}"
                                                                                   required placeholder="Eagleville">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>
                                                                                Zip Code :
                                                                                <span class="danger"> *</span>
                                                                            </label>
                                                                            <input class="form-control" name="zip_code"
                                                                                   value="{{$address->zip_code}}"
                                                                                   required placeholder="19403">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>
                                                                                Facebook :
                                                                            </label>
                                                                            <input class="form-control" name="facebook"
                                                                                   value="{{$address->facebook}}"
                                                                                   placeholder="Facebook">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>
                                                                                Twitter :
                                                                            </label>
                                                                            <input class="form-control" name="twitter"
                                                                                   value="{{$address->twitter}}"
                                                                                   placeholder="Twitter">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>
                                                                                Linkedin :
                                                                            </label>
                                                                            <input class="form-control" name="linkedin"
                                                                                   placeholder="Linkedin"
                                                                                   value="{{$address->linkedin}}">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>
                                                                                status :
                                                                                <span class="danger"> *</span>
                                                                            </label>
                                                                            <select name="status" class="form-control">

                                                                                @foreach($status as $key => $value)

                                                                                    <option value="{{$key}}" @if($address->status == $key) {{'selected'}} @endif>
                                                                                        {{$value}}
                                                                                    </option>

                                                                                @endforeach

                                                                            </select>
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

                                                    <!-- Edit Modal End Here -->



                                                    <!-- Delete Modal Start From Here -->

                                                    <div class="modal fade" id="delete{{$address->id}}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Are you sure you want to
                                                                        Delete this Address
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <form action="{{route('officeAddress.destroy',$address->id)}}"
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