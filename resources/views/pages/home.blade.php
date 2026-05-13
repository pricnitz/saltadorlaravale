@extends('layouts.app')



@section('content')
  
  
    <div class="banner-header full-height valign bg-img bg-imgfixed" data-overlay-dark="7"
        data-background="{{asset('frontend/img/banners/1.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h6>Indore, Madhya Pradesh</h6>
                    <h2>Saltador Architect</h2>
                    <a href="{{route('portfolio')}}" class="durubtn4">
                        <span class="text-wrapper">
                            <span class="text slide-up">Explore project</span>
                            <span class="text slide-down">Explore project</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-3 offset-md-2 text-center">
                    <a href="{{route('portfolio')}}" class="hover-this circle-button-overlay">
                        <div class="circle-button in-bord hover-anim">
                            <div class="rotate-circle">
                                <svg class="textcircle safari-fix" viewBox="0 0 500 500">
                                    <defs>
                                        <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                        </path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#textcircle" startOffset="0">Villa Project completed
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                            <div class="in-circle text-center"><i class="fa-solid fa-check"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <a href="#" data-scroll-nav="1" class="mouse smoothscroll">
            <span class="mouse-icon"><span class="mouse-wheel"></span></span>
        </a>
    </div>

    <section class="about section-padding" data-scroll-index="1">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>A</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">About.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-30">
                    <div class="section-title">Building Modern Dreams</div>
                    <p>Saltador is an Indore based firm. We also have another office at Lucknow.</p>
                    <p>We specialize in all sorts of projects from architectural, interior, town planning and landscape.
                    </p>
                    <ul class="page-list list-unstyled mb-25">
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-circle-check"></span> </div>
                            <div class="page-list-text">
                                <p>Government/ private</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-circle-check"></span> </div>
                            <div class="page-list-text">
                                <p>Residential</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-circle-check"></span> </div>
                            <div class="page-list-text">
                                <p>Bungalow</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-circle-check"></span> </div>
                            <div class="page-list-text">
                                <p>Farmhouse</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-circle-check"></span> </div>
                            <div class="page-list-text">
                                <p>Interior Design</p>
                            </div>
                        </li>


                    </ul>
                    <a href="{{ route('about') }}" class="durubtn"> <span class="text-wrapper"><span class="text slide-up">Read
                                more</span><span class="text slide-down">Read more</span></span></a>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-12">
                    <div class="year15 line vert-move">
                        <div class="txt">Years of experience</div><span>15</span>
                    </div>
                    <img src="{{asset('frontend/img/banners/2.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

 <section class="services section-padding">
    <div class="container">
        <div class="section-linetitle">
            <div class="d-flex align-items-center">
                <div class="leter">
                    <h4>S</h4>
                </div>
                <div class="line"></div>
            </div>
            <div class="title">
                <h6 class="sub-title">Services.</h6>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">

                    <!-- Architecture -->
                    <div class="item mb-25">
                        <a href="{{ route('service.architect') }}">
                            <span class="arrow">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                        </a>

                        <div class="icon">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>

                        <h5>Architecture</h5>

                        <p>
                            Architectural designs that balance aesthetics, functionality,
                            and innovative thinking.
                        </p>
                    </div>

                    <!-- Interior Design -->
                    <div class="item mb-25">
                        <a href="{{ route('service.interior') }}">
                            <span class="arrow">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                        </a>

                        <div class="icon">
                            <i class="fa-solid fa-couch"></i>
                        </div>

                        <h5>Interior Design</h5>

                        <p>
                            We create elegant and functional interiors that reflect
                            your lifestyle and personal taste.
                        </p>
                    </div>

                    <!-- Urban Planning -->
                    <div class="item mb-25">
                        <a href="{{ route('service.urban') }}">
                            <span class="arrow">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                        </a>

                        <div class="icon">
                            <i class="fa-solid fa-city"></i>
                        </div>

                        <h5>Urban Planning</h5>

                        <p>
                            Sustainable urban planning solutions that improve community
                            living and environmental harmony.
                        </p>
                    </div>

                    <!-- Landscape Architecture -->
                    <div class="item mb-25">
                        <a href="{{ route('service.landscape') }}">
                            <span class="arrow">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                        </a>

                        <div class="icon">
                            <i class="fa-solid fa-map"></i>
                        </div>

                        <h5>Landscape Architecture</h5>

                        <p>
                            Creating harmonious outdoor environments that blend nature,
                            functionality, and modern design aesthetics.
                        </p>
                    </div>

                    <!-- Project Management -->
                    <div class="item mb-25">
                        <a href="{{ route('service.management') }}">
                            <span class="arrow">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                        </a>

                        <div class="icon">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>

                        <h5>Project Management</h5>

                        <p>
                            Professional project management services ensuring quality,
                            efficiency, and timely execution.
                        </p>
                    </div>

                    <!-- MEP Services -->
                    <div class="item mb-25">
                        <a href="{{ route('service.mep') }}">
                            <span class="arrow">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                        </a>

                        <div class="icon">
                            <i class="fa-solid fa-gears"></i>
                        </div>

                        <h5>MEP Services</h5>

                        <p>
                            Reliable mechanical, electrical, and plumbing solutions
                            designed for performance and sustainability.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="dots-half bg-img bg-imgfixed"
        data-overlay-dark="7"
        data-background="{{ asset('frontend/img/banners/3.jpg') }}">
    </div>
</section>

    <section class="portfolio2 section-padding bg-darkbrown">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>P</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">Portfolio.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio2-container">
                        <div class="owl-carousel owl-theme">
                            <div class="item mb-25">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Proposed airport food court.jpg')}}" alt="Residence at Indore 1.jpg"> </div>
                                <div class="icon-wrapper">
                                    <i class="fa-solid fa-arrow-up-right-from-square default-icon"></i>
                                    <a href="portfolio-single.html" class="hover-icon-link">
                                        <i class="fa-solid fa-arrow-up-right-from-square hover-icon"></i>
                                    </a>
                                </div>
                                <div class="con">
                                    <h5>Proposed Airport Food Court</h5>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div class="item mb-25">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Residence at Indore 1.jpg')}}" alt="Residence at Indore 1.jpg"> </div>
                                <div class="icon-wrapper">
                                    <i class="fa-solid fa-arrow-up-right-from-square default-icon"></i>
                                    <a href="portfolio-single.html" class="hover-icon-link">
                                        <i class="fa-solid fa-arrow-up-right-from-square hover-icon"></i>
                                    </a>
                                </div>
                                <div class="con">
                                    <h5>Residence at Indore</h5>
                                    <div class="line"></div>
                                </div>
                            </div>

                            <div class="item mb-25">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Residence at Mhow.png')}}" alt="Residence at Indore 1.jpg"> </div>
                                <div class="icon-wrapper">
                                    <i class="fa-solid fa-arrow-up-right-from-square default-icon"></i>
                                    <a href="portfolio-single.html" class="hover-icon-link">
                                        <i class="fa-solid fa-arrow-up-right-from-square hover-icon"></i>
                                    </a>
                                </div>
                                <div class="con">
                                    <h5>Residence at Mhow</h5>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div class="item mb-25">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Residence at Warangal 2.jpg')}}" alt="Residence at Indore 1.jpg"> </div>
                                <div class="icon-wrapper">
                                    <i class="fa-solid fa-arrow-up-right-from-square default-icon"></i>
                                    <a href="portfolio-single.html" class="hover-icon-link">
                                        <i class="fa-solid fa-arrow-up-right-from-square hover-icon"></i>
                                    </a>
                                </div>
                                <div class="con">
                                    <h5>Residence at Warangal</h5>
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials2 pt-80 mt-100 mb-0">
        <div class="container">
            <div class="bg-img bg-imgfixed" data-background="{{asset('frontend/img/banners/4.jpg')}}" data-overlay-dark="6">
                {{-- <div class="play-button">
                    <a href="https://youtu.be/XVM-4riPX4k" class="btn vid">
                        <svg width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <circle class="circle" cx="50" cy="50" r="48" stroke="white" stroke-width="2" fill="none" />
                        </svg>
                        <i class="fa-solid fa-play"></i>
                    </a>
                    <div class="text"><span>Watch the trailer</span></div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-60">
                    <div class="item-cover animate-box" data-animate-effect="fadeInLeft">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="cont">
                                    <span class="quote-icon"><img src="{{asset('frontend/img/svg/quote.svg')}}" alt=""></span>
                                    <p>Team is very professional and hard-working. They know what client wants actually through professional working. Clients are getting what they want very nice and effective team. Timely completion of the work. Whatever task was given very nice and effective designs as architect and completion of the work.</p>
                                    <div class="icons">
                                        <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="info">
                                        {{-- <div class="author-img valign">
                                            <div class="circle"><img src="img/team/team-04.jpg" alt=""></div>
                                        </div> --}}
                                        <div class="author-info valign">
                                            <div class="full-width">
                                                <h6>Girish Yati</h6>
                                                {{-- <p>Interior Consultant</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cont">
                                    <span class="quote-icon"><img src="{{asset('frontend/img/svg/quote.svg')}}" alt=""></span>
                                    <p>Our interior was done by saltador architects. The designs are too good. Everyone has appreciated our house. Team takes care that the budget and time should not increase. Professional team.</p>
                                    <div class="icons">
                                        <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="info">
                                        {{-- <div class="author-img valign">
                                            <div class="circle"><img src="img/team/team-04.jpg" alt=""></div>
                                        </div> --}}
                                        <div class="author-info valign">
                                            <div class="full-width">
                                                <h6>Yash Salvi</h6>
                                                {{-- <p>Interior Consultant</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cont">
                                    <span class="quote-icon"><img src="{{asset('frontend/img/svg/quote.svg')}}" alt=""></span>
                                    <p>We had an amazing experience with the team. They understood our requirements perfectly and delivered exactly what we imagined. The execution was smooth and hassle-free. Highly recommended for anyone looking for quality interior work.</p>
                                    <div class="icons">
                                        <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="info">
                                        <div class="author-info valign">
                                            <div class="full-width">
                                                <h6>Rohit Sharma</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="cont">
                                    <span class="quote-icon"><img src="{{asset('frontend/img/svg/quote.svg')}}" alt=""></span>
                                    <p>The team delivered excellent work within the promised timeline. Their design ideas are creative and practical. Communication was clear throughout the project. Overall, a very satisfying experience working with them.</p>
                                    <div class="icons">
                                        <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="info">
                                        <div class="author-info valign">
                                            <div class="full-width">
                                                <h6>Neha Verma</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ornava-text">SALTADOR</div>
    </section>

    <!-- <section class="team section-padding">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>T</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">Team.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12 mb-30">
                    <div class="section-title">Our Design Experts</div>
                    <a href="team.html" class="durubtn"> <span class="text-wrapper"><span class="text slide-up">All
                                team</span><span class="text slide-down">All team</span></span></a>
                </div>
                <div class="col-lg-8 offset-lg-1 col-md-12">
                    <div class="team-container">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="img"><img src="img/team/team-01.jpg" alt=""></div>
                                <div class="bg"></div>
                                <div class="con">
                                    <a href="team-details.html">
                                        <div class="title"><span>Ar. Ajay Sharma</span></div>
                                        <div class="subtitle"><span>Managing Director</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"><img src="img/team/team-01.jpg" alt=""></div>
                                <div class="bg"></div>
                                <div class="con">
                                    <a href="team-details.html">
                                        <div class="title"><span>Ar. Mayank Wankhede</span></div>
                                        <div class="subtitle"><span>Consulting Director</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"><img src="img/team/team-01.jpg" alt=""></div>
                                <div class="bg"></div>
                                <div class="con">
                                    <a href="team-details.html">
                                        <div class="title"><span>Ar. Abhishek Singh</span></div>
                                        <div class="subtitle"><span>Executive Director</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"><img src="img/team/team-01.jpg" alt=""></div>
                                <div class="bg"></div>
                                <div class="con">
                                    <a href="team-details.html">
                                        <div class="title"><span>Ar. Prakash Pratap Singh</span></div>
                                        <div class="subtitle"><span>Designing Director</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="blog section-padding">
        <div class="container">
            {{-- <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>B</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">Blog.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item mt-10 mb-30">
                            <div class="img"> <img src="img/07.jpg" alt=""></div>
                            <div class="cont">
                                <h4><a href="post.html">Modern Bathroom Details</a></h4>
                                <div class="author">
                                    <div>
                                        <h5><i class="fa-solid fa-calendar-days"></i> 29 Apr 2026</h5>
                                        <h5><i class="fa-solid fa-user"></i> by Martin Dan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="more">
                                <a href="post.html"> <span class="icon-wrap"><span class="icon"><i
                                                class="fa-solid fa-arrow-up-right-from-square"></i></span> </span></a>
                            </div>
                        </div>
                        <div class="item mt-10 mb-30">
                            <div class="img"> <img src="img/07.jpg" alt=""></div>
                            <div class="cont">
                                <h4><a href="post.html">Modern Bathroom Details</a></h4>
                                <div class="author">
                                    <div>
                                        <h5><i class="fa-solid fa-calendar-days"></i> 29 Apr 2026</h5>
                                        <h5><i class="fa-solid fa-user"></i> by Martin Dan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="more">
                                <a href="post.html"> <span class="icon-wrap"><span class="icon"><i
                                                class="fa-solid fa-arrow-up-right-from-square"></i></span> </span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>





@endsection