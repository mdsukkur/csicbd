<section id="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">

                    @if(($general->copyright ?? null) != null)

                        <p>{!! html_entity_decode($general->copyright ?? null) !!}</p>

                    @else

                        <p>©2019 All Rights Reserved - Designed and Developed by </p>

                    @endif
                    <a href="#" class="scrollup"><i class="fa fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>