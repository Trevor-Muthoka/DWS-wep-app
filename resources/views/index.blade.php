@extends('layouts.default')
@section('title','Index')


@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up" style="color:white">Domestic workers at your service</h2>
                <h5 data-aos="fade-up" data-aos-delay="100" style="color: #dcdfe5">A platform for domestic workers to get a steady stream of clients and clients to get their preferred services done.</h5>

{{--                <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <label for="ZIP">ZIP</label><input type="text" id="ZIP" class="form-control" placeholder="ZIP code or CitY">--}}
{{--                    <button type="submit" class="btn btn-primary">Search</button>--}}
{{--                </form>--}}

{{--                <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">--}}

{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="stats-item text-center w-100 h-100">--}}
{{--                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>--}}
{{--                            <p>Clients</p>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Stats Item -->--}}

{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="stats-item text-center w-100 h-100">--}}
{{--                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>--}}
{{--                            <p>Projects</p>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Stats Item -->--}}

{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="stats-item text-center w-100 h-100">--}}
{{--                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>--}}
{{--                            <p>Support</p>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Stats Item -->--}}

{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="stats-item text-center w-100 h-100">--}}
{{--                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>--}}
{{--                            <p>Workers</p>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Stats Item -->--}}

            </div>

        </div>

{{--            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">--}}
{{--                <img src=" {{ asset('assets/img/hero-img.svg')}}" class="img-fluid mb-3 mb-lg-0" alt="">--}}
{{--            </div>--}}
        <button type="submit" class="btn btn-primary btn-lg">Sign Up Now</button>
        </div>
    </div>
</section><!-- End Hero Section -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-filter"></i></div>
                    <div>
                        <h4 class="title">Variety of Options</h4>
                        <p class="description">Clients have a variety of domestic workers to choose from</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                    <div>
                        <h4 class="title">Affordable services</h4>
                        <p class="description">No need for brokers!!! Domestic workers offer their services at affordable rates</p>

                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-user-shield"></i></div>
                    <div>
                        <h4 class="title">Safe</h4>
                        <p class="description">Every domestic worker is required to submit a copy of their national ID and upload a profile picture for verification purposes.</p>

                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Featured Services Section -->

{{--    <!-- ======= About Us Section ======= -->--}}
{{--    <section id="about" class="about pt-0">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="row gy-4">--}}
{{--                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">--}}
{{--                   <h3>CLIENT</h3>--}}
{{--                    <h2>Create an Account</h2>--}}
{{--                    <h2>Log in</h2>--}}
{{--                    <h2>View dashboard</h2>--}}
{{--                    <h2>Edit profile(optional)</h2>--}}
{{--                    <h2>Post a job</h2>--}}
{{--                    <h2>View domestic worker profiles</h2>--}}
{{--                    <h2>Book a worker</h2>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 content order-last  order-lg-first">--}}
{{--                    <h3>About Us</h3>--}}
{{--                    <p>--}}
{{--                        Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.--}}
{{--                    </p>--}}
{{--                    <ul>--}}
{{--                        <li data-aos="fade-up" data-aos-delay="100">--}}
{{--                            <i class="bi bi-diagram-3"></i>--}}
{{--                            <div>--}}
{{--                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>--}}
{{--                                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li data-aos="fade-up" data-aos-delay="200">--}}
{{--                            <i class="bi bi-fullscreen-exit"></i>--}}
{{--                            <div>--}}
{{--                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>--}}
{{--                                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li data-aos="fade-up" data-aos-delay="300">--}}
{{--                            <i class="bi bi-broadcast"></i>--}}
{{--                            <div>--}}
{{--                                <h5>Voluptatem et qui exercitationem</h5>--}}
{{--                                <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End About Us Section -->--}}

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Some Of Our Services</span>
                <h2>Some Of Our Services</h2>

            </div>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src=" {{ asset('assets/img/washingclothes.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Cleaning clothes</a></h3>

                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/iron..jpg')}}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Ironing and folding clothes</a></h3>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/gardening.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Gardening</a></h3>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/cooking.webp')}}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Cooking</a></h3>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/pet.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Taking care of pets</a></h3>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/carwash.jpeg')}}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Washing car</a></h3>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section><!-- End Services Section -->

{{--    <!-- ======= Call To Action Section ======= -->--}}
{{--    <section id="call-to-action" class="call-to-action">--}}
{{--        <div class="container" data-aos="zoom-out">--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-8 text-center">--}}
{{--                    <h3>Call To Action</h3>--}}
{{--                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
{{--                    <a class="cta-btn" href="#">Call To Action</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--    </section><!-- End Call To Action Section -->--}}

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">
          <h1>WHAT CAN YOU DO?</h1>
            <br>
            <br>
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                <div class="col-md-5">
                    <img src="{{ asset('assets/img/features-1.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                    <h3>APPLY FOR JOBS.</h3>
                    <p class="fst-italic">
                        Once domestic workers log in, they are able to view the jobs posted by clients and apply for any of them.
                        Once they apply, they wait for the application to approved.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> They can apply for any job they prefer.</li>
                        <a href="#" class="btn btn-primary btn-lg" tabindex="-1" role="button">APPLY NOW</a>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="{{ asset('assets/img/features-2.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1">
                    <h3>POST JOBS</h3>
                    <p class="fst-italic">
                       Once clients log in, they are able to post jobs with clear descriptions.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> They can go in-depth with their job description explanation.</li>
                        <li><i class="bi bi-check"></i> They can specify the do's and don't's.</li>
                        <a href="#" class="btn btn-primary btn-lg" tabindex="-1" role="button">POST A JOB</a>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/bookings.webp') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                    <h3>BOOK A DOMESTIC WORKER</h3>
                    <p>A client can directly book a worker instead of posting a job.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> This promotes confidentiality if the work involves personal matters.</li>
                        <a href="#" class="btn btn-primary btn-lg" tabindex="-1" role="button">BOOK NOW</a>
                    </ul>
                </div>
            </div><!-- Features Item -->

        </div>
    </section><!-- End Features Section -->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->



</main><!-- End #main -->
@endsection
