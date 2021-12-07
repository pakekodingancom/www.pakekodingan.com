@extends('template/template')

@section('content')
    <!--hero section start-->
    <section class="hero-section ptb-120 min-vh-100 d-flex align-items-center bg-dark text-white position-relative overflow-hidden" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom right">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="hero-content-wrap">
                    <h5 class="text-warning">#1 Software Company In World</h5>
                    <h1 class="fw-bold display-5">Advanced Feature to Grow Your Business</h1>
                    <p class="lead">Proactively coordinate quality quality vectors vis-a-vis supply chains engage client-centric web services.</p>
                    <div class="action-btns mt-5">
                        <a href="request-demo.html" class="btn btn-primary me-3">Request For Demo</a>
                        <a href="about-us.html" class="btn btn-outline-light">Learn More</a>
                    </div>
                </div>
                <div class="row justify-content-lg-start mt-60">
                    <h6 class="text-white-70 mb-2">Our Top Clients:</h6>
                    <div class="col-4 col-sm-3 my-2 ps-lg-0">
                        <img src="assets/img/clients/client-1.svg" alt="client" class="img-fluid">
                    </div>
                    <div class="col-4 col-sm-3 my-2">
                        <img src="assets/img/clients/client-2.svg" alt="client" class="img-fluid">
                    </div>
                    <div class="col-4 col-sm-3 my-2">
                        <img src="assets/img/clients/client-3.svg" alt="client" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 mt-5 mt-lg-0">
                <div class="animated-img-wrap">
                    <!--animated shape start-->
                    <ul class="animate-element parallax-element animated-hero-1">
                        <li class="layer" data-depth="0.02">
                            <img src="{{ asset('assets/img/screen/animated-screen-2.svg') }}" alt="shape" class="img-fluid position-absolute type-0">
                        </li>
                    </ul>
                    <!--animated shape end-->
                    <img src="{{ asset('assets/img/screen/animated-screen-1.svg') }}" alt="shape" class="position-relative img-fluid">
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--hero section end-->

    <!--feature promo start-->
    <section class="promo-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-heading text-center">
                    <h2>We Help you Stay Connected</h2>
                    <p>Dynamically initiate market positioning total linkage with clicks-and-mortar technology procrastinate compelling data for markets.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="promo-single position-relative text-center bg-white custom-shadow rounded-custom p-5 mb-4">
                    <div class="promo-icon mb-32">
                        <i class="fas fa-wifi text-primary fa-3x"></i>
                    </div>
                    <div class="promo-info">
                        <h3 class="h5">Stay Connected</h3>
                        <p class="mb-0">Interactively disintermediate resource maximizing portals vertical models maintainable systems.</p>
                    </div>
                    <!--pattern start-->
                    <div class="dot-shape-bg position-absolute z--1 left--40 top--40">
                        <img src="{{ asset('assets/img/shape/dot-big-square.svg') }}" alt="shape">
                    </div>
                    <!--pattern end-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="promo-single position-relative text-center bg-white custom-shadow rounded-custom p-5 mb-4">
                    <div class="promo-icon mb-32">
                        <i class="fas fa-user-friends text-success fa-3x"></i>
                    </div>
                    <div class="promo-info">
                        <h3 class="h5">Encourage Participation</h3>
                        <p class="mb-0">Interactively disintermediate resource maximizing portals vertical models maintainable systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="promo-single position-relative text-center bg-white custom-shadow rounded-custom p-5 mb-4">
                    <div class="promo-icon mb-32">
                        <i class="fas fa-bezier-curve text-danger fa-3x"></i>
                    </div>
                    <div class="promo-info">
                        <h3 class="h5">Build Connections</h3>
                        <p class="mb-0">Interactively disintermediate resource maximizing portals vertical models maintainable systems.</p>
                    </div>
                    <!--pattern start-->
                    <div class="dot-shape-bg position-absolute z--1 right--40 bottom--40">
                        <img src="{{ asset('assets/img/shape/dot-big-square.svg') }}" alt="shape">
                    </div>
                    <!--pattern end-->
                </div>
            </div>
        </div>
        <div class="customer-section pt-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="customer-logos-grid text-center">
                            <img src="{{ asset('assets/img/clients/client-logo-1.svg') }}" width="150" alt="clients logo" class="img-fluid p-1 px-md-2 p-lg-3 m-auto">
                            <img src="{{ asset('assets/img/clients/client-logo-2.svg') }}" width="150" alt="clients logo" class="img-fluid p-1 px-md-2 p-lg-3 m-auto">
                            <img src="{{ asset('assets/img/clients/client-logo-3.svg') }}" width="150" alt="clients logo" class="img-fluid p-1 px-md-2 p-lg-3 m-auto">
                            <img src="{{ asset('assets/img/clients/client-logo-4.svg') }}" width="150" alt="clients logo" class="img-fluid p-1 px-md-2 p-lg-3 m-auto">
                            <img src="{{ asset('assets/img/clients/client-logo-5.svg') }}" width="150" alt="clients logo" class="img-fluid p-1 px-md-2 p-lg-3 m-auto">
                            <img src="{{ asset('assets/img/clients/client-logo-6.svg') }}" width="150" alt="clients logo" class="img-fluid p-1 px-md-2 p-lg-3 m-auto">
                            <img src="{{ asset('assets/img/clients/client-logo-7.svg') }}" width="150" alt="clients logo" class="img-fluid p-1 px-md-2 p-lg-3 m-auto">
                            <img src="{{ asset('assets/img/clients/client-logo-8.svg') }}" width="150" alt="clients logo" class="img-fluid p-1 px-md-2 p-lg-3 m-auto">
                        </div>
                        <p class="text-center mt-5 mb-0 h6">Trusted More than 25,00+ Companies Around the World</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--feature promo end-->

    <!--feature tab section start-->
    <section class="feature-tab-section ptb-120 bg-light">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center">
                    <h4 class="h5 text-primary">Features</h4>
                    <h2>Powerful Advanced Features</h2>
                    <p>Dynamically initiate market positioning total linkage with clicks-and-mortar technology
                        progressively procrastinate compelling.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center feature-tab-list-2 mb-0" id="nav-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1" role="tab" aria-selected="false">
                            AI & Data Science
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-2" data-bs-toggle="tab" data-bs-target="#tab-2" role="tab" aria-selected="false">
                            Automation Power
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-3" data-bs-toggle="tab" data-bs-target="#tab-3" role="tab" aria-selected="false">
                            Advanced Technology
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade pt-60 active show" id="tab-1" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-5">
                                <div class="feature-tab-info">
                                    <h3>AI & Data Science</h3>
                                    <p>Continually network effective bandwidth whereas goal-oriented schemas.
                                        Intrinsicly incentivize corporate synergy with accurate task bricks-and-clicks leadership skills . </p>
                                    <p>Conveniently develop innovative infomediaries for
                                        enabled functionalities. Dynamically coordinate leading-edge
                                        after virtual potentialities drive multidisciplinary infrastructures.</p>
                                    <a href="about-us.html" class="read-more-link text-decoration-none mt-4 d-block">Know More About Us
                                        <i class="far fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <img src="{{ asset('assets/img/screen/widget-12.png') }}" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-2" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-5">
                                <img src="{{ asset('assets/img/screen/widget-8.png') }}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                            </div>
                            <div class="col-lg-5">
                                <div class="feature-tab-info">
                                    <h3>Automation Power</h3>
                                    <p>Conveniently develop innovative infomediaries for
                                        enabled functionalities. Dynamically coordinate leading-edge
                                        corporate synergy
                                        after virtual potentialities.</p>
                                    <p>Continually network effective bandwidth whereas goal-oriented schemas.
                                        Intrinsicly with accurate meta-services.
                                        Rapidiously parallel task bricks-and-clicks leadership skills with
                                        revolutionary. </p>
                                    <a href="about-us.html" class="read-more-link text-decoration-none mt-4 d-block">Know More About Us
                                        <i class="far fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-60" id="tab-3" role="tabpanel">
                        <div class="row justify-content-center align-items-center justify-content-around">
                            <div class="col-lg-5">
                                <div class="feature-tab-info">
                                    <h3>Advanced Technology</h3>
                                    <p>Intrinsicly incentivize corporate synergy with accurate meta-services.
                                        Rapidiously parallel task bricks-and-clicks. Leadership skills with
                                        revolutionary convergence conveniently develop.</p>
                                    <p>Continually expedite business systems without premier testing procedures
                                        architect principle-centered e-tailers for progressive maintain open-source solutions. </p>
                                    <a href="about-us.html" class="read-more-link text-decoration-none mt-4 d-block">Know More About Us
                                        <i class="far fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <img src="{{ asset('assets/img/screen/widget-11.png') }}" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--feature tab section end-->

    <!--feature tab section start-->
    <section class="feature-section-two ptb-120">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="feature-content-wrap">
                    <div class="section-heading">
                        <h2>We are development experts on all technologies</h2>
                        <p>Quickly incubate functional channels with multidisciplinary architectures authoritatively
                            fabricate formulate exceptional innovation.</p>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-start mb-4">
                            <div class="icon-box bg-primary rounded me-4">
                                <i class="fas fa-bezier-curve text-white"></i>
                            </div>
                            <div class="icon-content">
                                <h3 class="h5">Pixel Perfect Design</h3>
                                <p>Progressively foster enterprise-wide systems whereas equity invested
                                    web-readiness harness installed expedite virtual networks.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="icon-box bg-danger rounded me-4">
                                <i class="fas fa-fingerprint text-white"></i>
                            </div>
                            <div class="icon-content">
                                <h3 class="h5">Unique &amp; Minimal Design</h3>
                                <p>Dramatically administrate progressive metrics without error-free globally
                                    simplify standardized plagiarize technically sound.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4 mb-lg-0">
                            <div class="icon-box bg-dark rounded me-4">
                                <i class="fas fa-headset text-white"></i>
                            </div>
                            <div class="icon-content">
                                <h3 class="h5">24/7 Free Online Support</h3>
                                <p>Interactively whiteboard transparent testing procedures before
                                    bricks-and-clicks initiatives competencies.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="feature-img-wrap">
                    <img src="{{ asset('assets/img/feature-hero-img.svg') }}" alt="feature image" class="img-fluid rounded-custom">
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="why-choose-us pt-60 pb-120">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-5 col-md-7 order-1 order-lg-0">
                <div class="why-choose-img position-relative">
                    <img src="{{ asset('assets/img/feature-hero-img-2.svg') }}" class="img-fluid" alt="duel-phone">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                <div class="why-choose-content">
                    <div class="mb-32">
                        <h2>We run all kinds of services in form of software</h2>
                        <p>Conceptualize multimedia based ROI and wireless intellectual capital. Dramatically seize
                            visionary technologies whereas interactive value. </p>
                    </div>
                    <ul class="list-unstyled d-flex flex-wrap list-two-col">
                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Thought leadership</li>
                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Personal branding</li>
                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Modernized prospecting</li>
                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Better win rates</li>
                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Showcasing success</li>
                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Sales compliance</li>
                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Manage smartly</li>
                        <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Communicate fast</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--feature tab section end-->

    <!--cat start-->
    <section class="cta-section bg-dark text-white ptb-120 position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-12">
                <div class="position-relative z-5">
                    <h2>Actionable Reports to Grow your Business</h2>
                    <p>Conveniently syndicate client-centric users for transparent scenarios. Uniquely evolve
                        partnerships rather than cross-platform interfaces.</p>
                    <a href="#" class="btn btn-primary mt-4">Get Start Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row align-items-center justify-content-center position-relative z-2">
                    <div class="col-md-6">
                        <div class="cta-card rounded-custom text-center shadow p-5 bg-white my-4">
                            <h3 class="display-5 fw-bold">9/10</h3>
                            <p class="mb-0">Overall our customer satisfaction score</p>
                        </div>
                        <div class="cta-card rounded-custom text-center shadow p-5 bg-white my-4">
                            <h3 class="display-5 fw-bold">15K+</h3>
                            <p class="mb-0">Happy customer in worldwide</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cta-card rounded-custom text-center shadow p-5 bg-white">
                            <h3 class="display-5 fw-bold">95%</h3>
                            <p class="mb-0">Our Customer customer satisfaction score</p>
                        </div>
                    </div>
                    <div class="bg-circle rounded-circle position-absolute z--1">
                        <img src="{{ asset('assets/img/shape/blob.svg') }}" alt="feature image" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-30"></div>
        <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning left-5"></div>
    </div>
    </section>
    <!--cat end-->

    <!--our work process start-->
    <section class="work-process ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center">
                    <h4 class="h5 text-primary">Process</h4>
                    <h2>We Follow Our Work Process</h2>
                    <p>Conveniently mesh cooperative services via magnetic outsourcing. Dynamically grow functionalized value whereas accurate e-commerce. </p>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-6 col-lg-3">
                <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0">
                    <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                        <span class="h2 mb-0 text-primary fw-bold">1</span>
                    </div>
                    <h3 class="h5">Research</h3>
                    <p class="mb-0">Uniquely pursue restore efficient for initiatives expanded.</p>
                </div>
            </div>
            <div class="dots-line first"></div>
            <div class="col-md-6 col-lg-3">
                <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0">
                    <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                        <span class="h2 mb-0 text-primary fw-bold">2</span>
                    </div>
                    <h3 class="h5">Designing</h3>
                    <p class="mb-0">Restore efficient human pursue for compelling initiatives.</p>
                </div>
            </div>
            <div class="dots-line first"></div>
            <div class="col-md-6 col-lg-3">
                <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 mb-md-0">
                    <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                        <span class="h2 mb-0 text-primary fw-bold">3</span>
                    </div>
                    <h3 class="h5">Building</h3>
                    <p class="mb-0">Continually enhance pursue compelling initiatives enhance.</p>
                </div>
            </div>
            <div class="dots-line first"></div>
            <div class="col-md-6 col-lg-3">
                <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-0">
                    <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                        <span class="h2 mb-0 text-primary fw-bold">4</span>
                    </div>
                    <h3 class="h5">Deliver</h3>
                    <p class="mb-0">Uniquely for compelling initiatives expanded interactive.</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--our work process end-->

    <!--customer review tab section start-->
    <section class="testimonial-section ptb-120 bg-light">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center">
                    <h4 class="h5 text-primary">Testimonial</h4>
                    <h2>What They Say About Us</h2>
                    <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets pontificate alternative architectures with accurate schemas.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative w-100">
                    <div class="swiper-container testimonialSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                <div class="d-flex mb-32 align-items-center">
                                    <img src="{{ asset('assets/img/testimonial/1.jpg') }}" class="img-fluid me-3 rounded" width="60" alt="user">
                                    <div class="author-info">
                                        <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                        <small>Founder and CEO at Amaara Herbs</small>
                                    </div>
                                </div>
                                <blockquote>
                                    <h6>The Best Template You Got to Have it!</h6>
                                    Globally network long-term high-impact schemas vis-a-vis distinctive e-commerce
                                    cross-media infrastructures rather than ethical
                                </blockquote>
                                <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                                <img src="{{ asset('assets/img/testimonial/quotes.svg') }}" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                            </div>
                            <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                <div class="d-flex mb-32 align-items-center">
                                    <img src="{{ asset('assets/img/testimonial/3.jpg') }}" class="img-fluid me-3 rounded" width="60" alt="user">
                                    <div class="author-info">
                                        <h6 class="mb-0">Oberoi R.</h6>
                                        <small>CEO at Herbs</small>
                                    </div>
                                </div>
                                <blockquote>
                                    <h6>Embarrassed by the First Version.</h6>
                                    Dynamically create innovative core competencies with effective best
                                    practices promote innovative infrastructures.
                                </blockquote>
                                <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                                <img src="{{ asset('assets/img/testimonial/quotes.svg') }}" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                            </div>
                            <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                <div class="d-flex mb-32 align-items-center">
                                    <img src="{{ asset('assets/img/testimonial/2.jpg') }}" class="img-fluid me-3 rounded" width="60" alt="user">
                                    <div class="author-info">
                                        <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                        <small>Founder and CEO</small>
                                    </div>
                                </div>
                                <blockquote>
                                    <h6>Amazing Quiety template!</h6>
                                    Appropriately negotiate interactive niches rather than parallel strategic theme incubate premium total linkage areas.
                                </blockquote>
                                <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                                <img src="{{ asset('assets/img/testimonial/quotes.svg') }}" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                            </div>
                            <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                <div class="d-flex mb-32 align-items-center">
                                    <img src="{{ asset('assets/img/testimonial/4.jpg') }}" class="img-fluid me-3 rounded" width="60" alt="user">
                                    <div class="author-info">
                                        <h6 class="mb-0">Joan Dho</h6>
                                        <small>Founder and CTO</small>
                                    </div>
                                </div>
                                <blockquote>
                                    <h6>Best Template for SAAS Company!</h6>
                                    Dynamically create innovative core competencies with effective best
                                    practices promote innovative infrastructures.
                                </blockquote>
                                <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                                <img src="{{ asset('assets/img/testimonial/quotes.svg') }}" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                            </div>
                            <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                <img src="{{ asset('assets/img/testimonial/quotes-dot.svg') }}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                <div class="d-flex mb-32 align-items-center">
                                    <img src="{{ asset('assets/img/testimonial/5.jpg') }}" class="img-fluid me-3 rounded" width="60" alt="user">
                                    <div class="author-info">
                                        <h6 class="mb-0">Ranu Mondal</h6>
                                        <small>Lead Developer</small>
                                    </div>
                                </div>
                                <blockquote>
                                    <h6>It is undeniably good!</h6>
                                    Rapidiously supply client-centric e-markets and maintainable processes progressively engineer
                                </blockquote>
                                <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                                <img src="{{ asset('assets/img/testimonial/quotes.svg') }}" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                            </div>
                        </div>
                    </div>
                    <span class="swiper-button-next"></span>
                    <span class="swiper-button-prev"></span>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--customer review tab section end-->

    <!--cat subscribe start-->
    <section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="subscribe-info-wrap text-center position-relative z-2">
                    <div class="section-heading">
                        <h4 class="h5 text-warning">Let's Try! Get Free Support</h4>
                        <h2>Start Your 14-Day Free Trial</h2>
                        <p>We can help you to create your dream website for better business revenue.</p>
                    </div>
                    <div class="form-block-banner mw-60 m-auto mt-5">
                        <form id="email-form2" name="email-form" class="subscribe-form d-flex">
                            <input type="email" class="form-control me-2" name="Email" data-name="Email" placeholder="Your email" id="Email2" required="">
                            <input type="submit" value="Join!" data-wait="Please wait..." class="btn btn-primary">
                        </form>
                    </div>
                    <ul class="nav justify-content-center subscribe-feature-list mt-3">
                        <li class="nav-item">
                            <span><i class="fad fa-dot-circle text-primary me-2"></i>Get our updated</span>
                        </li>
                        <li class="nav-item">
                            <span><i class="fad fa-dot-circle text-primary me-2"></i>Notify new product</span>
                        </li>
                        <li class="nav-item">
                            <span><i class="fad fa-dot-circle text-primary me-2"></i>Latest news</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
        <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
    </div>
    </section>
    <!--cat subscribe end-->

    <!--integration section start-->
    <section class="integration-section  ptb-120">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading">
                    <h4 class="h5 text-primary">Integration</h4>
                    <h2>We Collaborate with Top Software Company</h2>
                    <p>Dynamically pursue convergence rather than 24/7 process improvements
                        develop end-to-end customer service action items.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="text-lg-end mb-5 mb-lg-0">
                    <a href="integrations.html" class="btn btn-primary">View All Integrations</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="integration-wrapper position-relative w-100">
                    <!--animated shape start-->
                    <ul class="position-absolute animate-element parallax-element shape-service z--1">
                        <li class="layer" data-depth="0.03">
                            <img src="{{ asset('assets/img/shape/dot-dot-wave-shape.svg') }}" alt="shape" class="img-fluid position-absolute color-shape-3">
                        </li>
                        <li class="layer" data-depth="0.03">
                            <img src="{{ asset('assets/img/color-shape/feature-3.svg') }}" alt="shape" class="img-fluid position-absolute color-shape-3">
                        </li>
                    </ul>
                    <!--animated shape end-->
                    <ul class="integration-list list-unstyled mb-0">
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/airbnb.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/figma.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/facebook.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/sales-force.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/atlassian.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/dropbox-2.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/dynamic-365.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/erecruiter.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/evernote.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/google-icon.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>

                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/slack.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>

                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/google-analytics.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>

                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/google-drive.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>

                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/hubspot.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>

                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/instagram.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/linkedin.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/mailchimp.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                        <li>
                            <div class="single-integration">
                                <img src="{{ asset('assets/img/integations/marekto.png') }}" alt="integration" class="img-fluid">
                                <h6 class="mb-0 mt-4">Brand Name</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--integration section end-->

    <!--blog section start-->
    <section class="home-blog-section ptb-120 bg-light ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center">
                    <h4 class="text-primary h5">Blog</h4>
                    <h2>Our Latest News and Update</h2>
                    <p>Assertively maximize cost effective methods of iterate team driven manufactured products through equity invested via customized benefits. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-article rounded-custom mb-4 mb-lg-0">
                    <a href="blog-single.html" class="article-img">
                        <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="article" class="img-fluid">
                    </a>
                    <div class="article-content p-4">
                        <div class="article-category mb-4 d-block">
                            <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">Design</a>
                        </div>
                        <a href="blog-single.html">
                            <h2 class="h5 article-title limit-2-line-text">Do you really understand the concept of product value?</h2>
                        </a>
                        <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                        <a href="javascript:;">
                            <div class="d-flex align-items-center pt-4">
                                <div class="avatar">
                                    <img src="{{ asset('assets/img/testimonial/6.jpg') }}" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                </div>
                                <div class="avatar-info">
                                    <h6 class="mb-0 avatar-name">Jane Martin</h6>
                                    <span class="small fw-medium text-muted">April 24, 2021</span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-article rounded-custom mb-4 mb-lg-0">
                    <a href="blog-single.html" class="article-img">
                        <img src="{{ asset('assets/img/blog/blog-2.jpg') }}" alt="article" class="img-fluid">
                    </a>
                    <div class="article-content p-4">
                        <div class="article-category mb-4 d-block">
                            <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Customer</a>
                        </div>
                        <a href="blog-single.html">
                            <h2 class="h5 article-title limit-2-line-text">Why communities help you build better products for your business</h2>
                        </a>
                        <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                        <a href="javascript:;">
                            <div class="d-flex align-items-center pt-4">
                                <div class="avatar">
                                    <img src="{{ asset('assets/img/testimonial/1.jpg') }}" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                </div>
                                <div class="avatar-info">
                                    <h6 class="mb-0 avatar-name">Veronica P. Byrd</h6>
                                    <span class="small fw-medium text-muted">April 24, 2021</span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-article rounded-custom mb-4 mb-lg-0 mb-md-0">
                    <a href="blog-single.html" class="article-img">
                        <img src="{{ asset('assets/img/blog/blog-3.jpg') }}" alt="article" class="img-fluid">
                    </a>
                    <div class="article-content p-4">
                        <div class="article-category mb-4 d-block">
                            <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Development</a>
                        </div>
                        <a href="blog-single.html">
                            <h2 class="h5 article-title limit-2-line-text">Why communities help you build better products</h2>
                        </a>
                        <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one reality, you have infinite upside and opportunity. In the other reality, you’ll continue to see the gap between your standard of living and those at the top grow more and more.</p>

                        <a href="javascript:;">
                            <div class="d-flex align-items-center pt-4">
                                <div class="avatar">
                                    <img src="{{ asset('assets/img/testimonial/3.jpg') }}" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                </div>
                                <div class="avatar-info">
                                    <h6 class="mb-0 avatar-name">Martin Gilbert</h6>
                                    <span class="small fw-medium text-muted">April 24, 2021</span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="text-center mt-5">
                <a href="blog.html" class="btn btn-primary">View All Article</a>
            </div>
        </div>
    </div>
    </section>
    <!--blog section end-->
@endsection