    <footer class="footer">
        <div class="background banner-img bg-img bg-imgfixed" data-background="{{asset('frontend/img/banners/1.jpg')}}" data-overlay-dark="7">
            <div class="container">
                <div class="top">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="item">
                                <div class="logo mb-30"><img src="img/logo.png" alt=""></div>
                                <div class="social-icons mb-30">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="https://www.instagram.com/saltador_architects_indore?igsh=MWltZ2R1eTM3NXZyNA%3D%3D">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    
                             
                                    
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=61578240914887">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://wa.me/+916260476007" target="_blank">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="item text-end-left">
                                <h3 class="mb-30">Get in touch</h3>
                                <p class="mb-5"><i class="fa-solid fa-location-dot me-2"></i> UGF 5, Asha Complex,
                                    Arawali Marg, Indira Nagar, Lucknow.
                                </p>
                                <div class="phone mb-5"><a href="tel:+919754755616"><i
                                            class="fa-solid fa-phone me-2"></i> +91-97547-55616</a></div>
                                <div class="phone mb-5"><a href="tel:+919559476888"><i
                                            class="fa-solid fa-phone me-2"></i> +91-95594-76888</a></div>
                                <div class="mail"><a href="mailto:saltador.architect@gmail.com"><i
                                            class="fa-solid fa-envelope me-2"></i>saltador.architect@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="links">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>

                                {{-- Assuming you want the main services page or the first service --}}
                            

                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-end">
                            <p>Copyright 2026 by <a href="#">codeworldsol</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>




<!-- jQuery and Core Plugins -->
<script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-migrate-3.5.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/modernizr-2.6.2.min.js') }}"></script>
<!-- UI and Layout Plugins -->
<script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.isotope.v3.0.2.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- Animation and Scrolling -->
<script src="{{ asset('frontend/js/scrollIt.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
<!-- Popups and Video -->
<script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('frontend/js/YouTubePopUp.js') }}"></script>
<!-- Custom Script -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>