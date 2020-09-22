@extends('website.template_parts.master')

@section('title','My Account')

@section('css')

    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css?v='.time())}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css?v='.time())}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css?v='.time())}}">
          <link rel="stylesheet" type="text/css"
      href="{{asset('admin/app-assets/vendors/css/forms/selects/select2.min.css')}}">

    <style>
        .form-control:focus {
            border: 1px solid #bd2130 !important;
        }

        th {
            font-size: 15px !important;
            letter-spacing: .4px !important;
        }

        td {
            font-size: 14px !important;
            letter-spacing: .2px !important;
        }

        .badge {
            position: relative !important;
            width: auto !important;
            border-radius: 4px !important;
            letter-spacing: 1px !important;
            height: 19px !important;
        }

        .badge-primary {
            background-color: #00B5B8 !important;
        }

        .badge-warning {
            background-color: #f59c1a !important;
        }

        .badge-danger {
            background-color: #F35A57 !important;
        }

        .table {
            width: 100% !important;
        }

        .field-icon {
            margin-top: -30px !important;
        }
    </style>

@endsection

@section('breadcrumb')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>My Account</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <div class="myAccount my-3">

        <div class="container-fluid px-5">
            <div class="row" id="tabs">

                <div class="col-lg-2">
                    <div class="dokan-dash-sidebar">
                        <ul class="dokan-dashboard-menu">
                            <li>
                                <a href="#tab-1">
                                    <i class="fa fa-home"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#tab-2">
                                    <i class="fa fa-briefcase"></i>শেয়ার জিজ্ঞাসা
                                </a>
                            </li>
                            <li>
                                <a href="#tab-3">
                                    <i class="fa fa-shopping-cart"></i>Complain
                                </a>
                            </li>
                            <li>
                                <a href="#tab-4">
                                    <i class="fa fa-user"></i>Profile
                                </a>
                            </li>
                            <li>
                                <a href="#tab-5">
                                    <i class="fa fa-lock"></i>Change Password
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" data-placement="bottom" href="{{route('logout')}}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   title="Log out">
                                    <i class="fa fa-power-off"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-10">

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <div id="tab-1" class="EditProfile">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="vendor-summary">
                                    <ul>
                                        <li>
                                            <div class="title">Total Company</div>
                                            <div class="count">
                                                {{$allCompany->count()}}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">Total Category</div>
                                            <div class="count">
                                                {{$allCategory->count()}}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">Total Question</div>
                                            <div class="count">
                                                {{$myQuestions->count()}}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">Total Complain</div>
                                            <div class="count">
                                                {{$myComplains->count()}}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">

                            <div class="col-md-6">
                                <div class="vendor-summary">
                                    <div class="widget-title">
                                        <i class="fa fa-shopping-cart"></i>
                                        Question
                                    </div>
                                    <ul class="widget-content">
                                        <li>
                                            <a href="#">
                                                <span class="title">Total</span>
                                                <span class="count">
                                                    {{$myQuestions->count()}}
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" style="color: #73a724">
                                                <span class="title">Approved</span>
                                                <span class="count">
                                                    {{$myQuestions->where('status',1)->count()}}
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" style="color: #999">
                                                <span class="title">Pending</span>
                                                <span class="count">
                                                    {{$myQuestions->where('status',0)->count()}}
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="title">Canceled</span>
                                                <span class="count">
                                                    {{$myQuestions->where('status',2)->count()}}
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="vendor-summary">
                                    <div class="widget-title">
                                        <i class="fa fa-shopping-cart"></i>
                                        Complain
                                    </div>
                                    <ul class="widget-content">
                                        <li>
                                            <a href="#">
                                                <span class="title">Total</span>
                                                <span class="count">
                                                    {{$myComplains->count()}}
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" style="color: #73a724">
                                                <span class="title">Approved</span>
                                                <span class="count">
                                                    {{$myComplains->where('status',1)->count()}}
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" style="color: #999">
                                                <span class="title">Pending</span>
                                                <span class="count">
                                                    {{$myComplains->where('status',0)->count()}}
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="title">Canceled</span>
                                                <span class="count">
                                                    {{$myComplains->where('status',2)->count()}}
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div id="tab-2" class="EditProfile edit-box">

                        <button class="btn btn-danger float-right mt-2 mb-5 mr-1" type="button" data-toggle="modal"
                                data-target="#shareJiggasa">
                            Add New শেয়ার জিজ্ঞাসা Request
                        </button>

                        <div class="clearfix"></div>

                        <ul class="nav nav-tabs fontend-tabs mb-5" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">
                                    All ( {{$myQuestions->count()}} )
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile" aria-selected="false">
                                    Pending ( {{$myQuestions->where('status',0)->count() }} )
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                   aria-controls="contact" aria-selected="false">
                                    Answered ( {{$myQuestions->where('status',1)->count() }})
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cancel-tab" data-toggle="tab" href="#cancel" role="tab"
                                   aria-controls="cancel" aria-selected="false">
                                    Canceled ( {{$myQuestions->where('status',2)->count() }})
                                </a>
                            </li>
                        </ul>

                        <div class="clearfix"></div>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-striped table-bordered dataex-res-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Company Name</th>
                                        <th>Category Name</th>
                                        <th>Your Note</th>
                                        <th>Transection ID</th>
                                        <th>Answer</th>
                                        <th>Admin Message</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if($myQuestions->isNotEmpty())
                                        @foreach($myQuestions as $id => $question)

                                            <tr>
                                                <td>{{$id + 1}}</td>
                                                <td>
                                                    {{date('d M, Y h:i a',strtotime($question->created_at))}}
                                                </td>
                                                <td>
                                                    @foreach($allCompany as $company)
                                                        @if($question->company_id == $company->id)

                                                            {{$company->name}}

                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($allCategory as $category)
                                                        @if($question->category_id == $category->id)

                                                            {{$category->name}}

                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    {{$question->user_note ?? '----'}}
                                                </td>
                                                <td>
                                                    {{$question->transection_id ?? '----'}}
                                                </td>
                                                <td>
                                                    @if($question->answer == 0 && !is_null($question->answer))

                                                        <span class="badge badge-danger">No</span>

                                                    @elseif($question->answer == 1 && !is_null($question->answer))

                                                        <span class="badge badge-primary">Yes</span>

                                                    @else
                                                        ----
                                                    @endif
                                                </td>
                                                <td>
                                                    {{$question->admin_note ?? '----'}}
                                                </td>
                                                <td>
                                                    @if($question->status == 0)
                                                        <span class="badge badge-warning">pending</span>
                                                    @elseif($question->status == 1)
                                                        <span class="badge badge-primary">answered</span>
                                                    @elseif($question->status == 2)
                                                        <span class="badge badge-danger">canceled</span>
                                                    @endif
                                                </td>
                                            </tr>

                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table table-striped table-bordered dataex-res-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Company Name</th>
                                        <th>Category Name</th>
                                        <th>Your Note</th>
                                        <th>Transection ID</th>
                                        <th>Answer</th>
                                        <th>Admin Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php
                                    $status = 0;
                                    @endphp
                                    
                                    @if($myQuestions->isNotEmpty())
                                        @foreach($myQuestions as $id => $question)
                                            @if($question->status == 0)
                                            
                                            @php
                                            $status++;
                                            @endphp

                                                <tr>
                                                    <td>{{$status}}</td>
                                                    <td>
                                                        {{date('d M, Y h:i a',strtotime($question->created_at))}}
                                                    </td>
                                                    <td>
                                                        @foreach($allCompany as $company)
                                                            @if($question->company_id == $company->id)

                                                                {{$company->name}}

                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach($allCategory as $category)
                                                            @if($question->category_id == $category->id)

                                                                {{$category->name}}

                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        {{$question->user_note ?? '----'}}
                                                    </td>
                                                    <td>
                                                        {{$question->transection_id ?? '----'}}
                                                    </td>
                                                    <td>
                                                        @if($question->answer == 0 && !is_null($question->answer))

                                                            <span class="badge badge-danger">No</span>

                                                        @elseif($question->answer == 1 && !is_null($question->answer))

                                                            <span class="badge badge-primary">Yes</span>

                                                        @else
                                                            ----
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$question->admin_note ?? '----'}}
                                                    </td>
                                                </tr>

                                            @endif
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <table class="table table-striped table-bordered dataex-res-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Company Name</th>
                                        <th>Category Name</th>
                                        <th>Your Note</th>
                                        <th>Transection ID</th>
                                        <th>Answer</th>
                                        <th>Admin Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @php
                                            $status = 0;
                                        @endphp


                                    @if($myQuestions->isNotEmpty())
                                        @foreach($myQuestions as $id => $question)
                                            @if($question->status == 1)
                                            
                                            @php
                                            $status++;
                                            @endphp

                                                <tr>
                                                    <td>{{$status}}</td>
                                                    <td>
                                                        {{date('d M, Y h:i a',strtotime($question->created_at))}}
                                                    </td>
                                                    <td>
                                                        @foreach($allCompany as $company)
                                                            @if($question->company_id == $company->id)

                                                                {{$company->name}}

                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach($allCategory as $category)
                                                            @if($question->category_id == $category->id)

                                                                {{$category->name}}

                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        {{$question->user_note ?? '----'}}
                                                    </td>
                                                    <td>
                                                        {{$question->transection_id ?? '----'}}
                                                    </td>
                                                    <td>
                                                        @if($question->answer == 0)

                                                            <span class="badge badge-danger">No</span>

                                                        @elseif($question->answer == 1)

                                                            <span class="badge badge-primary">Yes</span>

                                                        @else
                                                            ----
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$question->admin_note ?? '----'}}
                                                    </td>
                                                </tr>

                                            @endif
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tab">
                                <table class="table table-striped table-bordered dataex-res-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Company Name</th>
                                        <th>Category Name</th>
                                        <th>Your Note</th>
                                        <th>Transection ID</th>
                                        <th>Answer</th>
                                        <th>Admin Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @php
                                            $status = 0;
                                        @endphp

                                    @if($myQuestions->isNotEmpty())
                                        @foreach($myQuestions as $id => $question)
                                            @if($question->status == 2)
                                            
                                            @php
                                            $status++;
                                            @endphp

                                                <tr>
                                                    <td>{{$status}}</td>
                                                    <td>
                                                        {{date('d M, Y h:i a',strtotime($question->created_at))}}
                                                    </td>
                                                    <td>
                                                        @foreach($allCompany as $company)
                                                            @if($question->company_id == $company->id)

                                                                {{$company->name}}

                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach($allCategory as $category)
                                                            @if($question->category_id == $category->id)

                                                                {{$category->name}}

                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        {{$question->user_note ?? '----'}}
                                                    </td>
                                                    <td>
                                                        {{$question->transection_id ?? '----'}}
                                                    </td>
                                                    <td>
                                                        {{$question->answer ?? '----'}}
                                                    </td>
                                                    <td>
                                                        {{$question->admin_note ?? '----'}}
                                                    </td>
                                                </tr>

                                            @endif
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <!-- Share Jiggasa Modal Start From Here -->
                        
                        <div class="modal fade" id="shareJiggasa">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Add New শেয়ার জিজ্ঞাসা Request
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="{{route('question.store')}}" method="post">
                                        @csrf

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>
                                                    Category Name :
                                                    <span class="danger"> *</span>
                                                </label>
                                                <select name="category_id" id="categoryFilter" class="form-control select2 categoryFilter" >

                                                    @if($allCategory->isNotEmpty())
                                                        @foreach($allCategory as $category)

                                                            <option value="{{$category->id}}">
                                                                {{$category->name}}
                                                            </option>

                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>
                                                    Company Name :
                                                    <span class="danger"> *</span>
                                                </label>
                                                
                                                 @php
                                                                $status = 0;
                                                            @endphp

                                                @if($allCategory->isNotEmpty())
                                                    @foreach($allCategory as $category)
                                                    
                                                    @php
                                                         $status++;
                                                    @endphp

                                                        @if($status == 1)

                                                            @php
                                                                $style = "";
                                                            @endphp

                                                        @else

                                                            @php
                                                                $style = "display: none";
                                                            @endphp

                                                        @endif


                                                        @php
                                                            $filteredCompany = $allCompany->whereIn('category_id',$category->id);
                                                        @endphp

                                                        <div class="company-{{$category->id}}" style="{{$style}}">
                                                            <select name="company_id_{{$category->id}}"
                                                                    class="form-control select2" >
                                                                

                                                                @foreach($filteredCompany as $company)

                                                                    <option value="{{$company->id}}">
                                                                        {{$company->name}}
                                                                    </option>

                                                                @endforeach

                                                            </select>
                                                        </div>

                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label>
                                                    Note For Admin :
                                                </label>
                                                <textarea name="user_note" placeholder="Write your question if you want"
                                                          class="form-control"
                                                          rows="10"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>
                                                    Transection ID :
                                                    <span class="danger"> *</span>
                                                </label>
                                                <input class="form-control" name="transection_id"
                                                       placeholder="Transection ID" required>
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

                        <!-- Share Jiggasa Modal End Here -->

                    </div>

                    <div id="tab-3" class="EditProfile edit-box">

                        <button class="btn btn-danger float-right mt-2 mb-5 mr-1" type="button" data-toggle="modal"
                                data-target="#complainModel">
                            Add New Complain
                        </button>

                        <div class="clearfix"></div>

                        <ul class="nav nav-tabs fontend-tabs mb-5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#homeC" role="tab"
                                   aria-controls="home" aria-selected="true">
                                    All ( {{$myComplains->count()}} )
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profileC" role="tab"
                                   aria-controls="profile" aria-selected="false">
                                    Pending ( {{$myComplains->where('status',0)->count() }} )
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contactC" role="tab"
                                   aria-controls="contact" aria-selected="false">
                                    Approved ( {{$myComplains->where('status',1)->count() }})
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cancel-tab" data-toggle="tab" href="#cancelC" role="tab"
                                   aria-controls="cancel" aria-selected="false">
                                    Canceled ( {{$myComplains->where('status',2)->count() }})
                                </a>
                            </li>
                        </ul>

                        <div class="clearfix"></div>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="homeC" role="tabpanel"
                                 aria-labelledby="home-tab">
                                <table class="table table-striped table-bordered dataex-res-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Subject</th>
                                        <th>Admin Message</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if($myComplains->isNotEmpty())
                                        @foreach($myComplains as $key => $complain)

                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>
                                                    {{date('d M, Y h:i a',strtotime($complain->created_at))}}
                                                </td>
                                                <td>
                                                    {{$complain->subject ?? '-----'}}
                                                </td>
                                                <td>
                                                    {{$complain->admin_note ?? '-----'}}
                                                </td>
                                                <td>
                                                    @if($complain->status == 0)
                                                        <span class="badge badge-warning">
                                                            pending
                                                        </span>
                                                    @elseif($complain->status == 1)
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

                            <div class="tab-pane fade" id="profileC" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table table-striped table-bordered dataex-res-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Subject</th>
                                        <th>Admin Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if($myComplains->isNotEmpty())
                                        @foreach($myComplains as $key => $complain)
                                            @if($complain->status == 0)

                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>
                                                        {{date('d M, Y h:i a',strtotime($complain->created_at))}}
                                                    </td>
                                                    <td>
                                                        {{$complain->subject ?? '-----'}}
                                                    </td>
                                                    <td>
                                                        {{$complain->admin_note ?? '-----'}}
                                                    </td>
                                                </tr>

                                            @endif
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="contactC" role="tabpanel" aria-labelledby="contact-tab">
                                <table class="table table-striped table-bordered dataex-res-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Subject</th>
                                        <th>Admin Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if($myComplains->isNotEmpty())
                                        @foreach($myComplains as $key => $complain)
                                            @if($complain->status == 1)

                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>
                                                        {{date('d M, Y h:i a',strtotime($complain->created_at))}}
                                                    </td>
                                                    <td>
                                                        {{$complain->subject ?? '-----'}}
                                                    </td>
                                                    <td>
                                                        {{$complain->admin_note ?? '-----'}}
                                                    </td>
                                                </tr>

                                            @endif
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="cancelC" role="tabpanel" aria-labelledby="cancel-tab">
                                <table class="table table-striped table-bordered dataex-res-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Subject</th>
                                        <th>Admin Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if($myComplains->isNotEmpty())
                                        @foreach($myComplains as $key => $complain)
                                            @if($complain->status == 2)

                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>
                                                        {{date('d M, Y h:i a',strtotime($complain->created_at))}}
                                                    </td>
                                                    <td>
                                                        {{$complain->subject ?? '-----'}}
                                                    </td>
                                                    <td>
                                                        {{$complain->admin_note ?? '-----'}}
                                                    </td>
                                                </tr>

                                            @endif
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <!-- New Complain Modal Start From Here -->

                        <div class="modal fade" id="complainModel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            Add New Complain Request
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="{{route('complain.store')}}" method="post">
                                        @csrf

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>
                                                    Subject :
                                                    <span class="danger"> *</span>
                                                </label>
                                                <textarea name="subject" placeholder="Write Something"
                                                          class="form-control"
                                                          rows="10" required></textarea>
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

                        <!-- New Complain Modal End Here -->

                    </div>

                    <div id="tab-4" class="EditProfile edit-box">

                        <form method="post" action="{{url('editInfo')}}">
                            @csrf

                            <div class="row">

                                <div class="col-lg-4 form-group">
                                    <label>Name :
                                        <span class="danger"> *</span>
                                    </label>
                                    <input required name="name" class="form-control" value="{{Auth::user()->name}}">
                                </div>

                                <div class="col-lg-4 form-group">
                                    <label>Email :
                                        <span class="danger"> *</span>
                                    </label>
                                    <input type="email" required name="email" class="form-control"
                                           value="{{Auth::user()->email}}">
                                </div>

                                <div class="col-lg-4 form-group">
                                    <label>Phone :
                                        <span class="danger"> *</span>
                                    </label>
                                    <input type="tel" required name="phone" class="form-control"
                                           value="{{Auth::user()->phone}}">
                                </div>

                                <div class="col-lg-4 form-group">
                                    <label>Address :
                                        <span class="danger"> *</span>
                                    </label>
                                    <textarea name="address" class="form-control" required
                                              rows="5">{{Auth::user()->address}}</textarea>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-danger save_changes">Submit</button>
                                </div>


                            </div>

                        </form>

                    </div>

                    <div id="tab-5" class="EditProfile edit-box">

                        <div class="oldPassSection">

                            <div class="col-md-4 offset-3 form-group">
                                <label>Old Password
                                    <span class="danger"> *</span>
                                </label>
                                <input type="password" name="old_password" id="old_password" class="form-control"
                                       placeholder="Old Password">
                                <span toggle="#old_password" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                            </div>

                            <div class="col-md-4 offset-3">
                                <button type="button" class="btn btn-danger" id="oldPassSubmit">Submit</button>
                            </div>

                        </div>

                        <div class="newPassSection" style="display: none">

                            <div class="col-md-4 offset-3 form-group">
                                <label>New Password
                                    <span class="danger"> *</span>
                                </label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="New Password">
                                <span toggle="#password" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                            </div>

                            <div class="col-md-4 offset-3 form-group">
                                <label>Confirm Password
                                    <span class="danger"> *</span>
                                </label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation"
                                       placeholder="Confirm Password">
                                <span toggle="#password-confirm"
                                      class="fa fa-fw field-icon toggle-password fa-eye"></span>
                            </div>

                            <div class="col-md-4 offset-3">
                                <button type="button" class="btn btn-danger" id="newPassSubmit">Submit</button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection


@section('scripts')

    <script src="{{asset('admin/app-assets/vendors/js/tables/datatable/datatables.min.js?v='.time())}}"></script>
    <script src="{{asset('admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js?v='.time())}}"></script>
    <script src="{{asset('admin/app-assets/js/scripts/tables/datatables-extensions/datatable-responsive.js?v='.time())}}"></script>

    <script>
        (function ($) {
            $(document).ready(function () {
                $('.table').DataTable();

                $('.company-1').css('display', 'none');

            });
        })(jQuery);
    </script>


    <script src="{{asset('ui_tabs/jquery-1.12.4.js?v='.time())}}"></script>
    <script src="{{asset('ui_tabs/jquery-ui.js?v='.time())}}"></script>

    <script>
        var $j = jQuery.noConflict(true);

        $j(function () {
            $j("#tabs").tabs();
            
            
            
            
            /* Company Filter Start Here */
            
            $('.categoryFilter').on('select2:select', function (e) {
                var id = e.params.data.id;
                
                @foreach($allCategory as $category)

                if ("{{$category->id}}" == id) {
                    $j(".company-{{$category->id}}").css('display', 'block');
                }
                else {
                    $j(".company-{{$category->id}}").css('display', 'none');
                }

                @endforeach
                
            });
            
            

            /* Old Password Check */
            $('#oldPassSubmit').click(function () {
                oldPass = $('#old_password').val();

                $.ajax({
                    type: "POST",
                    url: "{{url('passwordMatch')}}",
                    data: {
                        'old_password': oldPass,
                    },
                    beforeSend: function () {
                        $('.loader').show();

                    },
                    complete: function () {
                        $('.loader').hide();

                    },
                    success: function (response) {

                        if (response == 'success') {

                            swal({
                                title: "Password Matched!",
                                icon: "success",
                                timer: 5000
                            });

                            $('.oldPassSection').hide();
                            $('.newPassSection').show();
                        } else if (response == 'failed') {

                            swal({
                                title: "Password Not Matched!",
                                icon: "warning",
                                timer: 5000
                            });

                        }

                    },
                    error: function (response) {

                        swal({
                            title: "Something wrong! Please check again",
                            icon: "warning"
                        });

                    }

                });


            })


            /* Update Password */
            $('#newPassSubmit').click(function () {
                password = $('#password').val();
                password_confirm = $('#password-confirm').val();

                $.ajax({
                    type: "POST",
                    url: "{{url('changePass')}}",
                    data: {
                        'password': password,
                        'password_confirmation': password_confirm
                    },
                    beforeSend: function () {
                        $('.loader').show();

                    },
                    complete: function () {
                        $('.loader').hide();

                    },
                    success: function (response) {


                        if (response == 'success') {

                            swal({
                                title: "Successfully Updated Your Password!",
                                icon: "success",
                                dangerMode: true,
                            }).then((willDelete) => {
                                if (willDelete) {
                                    location.href = "{{url('login')}}"
                                } else {
                                    location.href = "{{url('login')}}"
                                }
                            });


                        }

                    },
                    error: function (err) {
                        if (err.status == 422) { // when status code is 422, it's a validation issue
                            console.log(err.responseJSON);
                            $('#success_message').fadeIn().html(err.responseJSON.message);

                            // you can loop through the errors object and show it to the user
                            console.warn(err.responseJSON.errors);
                            // display errors on each form field
                            $.each(err.responseJSON.errors, function (i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.after($('<span style="color: red;">' + error[0] + '</span>'));
                            });
                        }
                    }

                });


            })


        });
    </script>
@endsection