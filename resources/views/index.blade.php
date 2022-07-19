@extends('layouts.default')
@section('title','Home')


@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Domestic workers at your service<span>.</span></h1>
                <h2>A platform for domestic workers to get a steady stream of clients and clients to get their preferred services done.</h2>
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-store-line"></i>
                    <h3><a href="">Accurate</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-bar-chart-box-line"></i>
                    <h3><a href="">Safe</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-calendar-todo-line"></i>
                    <h3><a href="">Simple</a></h3>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Benefits</h2>
                <p>WHY CHOOSE US</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-file-search-line"></i></div>
                        <h4><a href="">Variety of Options</a></h4>
                        <p>Clients have a variety of domestic workers to choose from</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class=" ri-hand-coin-line"></i></div>
                        <h4><a href="">Affordable services</a></h4>
                        <p>No need for brokers!!! Domestic workers offer their services at affordable rates</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class=" ri-file-shield-2-line"></i></div>
                        <h4><a href="">Safe</a></h4>
                        <p>Every domestic worker is required to submit a copy of their national ID and upload a profile picture for verification purposes.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Check example of services we offer</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-12 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/washingclothes.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Cleaning clothes</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/iron..jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Ironing and Folding clothes</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/gardening.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Gardening</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/cooking.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Cooking</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/pet.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Taking care of pets</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/carwash.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Washing car</h4>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Team Section -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>offers</h2>
                <p>WHAT CAN YOU DO?</p>
            </div>
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
                        <li><i class="ri-check-double-line"></i> They can apply for any job they prefer.</li>
                         <br>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg" tabindex="-1" role="button">APPLY NOW</a>
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
                        <li><i class="ri-check-double-line"></i> They can go in-depth with their job description explanation.</li>
                        <li><i class="ri-check-double-line"></i> They can specify the do's and don't's.</li>
                        <br>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg" tabindex="-1" role="button">POST A JOB</a>
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
                        <li><i class="ri-check-double-line"></i> This promotes confidentiality if the work involves personal matters.</li>
                        <br>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg" tabindex="-1" role="button">BOOK NOW</a>
                    </ul>
                </div>
            </div><!-- Features Item -->

        </div>
    </section><!-- End Features Section -->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach($contacts as $contact)
                    <div class="swiper-slide">
                       
                        <div class="testimonial-item">
                            
                            <h3>{{ $contact->name }}</h3>
                            <h4>{{ $contact->subject }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $contact->message }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                           
                        </div>
                    </div>
                    @endforeach
                    <!-- End testimonial item -->
                
                    {{-- <div class="swiper-slide">
                        <div class="testimonial-item">
                            
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item --> --}}
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </div>
  
  
            <div class="col-lg-8 mt-5 mt-lg-0">
   
                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
              <form action="{{route('contacts')}}" method="post" class="contactform">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class=" @error('name') is-invalid @enderror form-control" id="names" placeholder="Your Name" >
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                   @enderror
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class=" @error('email') is-invalid @enderror form-control" name="email" id="emails" placeholder="Your Email" >
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                   @enderror
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class=" @error('subject') is-invalid @enderror form-control" name="subject" id="subjects" placeholder="Subject" >
                  @error('subject')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
                </div>
                <div class="form-group mt-3">
                  <textarea class=" @error('message') is-invalid @enderror form-control" name="message" rows="5" placeholder="Message" id="messages" ></textarea>
                  @error('message')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
                </div>
                {{-- <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
   --}}
                    <button type="submit">Send Message</button>
                  {{-- </div> --}}
              </form>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
