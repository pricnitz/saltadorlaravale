@extends('layouts.app')
@section('content')

    <div class="banner-header middle-height section-padding valign bg-img bg-imgfixed" data-overlay-dark="5"
        data-background="{{asset('frontend/img/banners/1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Architectural</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Details -->
    <div class="service-details section-padding pb-0">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-6 col-md-12">
                    <p class="mb-60"><span class="first-letter">A</span>Saltador provides pm-design programming, land
                        planning, master planning, strategic facility planning, strategic master planning and
                        procurement of development Incentives services to corporate, development and higher education
                        clients.</p>
                    <p>Our aim Is to create attractive, functional & safe urban environments linking buildings, spaces
                        and activities. We provide a range of services for the design, planning, and construction of
                        facilities in the urban environment, including:</p>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <img class="vert-move" src="{{asset('frontend/img/banners/1.jpg')}}" alt="Architect">
                </div>
            </div>
        </div>
    </div>

    <!-- Services Details -->
    <section class="service-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-30">
                    <!-- <h4 class="mb-4">Key Features</h4> -->

                    <ul class="list-unstyled list">

                        <!-- 1 -->
                        <li class="d-flex mb-4">
                            <!-- <div class="list-icon me-3">
                                <span class="fa-solid fa-check"></span>
                            </div> -->
                            <div class="list-text">
                                <h6 class="mb-1 text-warning">Pre-Design</h6>
                                <p class="mb-0">
                                    Integrate planning, urban design, architecture, landscape, and construction
                                    expertise
                                    to create comprehensive and sustainable development plans.
                                </p>
                            </div>
                        </li>

                        <!-- 2 -->
                        <li class="d-flex mb-4">
                            <!-- <div class="list-icon me-3">
                                <span class="fa-solid fa-check"></span>
                            </div> -->
                            <div class="list-text">
                                <h6 class="mb-1 text-warning">Sketch Design</h6>
                                <p class="mb-0">
                                    Conduct detailed urban design assessments including visual, spatial, and bulk
                                    analysis.
                                    Address key factors such as location, surroundings, streetscapes, circulation,
                                    climate,
                                    and legal planning requirements using diagrams and digital models.
                                </p>
                            </div>
                        </li>

                        <!-- 3 -->
                        <li class="d-flex mb-4">
                            <!-- <div class="list-icon me-3">
                                <span class="fa-solid fa-check"></span>
                            </div> -->
                            <div class="list-text">
                                <h6 class="mb-1 text-warning">Developed Design</h6>
                                <p class="mb-0">
                                    Collaborate with architects, planners, engineers, and consultants across all design
                                    stages.
                                    Conduct workshops and consultations to address social, economic, and environmental
                                    aspects
                                    while delivering innovative design solutions.
                                </p>
                            </div>
                        </li>

                        <!-- 4 -->
                        <li class="d-flex">
                            <!-- <div class="list-icon me-3">
                                <span class="fa-solid fa-check"></span>
                            </div> -->
                            <div class="list-text">
                                <h6 class="mb-1 text-warning">Documentation</h6>
                                <p class="mb-0">
                                    Evaluate the visual and environmental impact of developments, ensuring harmony with
                                    surrounding landscapes and built environments.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <!-- <div class="list-icon me-3">
                                <span class="fa-solid fa-check"></span>
                            </div> -->
                            <div class="list-text">
                                <h6 class="mb-1 text-warning">Contract Administration</h6>
                                <p class="mb-0">
                                    Evaluate the visual and environmental impact of developments, ensuring harmony with
                                    surrounding landscapes and built environments.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <!-- <div class="list-icon me-3">
                                <span class="fa-solid fa-check"></span>
                            </div> -->
                            <div class="list-text">
                                <h6 class="mb-1 text-warning">Contract Observation</h6>
                                <p class="mb-0">
                                    Evaluate the visual and environmental impact of developments, ensuring harmony with
                                    surrounding landscapes and built environments.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <h4>Frequently Asked Questions</h4>
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">1.</span> What does your design package include?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our packages cover concept development, space planning, material
                                        selection, and 3D visualization tailored to your needs.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">2.</span> How long does a typical project take?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Project duration depends on scope, but most designs are completed
                                        within 2 to 6 weeks efficiently.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">3.</span> Can I request changes during the design
                                process?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, all packages include a set number of revisions to ensure the
                                        design meets your expectations.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Next & Prev -->

@endsection