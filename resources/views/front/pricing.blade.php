@extends('front.layouts.app')
@section('content')
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

        <br>
        <br>
        <br>
        <br>

        <div class="container section-title" data-aos="fade-up">
            <div class="section-header">
                <h1>Perfect plan for every team</h1>
                <h6>No large investment. Only month wise subscription base HR Software</h6>
            </div>

            <br>
            <br>
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>Check Our Affordable Pricing<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-tem">
                            <h3 style="color: #20c997;">Free Plan</h3>
                            <div class="price"><sup>৳</sup>2000<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-box" style="color: #20c997;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-tem">
                            <span class="featured">Featured</span>
                            <h3 style="color: #0dcaf0;">Starter Plan</h3>
                            <div class="price"><sup>৳</sup>4000<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-send" style="color: #0dcaf0;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-tem">
                            <h3 style="color: #fd7e14;">Business Plan</h3>
                            <div class="price"><sup>৳</sup>6000<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-airplane" style="color: #fd7e14;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-tem">
                            <h3 style="color: #0d6efd;">Ultimate Plan</h3>
                            <div class="price"><sup>৳</sup>10,000<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-rocket" style="color: #0d6efd;"></i>
                            </div>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                </div><!-- End pricing row -->

            </div>

    </section><!-- /Pricing Section -->


     <!-- Clients Section -->
     <section id="clients" class="clients section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Clients</h2>
            <p>We work with best clients<br></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('front-assets/assets/img/clients/client-1.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front-assets/assets/img/clients/client-2.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front-assets/assets/img/clients/client-3.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front-assets/assets/img/clients/client-4.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front-assets/assets/img/clients/client-5.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front-assets/assets/img/clients/client-6.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front-assets/assets/img/clients/client-7.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('front-assets/assets/img/clients/client-8.png') }}" class="img-fluid"
                            alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->
@endsection
