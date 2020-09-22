@extends('admin.template_parts.master')

@section('title','Question Management')

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
                    <h3 class="content-header-title mb-0">Question Management</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Question Management</a>
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
                                                {{$allQuestion->where('status',1)->count() ?? 0}}
                                            </h3>
                                            <span>Answered Question</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-question success font-large-2 float-right"></i>
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
                                                {{$allQuestion->where('status',2)->count() ?? 0}}
                                            </h3>
                                            <span>Canceled Question</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-question warning font-large-2 float-right"></i>
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
                                    <h4 class="danger">Pending Question Lists</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <button class="btn btn-danger updateAll">Update All</button>

                                        <table class="table table-striped table-bordered dataex-html5-selectors dataTable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th style="width: 110px !important;">Company</th>
                                                <th style="width: 110px !important;">Category</th>
                                                <th style="width: 100px !important;">User Note</th>
                                                <th style="width: 100px !important;">TXN ID</th>
                                                <th>Note</th>
                                                <th>Answer</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if($allQuestion->isNotEmpty())
                                                @foreach($allQuestion as $id => $question)
                                                    @if($question->status == 0)

                                                        <tr>
                                                            <td>{{$id + 1}}</td>
                                                            <td>
                                                                {{date('d M, Y h:i a',strtotime($question->created_at))}}
                                                            </td>
                                                            <td>
                                                                {{$question->name ?? '--'}}
                                                            </td>
                                                            <td>
                                                                {{$question->phone ?? '--'}}
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
                                                                <input type="hidden" name="id[]"
                                                                       value="{{$question->id}}">
                                                                <textarea class="form-control" name="message[]"
                                                                          rows="5" placeholder="Note"></textarea>
                                                            </td>
                                                            <td>
                                                                <fieldset>
                                                                    <div class="float-left">
                                                                        <input type="checkbox"
                                                                               class="switch hidden"
                                                                               id="switch{{$question->id}}"
                                                                               name="answer[]"
                                                                               data-group-cls="btn-group-sm">
                                                                    </div>
                                                                </fieldset>
                                                            </td>
                                                            <td>
                                                                <span data-placement="top" data-toggle="tooltip"
                                                                      data-original-title="Cancel">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#cancel{{$question->id}}"
                                                                       class="btn btn-warning btn-xs mb-1">
                                                                        <i class="fa fa-close"></i>
                                                                    </a>
                                                                </span>

                                                                <span data-placement="top" data-toggle="tooltip"
                                                                      data-original-title="Delete">
                                                                    <a data-toggle="modal" data-backdrop="false"
                                                                       data-target="#delete{{$question->id}}"
                                                                       class="btn btn-danger btn-xs">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                        </tr>




                                                        <!-- Cancel Modal Start From Here -->

                                                        <div class="modal fade" id="cancel{{$question->id}}">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">
                                                                            Cancel This Question
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <form action="{{route('question.cancel',$category->id)}}"
                                                                          method="post">

                                                                        @csrf

                                                                        <div class="modal-body">

                                                                            <div class="form-group">
                                                                                <label>
                                                                                    Cancel Note : <span
                                                                                            class="danger"> *</span>
                                                                                </label>
                                                                                <textarea name="admin_note"
                                                                                          rows="7" class="form-control" required></textarea>
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

                                                        <div class="modal fade" id="delete{{$question->id}}">
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

                                                                    <form action="{{route('question.destroy',$question->id)}}"
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
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
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
                                                @foreach($allQuestion->where('status','!=',0) as $id => $question)

                                                    <tr>
                                                        <td>{{$id + 1}}</td>
                                                        <td>
                                                            {{date('d M, Y h:i a',strtotime($question->created_at))}}
                                                        </td>
                                                        <td>
                                                            {{$question->name ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$question->phone ?? '--'}}
                                                        </td>
                                                        <td>
                                                            {{$question->email ?? '--'}}
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
                <!--/ Configuration option table -->

            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script>
        $(document).ready(function () {

            answer = [];


            /* Answer Default Value set */
            @if($allQuestion->isNotEmpty())
            @foreach($allQuestion as $id => $question)
            @if($question->status == 0)

            $("#switch{{$question->id}}").val(0);

            @endif
            @endforeach
            @endif


            /* Change Answer Value */
            @if($allQuestion->isNotEmpty())
            @foreach($allQuestion as $id => $question)
            @if($question->status == 0)


            $("#switch{{$question->id}}").change(function () {
                if ($(this).prop("checked") == true) {
                    $(this).val(1);
                    // answer.push(1);
                } else {
                    $(this).val(0);
                    // answer.push(0);
                }
            });

            @endif
            @endforeach
            @endif


            $('.updateAll').on('click', function () {

                message = $("textarea[name='message[]']").map(function () {
                    return $(this).val();
                }).get();

                id = $("input[name='id[]']").map(function () {
                    return $(this).val();
                }).get();

                answer = $("input[name='answer[]']").map(function () {
                    return $(this).val();
                }).get();


                /* Submit Confirmation */

                swal({
                    title: "Are you sure You Want to Submit All Answer?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {

                        if (id.length > 0 ){


                            $('.loader').show();

                            $.ajax({
                                type: "PATCH",
                                url: "{{route('question.update',1)}}",
                                data: {
                                    // _token: CSRF_TOKEN,
                                    'id': id,
                                    'message': message,
                                    'answer': answer,
                                },
                                beforeSend: function () {
                                    $('.loader').show();

                                },
                                complete: function () {
                                    $('.loader').hide();

                                },
                                success: function (response) {

                                    swal({
                                        title: "All answer submitted successfully!",
                                        icon: "success"
                                    }).then(function () {
                                        location.reload();
                                    });

                                },
                                error: function (response) {

                                    swal({
                                        title: "Something wrong! Please check again",
                                        icon: "warning"
                                    }).then(function () {
                                        location.reload();
                                    });

                                }

                            });


                        }else {
                            swal({
                                title: "Updated data can't be empty!",
                                icon: "warning",
                                timer: 4000
                            });
                        }


                    } else {
                        swal({
                            title: "Your imaginary Question is safe!",
                            timer: 4000
                        });

                    }
                });


            })


        });
    </script>
@endsection
