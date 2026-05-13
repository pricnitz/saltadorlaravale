@extends('layouts.app')
@section('content')

<div class="banner-header middle-height section-padding valign bg-img bg-imgfixed" data-overlay-dark="5"
        data-background="{{asset('frontend/img/banners/7.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Landscape Architecture</h3>
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
                    <span class="first-letter">O</span>ur landscape architecture services focus on
                    designing functional, sustainable, and visually engaging outdoor environments that
                    enhance the connection between nature, people, and built spaces.
                </p>

                <p>
                    We provide innovative landscape planning, site development, garden design,
                    environmental integration, and outdoor space solutions tailored to residential,
                    commercial, hospitality, and public projects.
                </p>
            </div>

            <div class="col-lg-5 offset-lg-1 col-md-12">
                <img class="vert-move" src="{{asset('frontend/img/banners/7.jpg')}}" alt="Landscape Architecture">
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
                            <h6 class="mb-1 text-warning">Site Planning</h6>
                            <p class="mb-0">
                                Develop strategic landscape layouts that maximize functionality,
                                aesthetics, and environmental balance.
                            </p>
                        </div>
                    </li>

                    <!-- 2 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Garden Design</h6>
                            <p class="mb-0">
                                Create attractive and relaxing garden spaces using plants, pathways,
                                water features, and natural elements.
                            </p>
                        </div>
                    </li>

                    <!-- 3 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Outdoor Space Development</h6>
                            <p class="mb-0">
                                Design parks, courtyards, terraces, and recreational spaces that
                                improve user experience and usability.
                            </p>
                        </div>
                    </li>

                    <!-- 4 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Sustainable Landscaping</h6>
                            <p class="mb-0">
                                Integrate eco-friendly solutions, water-efficient systems, and native
                                plant selections for sustainable outdoor environments.
                            </p>
                        </div>
                    </li>

                    <!-- 5 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Hardscape Design</h6>
                            <p class="mb-0">
                                Plan and design pathways, pavements, retaining walls, lighting,
                                seating, and outdoor structures for enhanced functionality.
                            </p>
                        </div>
                    </li>

                    <!-- 6 -->
                    <li class="d-flex">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Environmental Integration</h6>
                            <p class="mb-0">
                                Ensure harmony between built structures and natural surroundings
                                through thoughtful and balanced landscape solutions.
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
                            What does landscape architecture include?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Landscape architecture includes site planning, garden design,
                                    outdoor space development, sustainable landscaping, and
                                    environmental enhancement.
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion block">
                        <div class="acc-btn">
                            <span class="count">2.</span>
                            Do you provide customized landscape designs?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Yes, we create customized landscape solutions based on project
                                    requirements, site conditions, and client preferences.
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion block">
                        <div class="acc-btn">
                            <span class="count">3.</span>
                            Why is landscape architecture important?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Landscape architecture improves aesthetics, environmental quality,
                                    functionality, and overall user experience in outdoor spaces.
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