<section id="about-us" class="mb-3 section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="section-header text-left">
                    <span class="section-before"></span>
                    <h2>
                        {{$aboutus->title ?? '----'}}
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.1s">
                        {{$aboutus->short_desc ?? '----'}}
                    </p>
                </div>
                <div class="section-info">
                    <p>
                        {{$aboutus->details ?? '----'}}
                    </p>
                </div>
                <a href="{{route('contact')}}" class="boxed-btn">Contact Us <i
                            class="icofont icofont-long-arrow-right"></i></a>
            </div>
            <div class="col-lg-6">
                <div class="video-section"
                     style="background: url({{asset("aboutus/$aboutus->image")}}) no-repeat center / cover">
                    {{--<div class="play-icon">--}}
                    {{--<a href="https://www.youtube.com/watch?v=pGbIOC83-So&amp;t=35s"--}}
                    {{--class="playbtn mfp-iframe"><img src="assets/img/aboutus/play-icon.png" alt=""></a>--}}
                    {{--</div>--}}
                    {{--<div class="watch-more">--}}
                    {{--<a href="#">Watch more <i class="fa fa-youtube"></i></a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</section>