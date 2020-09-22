@extends('admin.template_parts.master')

@section('title',"$userInfo->name Details")

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">{{$userInfo->name}} Details</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{$userInfo->name}} Details</a>
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
                                                {{$allQuestion->count() ?? 0}}
                                            </h3>
                                            <span>Total Question</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-question primary font-large-2 float-right"></i>
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
                                                {{$allQuestion->where('status',0)->count() ?? 0}}
                                            </h3>
                                            <span>Pending Question</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-question danger font-large-2 float-right"></i>
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
                                                {{$allComplain->count() ?? 0}}
                                            </h3>
                                            <span>Total Complain</span>
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
                                                {{$allComplain->where('status',0)->count() ?? 0}}
                                            </h3>
                                            <span>Pending Complain</span>
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

                {{-- All Question --}}
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="primary">All Question Lists</h4>
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
                                                <th style="width: 110px !important;">Company</th>
                                                <th style="width: 110px !important;">Category</th>
                                                <th style="width: 100px !important;">Your Note</th>
                                                <th style="width: 100px !important;">TXN ID</th>
                                                <th>Answer</th>
                                                <th style="width: 110px !important;">Note</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($allQuestion->isNotEmpty())
                                                @foreach($allQuestion as $id => $question)

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
                </section>



                {{-- All Complain --}}
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
                                                <th>Subject</th>
                                                <th>Admin Message</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($allComplain->isNotEmpty())
                                                @foreach($allComplain as $id => $complain)

                                                    <tr>
                                                        <td>{{$id + 1}}</td>
                                                        <td>
                                                            {{date('d M, Y h:i a',strtotime($complain->created_at))}}
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
                </section>

            </div>
        </div>
    </div>

@endsection
