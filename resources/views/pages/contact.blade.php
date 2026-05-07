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
                <div class="col-lg-4 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon fa-solid fa-envelope"></span>
                        <h5>E-mail address</h5>
                        <p>saltador.architect@gmail.com</p> <i class="numb fa-solid fa-envelope"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon fa-solid fa-location-dot"></span>
                        <h5>Our address</h5>
                        <p>address-Fourth Floor, Manas Mayfair 8/5, Indore, Madhya Pradesh 452002</p> <i
                            class="numb fa-solid fa-location-dot"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item "> <span class="icon  fa-solid fa-phone"></span>
                        <h5>Call us</h5>
                        <p>+91 8318896682</p> <i class="numb fa-solid fa-phone"></i>
                        <p>+91 6260476007</p> <i class="numb fa-solid fa-phone"></i>
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