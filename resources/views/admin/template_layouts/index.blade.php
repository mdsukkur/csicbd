@extends('admin.template_parts.master')

@section('title','Home')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card credit-card-wrapper card-wrapper">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="fa fa-money font-large-2 white" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="custom-card-text"><i class="icofont-taka "></i>
                                            {{$allUser->count()}}
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="custom-card-text card-total">Total Users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer custom-card-footer text-muted">
                                <a class="text-left" href="{{route('admin.usermanagement')}}">View Details</a>
                                <a href="{{route('admin.usermanagement')}}"><i class="ft-arrow-right text-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card debit-card-wrapper card-wrapper">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="fa fa-money font-large-2 white" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="custom-card-text"><i class="icofont-taka "></i>
                                            {{$allCompany->count()}}
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="custom-card-text card-total">Total Active Company</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer custom-card-footer text-muted">
                                <a class="text-left" href="{{route('company.index')}}">View Details</a>
                                <a href="{{route('company.index')}}"><i class="ft-arrow-right text-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card wallet-card-wrapper card-wrapper">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="fa fa-money font-large-2 white" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="custom-card-text"><i class="icofont-taka "></i>
                                            {{$allCategory->count()}}
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="custom-card-text card-total">Total Active Category</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer custom-card-footer text-muted">
                                <a class="text-left" href="{{route('category.index')}}">View Details</a>
                                <a href="{{route('category.index')}}"><i class="ft-arrow-right text-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card withdrawable-card-wrapper card-wrapper">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="fa fa-money font-large-2 white" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="custom-card-text"><i class="icofont-taka "></i>
                                            {{$allComplain->count()}}
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="custom-card-text card-total">Total Complain</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer custom-card-footer text-muted">
                                <a class="text-left" href="{{route('admin.complainmanagement')}}">View Details</a>
                                <a href="{{route('admin.complainmanagement')}}"><i class="ft-arrow-right text-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card withdrawable-card-wrapper card-wrapper">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="fa fa-money font-large-2 white" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="custom-card-text"><i class="icofont-taka "></i>
                                            {{$allQuestion->count()}}
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="custom-card-text card-total">Total Question</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer custom-card-footer text-muted">
                                <a class="text-left" href="{{route('admin.questionmanagement')}}">View Details</a>
                                <a href="{{route('admin.questionmanagement')}}"><i class="ft-arrow-right text-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Latest Questions Start From Here -->

                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">
                        <div class="card">
                            <div class="card-header border-0">
                                <h4 class="card-title">Latest Question</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div id="goal-list-scroll" class="table-responsive height-550 position-relative">

                                    <table class="table table-striped table-bordered dataex-res-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th style="width: 110px !important;">Company</th>
                                            <th style="width: 110px !important;">Category</th>
                                            <th style="width: 100px !important;">User Note</th>
                                            <th style="width: 100px !important;">TXN ID</th>
                                            <th>Answer</th>
                                            <th style="width: 110px !important;">Note</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @if($allQuestion->isNotEmpty())
                                            @foreach($allQuestion->take(20)->sortByDesc('id') as $id => $question)

                                                <tr>
                                                    <td>{{$id + 1}}</td>
                                                    <td>
                                                        {{date('d M, Y h:i a',strtotime($question->created_at))}}
                                                    </td>
                                                    <td>
                                                        {{$question->name ?? '--'}}
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
                                                        @if($question->answer === 0)

                                                            <span class="badge badge-danger">No</span>

                                                        @elseif($question->answer === 1)

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
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Latest Questions End Here -->


                <!-- Latest Complain Start From Here -->

                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">
                        <div class="card">
                            <div class="card-header border-0">
                                <h4 class="card-title">Latest Complain</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div id="goal-list-scroll" class="table-responsive height-550 position-relative">

                                    <table class="table table-striped table-bordered dataex-res-configuration">
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
                                            @foreach($allComplain->take(20)->sortByDesc('id') as $id => $complain)

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
                                                        @elseif($complain->status == 0)
                                                            <span class="badge badge-warning">
                                                                    pending
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

                <!-- Latest Complain End Here -->

            </div>
        </div>
    </div>

@endsection