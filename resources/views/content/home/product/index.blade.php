@extends('layouts/home/homeLayout')

@section('title', 'Sản phẩm')


@section('layoutContent')



    <!-- ======= Top Bar ======= -->
    {{-- <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section> --}}

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                
                <h1><a href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"> HOANG NHA
                    </a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href="about.html">Giới thiệu</a></li>
                    <li><a href="services.html">Dịch vụ</a></li>
                    <li><a href="portfolio.html">Sản phẩm</a></li>
                    <li><a href="team.html">Đội ngũ</a></li>
                    {{-- <li><a href="pricing.html">Pricing</a></li> --}}
                    <li><a class="active" href="blog.html">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Mã nguồn</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>React Native</span> <i
                                class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="#">Android</a></li>
                            <li><a href="#">IOS</a></li>
                        </ul>
                    </li>
                            <li class="dropdown"><a href="#"><span>Laravel</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Admin Themeplate</a></li>
                                    <li><a href="#">User Themeplate</a></li>
                                    <li><a href="#">Khác</a></li>
                                </ul>
                            </li>
                            <li><a href="#">VueJS</a></li>
                            <li><a href="#">NodeJS</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio</li>
          </ol>
          <h2>Portfolio</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-3 col-sm-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-1.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-1.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-2.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-3.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-4.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-5.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-6.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-7.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-8.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/home-img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/home-img/portfolio/portfolio-9.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->
  
      
  
    </main><!-- End #main -->




@endsection
