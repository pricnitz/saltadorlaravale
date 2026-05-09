@extends('layouts.app')
@section('content')

<div class="banner-header middle-height section-padding valign bg-img bg-imgfixed" data-overlay-dark="5"
    data-background="{{asset('frontend/img/banners/6.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>MEP Services</h3>
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
                    <span class="first-letter">O</span>ur MEP services focus on delivering efficient,
                    reliable, and sustainable mechanical, electrical, and plumbing solutions for
                    residential, commercial, and industrial projects.
                </p>

                <p>
                    We provide complete MEP planning, system design, installation coordination,
                    energy-efficient solutions, and technical support to ensure safe and smooth
                    building operations with high-performance standards.
                </p>
            </div>

            <div class="col-lg-5 offset-lg-1 col-md-12">
                <img class="vert-move" src="{{asset('frontend/img/services/mep.jpg')}}" alt="MEP Services">
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
                            <h6 class="mb-1 text-warning">Mechanical Systems</h6>
                            <p class="mb-0">
                                Design and implement HVAC, ventilation, and air conditioning systems
                                for efficient temperature control and indoor comfort.
                            </p>
                        </div>
                    </li>

                    <!-- 2 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Electrical Systems</h6>
                            <p class="mb-0">
                                Develop safe and reliable electrical layouts including lighting,
                                power distribution, backup systems, and energy-efficient solutions.
                            </p>
                        </div>
                    </li>

                    <!-- 3 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Plumbing Solutions</h6>
                            <p class="mb-0">
                                Provide advanced plumbing system planning for water supply,
                                drainage, sanitation, and sustainable water management.
                            </p>
                        </div>
                    </li>

                    <!-- 4 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Fire Safety Systems</h6>
                            <p class="mb-0">
                                Install and coordinate fire alarm, sprinkler, and protection systems
                                to ensure building safety and compliance.
                            </p>
                        </div>
                    </li>

                    <!-- 5 -->
                    <li class="d-flex mb-4">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">Energy Efficiency</h6>
                            <p class="mb-0">
                                Integrate energy-saving technologies and smart solutions to reduce
                                operational costs and improve sustainability.
                            </p>
                        </div>
                    </li>

                    <!-- 6 -->
                    <li class="d-flex">
                        <div class="list-text">
                            <h6 class="mb-1 text-warning">System Coordination</h6>
                            <p class="mb-0">
                                Ensure smooth coordination between mechanical, electrical, and plumbing
                                systems for efficient project execution.
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
                            What does MEP stand for?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    MEP stands for Mechanical, Electrical, and Plumbing services that
                                    are essential for building functionality and safety.
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion block">
                        <div class="acc-btn">
                            <span class="count">2.</span>
                            Why are MEP services important in construction?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    MEP systems ensure proper ventilation, electrical supply, water
                                    management, safety, and efficient building performance.
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion block">
                        <div class="acc-btn">
                            <span class="count">3.</span>
                            Do you provide customized MEP solutions?
                        </div>

                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Yes, we offer customized MEP designs and solutions based on
                                    project requirements, budget, and building type.
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