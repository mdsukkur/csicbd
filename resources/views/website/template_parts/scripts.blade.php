<!-- Scripts -->
<script src="{{asset('website/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('website/assets/js/popper.min.js')}}"></script>
<script src="{{asset('website/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('website/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('website/assets/js/wow.min.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.meanmenu.min.js')}}"></script>
{{--<script src="{{asset('website/assets/js/jquery.sticky.js')}}"></script>--}}
{{--<script src="{{asset('website/assets/js/jquery.magnific-popup.min.js')}}"></script>--}}
{{--<script src="{{asset('website/assets/js/wow.min.js')}}"></script>--}}

<!-- Smooth Scroll -->
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

<!-- Map Script -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>--}}
{{--<script src="{{asset('website/assets/js/map-script.js')}}"></script>--}}

<!-- Custom Script -->
<script src="{{asset('website/assets/js/custom.js')}}"></script>

{{--<script type="text/javascript" src="{{asset('website/demo/styleswitcher.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('website/demo/demo.js')}}"></script>

<script src="{{asset('admin/app-assets/vendors/js/extensions/sweetalert.min.js')}}"></script>

<script src="{{asset('admin/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('admin/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>

<script>
    (function ($) {
    $(document).ready(function () {

        // $('.save_changes').on('click', function () {

        //     // $(this).prop("disabled", true);

        //     $('.loader').fadeOut(500, function () {
        //         $('.loader').remove();
        //     });


        // });


        $(".toggle-password").click(function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });


        /* Contact Us */
        $("#contactUS").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "{{route('contactus.store')}}",
                type: 'POST',
                data:
                    {
                        name: $('#name').val(),
                        phone: $('#phone').val(),
                        email: $('#email').val(),
                        message: $('#message').val(),
                    },
                beforeSend: function () {
                    $('.preloader').show();

                },
                complete: function () {
                    $('.preloader').hide();

                },
                success: function (response) {

                    swal({
                        title: "Upload your information correctly. We will contact you shortly!",
                        icon: "success"
                    });

                    $('#name').val("");
                    $('#email').val("");
                    $('#phone').val("");
                    $('#message').val("");

                },
                error: function (response) {

                    swal({
                        title: "Something wrong! Please check again",
                        icon: "warning"
                    })

                }
            });
        });


    })
})(jQuery);


    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


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

@yield('scripts')