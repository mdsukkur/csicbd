<script src="{{asset('admin/app-assets/vendors/js/vendors.min.js?v='.time())}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/extensions/jquery.knob.min.js?v='.time())}}"></script>
<link rel="stylesheet" type="text/css"
      href="{{asset('admin/app-assets/fonts/simple-line-icons/style.min.css?v='.time())}}">
<script src="{{asset('admin/app-assets/js/core/app-menu.js?v='.time())}}"></script>
<script src="{{asset('admin/app-assets/js/core/app.js?v='.time())}}"></script>
<script src="{{asset('admin/app-assets/js/scripts/pages/dashboard-analytics.js?v='.time())}}"></script>


<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/datatables.min.js?v='.time())}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js?v='.time())}}"></script>
<script src="{{asset('admin/app-assets/js/scripts/tables/datatables-extensions/datatable-responsive.js?v='.time())}}"></script>


<script src="{{asset('admin/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js?v='.time())}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/forms/toggle/switchery.min.js?v='.time())}}"></script>
<script src="{{asset('admin/app-assets/js/scripts/forms/switch.js?v='.time())}}"></script>

<script src="{{asset('admin/app-assets/vendors/js/extensions/sweetalert.min.js')}}"></script>





<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/jszip.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.js')}}"></script>
<!--<script src="{{asset('admin/app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-print.js')}}"></script>-->



<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    (function ($) {
        $(document).ready(function () {

            $(".toggle-password").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
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
                                    location.href = "{{url('admin/login')}}"
                                } else {
                                    location.href = "{{url('admin/login')}}"
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

        })
    })(jQuery);









    @if(Session::has('store'))

    swal({
        title: "{{Session::get('store')}}",
        icon: "success",
        timer: 3000
    });

    @elseif(Session::has('update'))

    swal({
        title: "{{Session::get('update')}}",
        icon: "success",
        timer: 3000
    });

    @elseif(Session::has('destroy'))

    swal({
        title: "{{Session::get('destroy')}}",
        icon: "warning",
        timer: 3000
    });

    @endif
</script>
