@extends('layouts.app')
@section('content')

<div class="banner-header middle-height section-padding valign bg-img bg-imgfixed" data-overlay-dark="5"
    data-background="{{asset('frontend/img/banners/6.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Interior Design</h3>
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
                    <span class="first-letter">O</span>ur interior design services focus on creating
                    elegant, functional, and personalized spaces that reflect style, comfort, and
                    modern living standards.
                </p>

                <p>
                    We provide complete interior solutions including space planning, furniture layout,
                    material selection, lighting design, color coordination, and customized décor for
                    residential, commercial, hospitality, and office environments.
                </p>
            </div>

            <div class="col-lg-5 offset-lg-1 col-md-12">
                <img class="vert-move" src="{{asset('frontend/img/services/interior.jpg')}}" alt="Interior Design">
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
                            <h6 class="mb-1 text-warning">Space Planning</h6>
                            <p class="mb-0">
                                Design efficient and comfortable layouts that maximize functionality
                                and enhance the flow of interior spaces.
                            </p>
                        </div>
                    </li>

                    <!-- 2 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Furniture & Décor Selection</h6>
                            <p class="mb-0">
                                Choose furniture, textures, materials, and décor elements that align
                                with the project’s style and vision.
                            </p>
                        </div>
                    </li>

                    <!-- 3 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Lighting Design</h6>
                            <p class="mb-0">
                                Create balanced lighting concepts that improve ambiance, functionality,
                                and visual appeal within interiors.
                            </p>
                        </div>
                    </li>

                    <!-- 4 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Color & Material Coordination</h6>
                            <p class="mb-0">
                                Develop harmonious color palettes and material combinations to create
                                aesthetically pleasing interiors.
                            </p>
                        </div>
                    </li>

                    <!-- 5 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Custom Interior Solutions</h6>
                            <p class="mb-0">
                                Deliver personalized interior concepts tailored to client preferences,
                                lifestyle, and functional requirements.
                            </p>
                        </div>
                    </li>

                    <!-- 6 -->
                    <li class="d-flex">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Project Execution Support</h6>
                            <p class="mb-0">
                                Coordinate with contractors, suppliers, and vendors to ensure smooth
                                execution and high-quality finishing.
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
                            What types of interior projects do you handle?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    We handle residential, commercial, office, hospitality, and retail
                                    interior design projects of all sizes.
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion block">
                        <div class="acc-btn">
                            <span class="count">2.</span>
                            Do you provide customized interior designs?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Yes, we create fully customized interior concepts based on client
                                    preferences, space requirements, and budget.
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion block">
                        <div class="acc-btn">
                            <span class="count">3.</span>
                            Why is professional interior design important?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Professional interior design improves functionality, aesthetics,
                                    comfort, and overall value while creating well-balanced living and
                                    working spaces.
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