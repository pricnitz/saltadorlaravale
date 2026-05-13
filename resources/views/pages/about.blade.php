@extends('layouts.app')
@section('content')


    <div class="banner-header section-padding valign bg-img bg-imgfixed" data-overlay-dark="7" 
        data-background="{{asset('frontend/img/banners/2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>About us</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
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
                    <p>Saltador Architects, Our experienced professional teams provide overall planning and
                        co-ordination of a project from inception to completion. Irrespective of the scale or type of
                        project, Saltador Consultancy has the experience and resources to achieve clients' requirements
                        and deliver outcomes on time, within cost and in accordance with quality standards. Our
                        innovative concepts enable us to create an optimal standard of living with and Inside the
                        structures we design. Our architecture is not as an end in itself, but serves the needs of human
                        beings. It is our contribution to society, our part in making the world a better place to live
                        in.</p>

                    <p>For us, architecture means teamwork, discussion, and service based on an exceptional level of
                        mutual trust Continuous dialogue and close co-operation with individual clients and others
                        involved in planning enable us to Find rapid, rational solutions to even the most complex
                        problems. Yet we have always retained that individual and personal touch that ensures even quite
                        small or shared building projects are handled by a team of the right size, made up of the right
                        people.</p>

                </div>

                <div class="col-lg-5 offset-lg-2 col-md-12 d-flex">
                    <img src="{{asset('frontend/img/banners/3.jpg')}}" class="image-cover" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About 2 -->
    {{-- <section class="about section-padding bg-darkbrown">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>F</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">Founder.</h6>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <div class="image-wrapper" style="position: relative;"> <img class="img" src="img/about2.jpg"
                            alt="">
                        <a href="about.html" class="hover-this wow zoomIn circle-button-overlay" data-wow-delay=".7s">
                            <div class="circle-button in-bord hover-anim">
                                <div class="rotate-circle">
                                    <svg class="textcircle" viewBox="0 0 500 500">
                                        <defs>
                                            <path id="textcircle"
                                                d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z"></path>
                                        </defs>
                                        <text>
                                            <textPath xlink:href="#textcircle" startOffset="0"> Ornava Interior Design
                                            </textPath>
                                        </text>
                                    </svg>
                                </div>
                                <div class="in-circle text-center"> <img src="img/logo.png" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12 animate-box" data-animate-effect="fadeInRight">
                    <div class="section-title">Creative vision behind the design</div>
                    <p>Our mission is to plan for people, to create spaces for people to live in, and to make sparing
                        use of resources while maintaining a high level of design quality and environmental
                        compatibility.</p>
                    <ul class="page-list list-unstyled mb-25">
                        <li>
                            <div class="page-list-icon"> <i class="fa-solid fa-check"></i> </div>
                            <div class="page-list-text">
                                <p>Bespoke interior solutions.</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <i class="fa-solid fa-check"></i> </div>
                            <div class="page-list-text">
                                <p>Modern and timeless design vision.</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <i class="fa-solid fa-check"></i> </div>
                            <div class="page-list-text">
                                <p>Design that tells your story.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="about-bottom mt-30"> <img src="img/signature.svg" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-rol">Consulting Director</div>
                            <div class="about-name">Ar. Mayank Wankhede</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


@endsection