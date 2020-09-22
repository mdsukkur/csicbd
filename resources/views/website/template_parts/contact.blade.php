<section class="" id="contact-area">
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7381.011510639291!2d91.81198259999998!3d22.334524400000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1571290580425!5m2!1sen!2sbd"
                width="100%" height="540" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div class="contact-box">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="contact-us-info">
                    <h3>Contact Us</h3>
                    <ul class="contact-info">

                        @if(($general->address ?? null) != null)

                            <li>
                                <i class="icofont icofont-location-pin"></i>
                                <p>{{$general->address ?? '--'}}</p>
                            </li>

                        @endif
                        @if(($general->email_1 ?? null) != null)

                            <li>
                                <i class="icofont icofont-email"></i>
                                <p>{{$general->email_1 ?? '--'}}
                                    <br> {{$general->email_2 ?? ''}}</p>
                            </li>

                        @endif
                        @if(($general->phone_1 ?? null) != null)

                            <li>
                                <i class="icofont icofont-ui-call"></i>
                                <p>{{$general->phone_1 ?? '--'}}
                                    <br> {{$general->phone_2 ?? ''}}</p>
                            </li>

                        @endif

                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="get-in-touch">
                    <h3>Get in Touch</h3>
                    <p>Feel free to contact with us</p>
                    <form id="contactUS">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your name"
                               required>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Your Phone Number"
                               required>
                        <input type="email" name="your_mail" class="form-control" id="email"
                               placeholder="Email here" required>
                        <textarea name="message" class="form-control" id="message" rows="1" placeholder="Type your message"
                                  required></textarea>
                        <button type="submit" class="boxed-btn"> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>