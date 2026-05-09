@extends('layouts.app')
@section('content')

<div class="banner-header middle-height section-padding valign bg-img bg-imgfixed" data-overlay-dark="5"
    data-background="{{asset('frontend/img/banners/6.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Urban Planning</h3>
            </div>
        </div>
    </div>
</div>

<!-- Services Details -->
<div class="service-details section-padding pb-0">
    <div class="container">
        <div class="row mb-60">

            <div class="col-lg-6 col-md-12">
                <p class="mb-60">
                    <span class="first-letter">O</span>ur urban planning services focus on creating
                    sustainable, functional, and visually appealing urban environments that improve
                    community living and support long-term development goals.
                </p>

                <p>
                    We provide strategic planning, land use analysis, infrastructure planning,
                    environmental assessments, transportation planning, and development solutions
                    tailored to modern urban growth and future sustainability.
                </p>
            </div>

            <div class="col-lg-5 offset-lg-1 col-md-12">
                <img class="vert-move" src="{{asset('frontend/img/services/urbanplanning.jpg')}}" alt="Urban Planning">
            </div>

        </div>
    </div>
</div>

<!-- Services Details -->
<section class="service-details section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12 mb-30">

                <ul class="list-unstyled list">

                    <!-- 1 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Land Use Planning</h6>
                            <p class="mb-0">
                                Develop efficient land use strategies that balance residential,
                                commercial, industrial, and recreational spaces.
                            </p>
                        </div>
                    </li>

                    <!-- 2 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Master Planning</h6>
                            <p class="mb-0">
                                Create comprehensive master plans for cities, townships, and
                                communities to support organized urban development.
                            </p>
                        </div>
                    </li>

                    <!-- 3 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Infrastructure Planning</h6>
                            <p class="mb-0">
                                Plan transportation networks, utilities, public spaces, and essential
                                infrastructure for efficient city operations.
                            </p>
                        </div>
                    </li>

                    <!-- 4 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Environmental Analysis</h6>
                            <p class="mb-0">
                                Evaluate environmental impact and integrate sustainable practices into
                                urban development projects.
                            </p>
                        </div>
                    </li>

                    <!-- 5 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Transportation Planning</h6>
                            <p class="mb-0">
                                Design efficient transportation systems and mobility solutions that
                                improve connectivity and reduce congestion.
                            </p>
                        </div>
                    </li>

                    <!-- 6 -->
                    <li class="d-flex">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Community Development</h6>
                            <p class="mb-0">
                                Focus on creating safe, accessible, and community-oriented spaces that
                                enhance quality of life and urban experience.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="col-lg-5 offset-lg-1 col-md-12">

                <h4>Frequently Asked Questions</h4>

                <ul class="accordion-box clearfix">

                    <li class="accordion block">
                        <div class="acc-btn">
                            <span class="count">1.</span>
                            What is urban planning?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Urban planning is the process of designing and organizing land,
                                    infrastructure, transportation, and public spaces for sustainable
                                    urban growth.
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion block">
                        <div class="acc-btn">
                            <span class="count">2.</span>
                            Why is urban planning important?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Urban planning helps manage population growth, improve
                                    infrastructure, enhance sustainability, and create better living
                                    environments.
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion block">
                        <div class="acc-btn">
                            <span class="count">3.</span>
                            Do you provide sustainable planning solutions?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Yes, we integrate environmentally responsible and sustainable
                                    planning strategies into all urban development projects.
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </div>
</section>

@endsection