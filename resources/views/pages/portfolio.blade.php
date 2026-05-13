@extends('layouts.app')
@section('content')

    <div class="banner-header section-padding valign bg-img bg-imgfixed" data-overlay-dark="7"
        data-background="{{asset('frontend/img/banners/2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Our Portfolio</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio -->
    <div class="section-padding">
        <div class="container">
            <div class="masonry">

                <div class="item">
                    <img src="{{asset('frontend/img/portfolio/Commercial building at Benin.jpg')}}">
                    <div class="title">Commercial building at Benin</div>
                </div>



                <div class="item">
                    <img src="{{asset('frontend/img/portfolio/Residence at Mhow.png')}}">
                    <div class="title">Residence at Mhow</div>
                </div>

                <div class="item">
                    <img src="{{asset('frontend/img/portfolio/Residence at Mhow 2.png')}}">
                    <div class="title">Residence at Mhow 2</div>
                </div>


                <div class="item">
                    <img src="{{asset('frontend/img/portfolio/Proposed airport food court.jpg')}}">
                    <div class="title">Armada Center</div>
                </div>
                <div class="item">
                    <img src="{{asset('frontend/img/portfolio/Residence at Jabalpur.jpg')}}">
                    <div class="title">Residence at Jabalpur</div>
                </div>

            </div>
        </div>
    </div>
    <!-- Portfolio Carousel -->
    <section class="portfolio section-padding bg-darkbrown">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>I</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">Residence at Indore</h6>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="portfolio-container">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Residence in indore1.png')}}" alt="Residence in indore"> </div>
                                <div class="con">
                                    <div class="title">Living Space</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Residence in indore2.webp')}}" alt="Residence in indore"> </div>
                                <div class="con">
                                    <div class="title">Bedroom</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Residence at Indore 1.jpg')}}" alt="Residence at Indore"> </div>
                                <div class="con">
                                    <div class="title">Dining Space</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Residence at Indore 2.jpg')}}" alt="Residence at Indore"> </div>
                                <div class="con">
                                    <div class="title">Living Space</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Residence at Indore 3.jpg')}}" alt="Residence at Indore"> </div>
                                <div class="con">
                                    <div class="title">Living Space</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="{{asset('frontend/img/portfolio/Residence at Indore 4.jpg')}}" alt="Residence at Indore"> </div>
                                <div class="con">
                                    <div class="title">Bedroom</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Carousel -->
    <section class="portfolio section-padding bg-darkbrown">
        <div class="container">
            <div class="section-linetitle">
                <div class="d-flex align-items-center">
                    <div class="leter">
                        <h4>W</h4>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="title">
                    <h6 class="sub-title">Residence at Warangal</h6>
                </div>
            </div>
            <div class="row align-items-center">
    <div class="col-lg-12 col-md-12">
        <div class="portfolio-container">
            <div class="owl-carousel owl-theme">

                <div class="item">
                    <div class="img">
                        <img src="{{ asset('frontend/img/portfolio/Residence at Warangal.jpg') }}" alt="Residence at Warangal">
                    </div>

                    <div class="con">
                        <div class="title">Casa Minimal Kitchen</div>
                    </div>

                    {{-- <div class="more">
                        <a href="portfolio-single.html">
                            <span class="icon-wrap">
                                <span class="icon">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </span>
                            </span>
                        </a>
                    </div> --}}
                </div>

                <div class="item">
                    <div class="img">
                        <img src="{{ asset('frontend/img/portfolio/Residence at Warangal 3.jpg') }}" alt="Residence at Warangal">
                    </div>

                    <div class="con">
                        <div class="title">Vista Modern Villa</div>
                    </div>

                    {{-- <div class="more">
                        <a href="portfolio-single.html">
                            <span class="icon-wrap">
                                <span class="icon">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </span>
                            </span>
                        </a>
                    </div> --}}
                </div>

                <div class="item">
                    <div class="img">
                        <img src="{{ asset('frontend/img/portfolio/Residence at Warangal 2.jpg') }}" alt="Residence at Warangal">
                    </div>

                    <div class="con">
                        <div class="title">Armada Center</div>
                    </div>

                    {{-- <div class="more">
                        <a href="portfolio-single.html">
                            <span class="icon-wrap">
                                <span class="icon">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </span>
                            </span>
                        </a>
                    </div> --}}
                </div>

                <div class="item">
                    <div class="img">
                        <img src="{{ asset('frontend/img/portfolio/Residence at Warangal 4.jpg') }}" alt="Residence at Warangal">
                    </div>

                    <div class="con">
                        <div class="title">The Horizon Residence</div>
                    </div>

                    {{-- <div class="more">
                        <a href="portfolio-single.html">
                            <span class="icon-wrap">
                                <span class="icon">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </span>
                            </span>
                        </a>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
</div>
        </div>
    </section>

@endsection