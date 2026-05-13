@extends('layouts.app')
@section('content')

    <div class="banner-header section-padding valign bg-img bg-imgfixed" data-overlay-dark="7"
        data-background="{{asset('frontend/img/banners/2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Contact us</h3>
                </div>
            </div>
        </div>
    </div>

<div class="contact-box">
    <div class="container">
        <div class="row">

            <!-- Card 1 -->
            <div class="col-lg-6 col-md-6 animate-box" data-animate-effect="fadeInUp">
                <div class="item">
                    <span class="icon fa-solid fa-location-dot"></span>
                    <h5>Indore Office</h5>

                    <p>
                        <strong>Email:</strong>
                       saltador.architect@gmail.com
                    </p>

                    <p>
                        <strong>Address:</strong>
                        Old RTO office, 03, Babu Lalchand Chajlani Rd, above HDFC Bank, Ganesh Nagar, Revenue Colony, Indira Gandhi Nagar, Indore, Madhya Pradesh 452009
                    </p>

                    <p>
                        <strong>Phone:</strong>
                        +91 8318896682
                    </p>
                    <p>
                        <strong>Phone:</strong>
                        +91 6260476007
                    </p>

                    <i class="numb fa-solid fa-location-dot"></i>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-6 col-md-6 animate-box" data-animate-effect="fadeInUp">
                <div class="item">
                    <span class="icon fa-solid fa-location-dot"></span>
                    <h5>Lucknow Office</h5>
                    <p>
                        <strong>Email:</strong>
                        saltador.architect@gmail.com
                    </p>

                    <p>
                        <strong>Address:</strong>
                         UGF 5, Asha Complex, Arawali Marg, Indira Nagar, Lucknow.
                    </p>

                    <p>
                        <strong>Phone:</strong>
                        +91 9559476888
                    </p>

                    <i class="numb fa-solid fa-location-dot"></i>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Contact -->
    <div class="info-box section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title mb-30 text-center">Get in touch!</div>
                    <div class="contact-form">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                      <form method="POST" action="{{ route('contact.send') }}">
                            @csrf
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-icon">
                                        <i class="fa-regular fa-user"></i>
                                    </span>
                                    <input type="text" name="name" id="name" placeholder="Your name" required>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-icon">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                    <input type="email" name="email" id="email" placeholder="Your email" required>
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-icon">
                                        <i class="fa-solid fa-book"></i>
                                    </span>
                                    <input type="text" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="form-group form-textarea">
                                    <span class="form-icon">
                                        <i class="fa-regular fa-comment"></i>
                                    </span>
                                    <textarea name="message" id="message" cols="30" rows="3" placeholder="Message" required></textarea>
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <button class="durubtn">
                                    <span class="text-wrapper">
                                        <span class="text slide-up">
                                            <i class="fa-regular fa-paper-plane"></i> Send message
                                        </span>
                                        <span class="text slide-down">
                                            <i class="fa-regular fa-paper-plane"></i> Send message
                                        </span>
                                    </span>
                                </button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection