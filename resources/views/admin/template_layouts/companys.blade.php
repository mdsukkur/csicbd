@extends('admin.template_parts.master')

@section('title','All Company')

@section('css')
    <style>
        .mdi-apple-keyboard-command:before {
            content: "\F633";
        }
    </style>
@endsection

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">All Company</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">All Companys</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">


                <button class="btn btn-danger float-right mb-5 mr-1" type="button" data-toggle="modal"
                        data-target="#company">
                    Add New Company
                </button>

                <div class="clearfix"></div>


                <!-- Add New Company Modal Start From Here -->

                <div class="modal fade" id="company">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Add New Company
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="{{route('company.store')}}" method="post">

                                @csrf

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label>
                                            Company Name : <span class="danger"> *</span>
                                        </label>
                                        <input name="name" class="form-control" placeholder="Company Name" required>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Category :
                                        </label>
                                        <select name="category_id" class="form-control" required>

                                            @if($allCategory->isNotEmpty())
                                                @foreach($allCategory as $category)

                                                    <option value="{{$category->id}}">
                                                        {{$category->name ?? '--'}}
                                                    </option>

                                                @endforeach
                                            @endif

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Status :
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
                                    <button type="submit" class="btn btn-danger save_changes">Save changes</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

                <!-- Add New Company Modal End Here -->


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
                                                <th>Company Name</th>
                                                <th>Category Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($allCompany->isNotEmpty())
                                                @foreach($allCompany as $id => $company)

                                                    <tr>
                                                        <td>{{$id + 1}}</td>
                                                        <td>
                                                            {{$company->name ?? '--'}}
                                                        </td>
                                                        <td>
                                                            @if($allCategory->isNotEmpty())
                                                                @foreach($allCategory as $category)
                                                                    @if($category->id == $company->category_id)

                                                                        {{$category->name ?? "--"}}

                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @foreach($status as $key => $value)
                                                                @if($key == $company->status && $company->status == 1)

                                                                    <span class="badge badge-primary">
                                                                        {{$value}}
                                                                    </span>

                                                                @elseif($key == $company->status && $company->status == 0)

                                                                    <span class="badge badge-danger">
                                                                        {{$value}}
                                                                    </span>

                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            <span data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="Edit">
                                                                <a data-toggle="modal" data-backdrop="false"
                                                                   data-target="#edit{{$company->id}}"
                                                                   class="btn btn-warning btn-xs">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            </span>

                                                            <span data-placement="top" data-toggle="tooltip"
                                                                  data-original-title="Delete">
                                                                <a data-toggle="modal" data-backdrop="false"
                                                                   data-target="#delete{{$company->id}}"
                                                                   class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </span>
                                                        </td>
                                                    </tr>


                                                    <!-- Edit Company Modal Start From Here -->

                                                    <div class="modal fade" id="edit{{$company->id}}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Edit {{$company->name ?? '--'}}
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <form action="{{route('company.update',$company->id)}}"
                                                                      method="post">

                                                                    @method('PATCH')
                                                                    @csrf

                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label>
                                                                                Company Name : <span
                                                                                        class="danger"> *</span>
                                                                            </label>
                                                                            <input name="name" class="form-control"
                                                                                   value="{{$company->name ?? '--'}}"
                                                                                   placeholder="Company Name" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>
                                                                                Category :
                                                                            </label>
                                                                            <select name="category_id"
                                                                                    class="form-control" required>

                                                                                @if($allCategory->isNotEmpty())
                                                                                    @foreach($allCategory as $category)

                                                                                        @if($category->id == $company->category_id)

                                                                                            @php
                                                                                                $selected = 'selected';
                                                                                            @endphp

                                                                                        @else

                                                                                            @php
                                                                                                $selected = '';
                                                                                            @endphp

                                                                                        @endif

                                                                                        <option {{$selected}} value="{{$category->id}}">
                                                                                            {{$category->name ?? '--'}}
                                                                                        </option>

                                                                                    @endforeach
                                                                                @endif

                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>
                                                                                Status :
                                                                            </label>
                                                                            <select name="status" class="form-control">

                                                                                @foreach($status as $key => $value)

                                                                                    @if($key == $company->status)

                                                                                        @php
                                                                                            $selected = 'selected';
                                                                                        @endphp

                                                                                    @else

                                                                                        @php
                                                                                            $selected = '';
                                                                                        @endphp

                                                                                    @endif


                                                                                    <option {{$selected}} value="{{$key}}">
                                                                                        {{$value}}
                                                                                    </option>

                                                                                @endforeach

                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-warning"
                                                                                data-dismiss="modal">Close
                                                                        </button>
                                                                        <button type="submit"
                                                                                class="btn btn-danger save_changes">Save
                                                                            changes
                                                                        </button>
                                                                    </div>

                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Edit Company Modal End Here -->



                                                    <!-- Delete Company Modal Start From Here -->

                                                    <div class="modal fade" id="delete{{$company->id}}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Are you sure you want to
                                                                        Delete {{$company->name ?? '--'}}
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <form action="{{route('company.destroy',$company->id)}}"
                                                                      method="post">

                                                                    @method('DELETE')
                                                                    @csrf


                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-warning"
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

                                                    <!-- Delete Company Modal End Here -->


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