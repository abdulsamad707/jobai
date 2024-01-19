@extends('front_app.layouts.template')
@section('content')
<section class="container">
    <div class="py-5">
        <div class="section-header text-center" >
            <span class="subtitle ">Get in touch with us</span>
            <h2 class="title fw-bold display-4">Contact Us</h2>
        </div>
    </div>
</section>
<!-- Page Header section ending here -->

<!-- Map & address us Section Section Starts Here -->
<div class="map-address-section padding-tb py-5">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Get in touch with us</span>
            <h2 class="title">We're Always Eager To Hear From You!</h2>
        </div>
        <div class="section-wrapper">
            <div class="row flex-row-reverse">
                <div class="col-xl-4 col-lg-5 col-12">
                    <div class="contact-wrapper">
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <img src="assets/images/icon/01.png" alt="LabArtisan">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Office Address</h6>
                                <p>1201 park street, Fifth Avenue</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <img src="assets/images/icon/02.png" alt="LabArtisan">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Phone number</h6>
                                <p>+22698 745 632,02 982 745</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <img src="assets/images/icon/03.png" alt="LabArtisan">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Send email </h6>
                                <a href="mailto:info@gmail.com">Tezhly@gmil.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-thumb">
                                <img src="assets/images/icon/04.png" alt="LabArtisan">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Our website</h6>
                                <a href="#">www.Tezhly@gmil.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-12">
                    <div class="map-area">
                        <div class="maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2275990948147!2d90.38698831543141!3d23.739261895117753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c740f17d1%3A0xdd3daab8c90eb11f!2sLabArtisan!5e0!3m2!1sen!2sbd!4v1607313671993!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map & address us Section Section Ends Here -->

<!-- Contact us Section Section Starts Here -->
<div class="contact-section padding-tb">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Get in touch with Contact us</span>
            <h2 class="title">Fill The Form Below So We Can Get To Know You And Your Needs Better.</h2>
        </div>
        <div class="section-wrapper">
            <form class="contact-form" action="contact.php" id="contact-form" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Your Email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Phone" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Subject" id="subject" name="subject" required>
                </div>
                <div class="form-group w-100">
                    <textarea name="message" rows="8" id="message" placeholder="Your Message" required></textarea>
                </div>
                <div class="form-group w-100 text-center">
                    <button class="lab-btn"><span>Send our Message</span></button>
                </div>
            </form>
            <p class="form-message"></p>
        </div>
    </div>
</div>
@endsection
