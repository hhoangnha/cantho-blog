<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Selecao Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/homeVendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/homeVendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/homeVendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/homeVendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/homeVendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/homeVendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/homeVendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/homeVendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/carousel.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">Selecao</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Trang chủ</a></li>
                    <li><a class="nav-link scrollto" href="#about">Giới thiệu</a></li>
                    <li class="dropdown"><a href="#"><span>Bài viết</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Góc quán ăn uống</a></li>
                            <li><a href="#">Góc review phong cảnh</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Hình ảnh</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Ninh kiều</a></li>
                            <li class="dropdown"><a href="#"><span>Thêm</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#"></a></li>
                                    <li><a href="#">Bến ninh kiều</a></li>
                                    <li><a href="#">Khu vực 1</a></li>
                                    <li><a href="#">Khu vực 2</a></li>
                                    <li><a href="#">Khu vực 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Cái răng</a></li>
                            <li><a href="#">Trung tâm thành phố</a></li>
                            <li><a href="#">Công viên sông Hậu</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto " href="#portfolio">Đội ngủ</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <div id="content">
      <div class="overlay">
        <div class="overlay-helper">
          <div class="overlay-element top-left">
            <span id="overlay-top-left-text" class="overlay-text">
              🔴 REC
            </span>
            
          </div>
          <div class="overlay-element top-right">
            <span id="overlay-top-right-text" class="overlay-text" >
              00:00
            </span>
            {{-- <p id="time" style="margin-right:10px" class="overlay-text"></p> --}}
          </div>
          <div class="overlay-element bottom-left">
            <span id="overlay-bottom-left-text" class="overlay-text">
              25 FPS
            </span>
          </div>
          <div class="overlay-element bottom-right">
            <span id="overlay-bottom-right-text" class="overlay-text">
              1280x720
            </span>
          </div>
        </div>
      </div>
      {{-- <img class="base" src="pic.JPG" width="720" height="480"> --}}
    </div>
    <main id="main">
        <div class="box-header">
          <div class="overlay-element top-left"></div>
        <div class="overlay-element top-right"></div>
        <div class="overlay-element bottom-left"></div>
        <div class="overlay-element bottom-right"></div>
            <div class="cont">
                <div class="slider"></div>
                <ul class="nav">
            </div>
            <div data-target='right' class="side-nav side-nav--right"></div>
            <div data-target='left' class="side-nav side-nav--left"></div>
        </div>



        <div class="container mt-5">
            <div class="section-title" data-aos="zoom-out">
                <h2>Portfolio</h2>
                <p>What we've done</p>
            </div>
            <div class="container">
                <div class="w-layout-grid blog-grid">
                    <div class="content-left">
                        <div class="row blog-item-shadow ">
                            <div class="col-md-4">
                                <div class="blog-image-wrap"><img
                                        src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                        width="200" alt="" class="blog-image"
                                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="blog-content">
                                    <h3 class="heading-h2">Numbers don't lie!</h3>
                                    <p class="paragraph-detials-medium">The global EV market was valued at USD 103,342
                                        million in 2016, and
                                        now it is projected to reach almost USD 350,963 by 2023. Amazing; isn’t it?</p>
                                    <div class="profile-block">
                                        <img src="https://assets.website-files.com/5ee1bccec7a1f843875ce9ea/5ee1fc875c6bb97507db48a0_Profile%20Picture.jpg"
                                            width="50" alt="" class="profile-picture">
                                        <div class="normal-wrapper">
                                            <div class="title-small">David Nandwa</div>
                                            <p class="paragraph-detials-small">January 10, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row blog-item-shadow">
                            <div class="col-md-4">
                                <div class="blog-image-wrap"><img
                                        src="https://images.cdn.circlesix.co/image/1/700/0/uploads/posts/2017/12/113f725dbb4ada6c3b7d4f7070da46ae.jpg"
                                        width="200" alt="" class="blog-image"
                                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="blog-content">
                                    <h3 class="heading-h2">Energy-Saving? Electric Vehicles win by a landslide!</h3>
                                    <p class="paragraph-detials-medium">As far as energy-efficiency is concerned,
                                        electric
                                        vehicles are
                                        simply unparalleled by anything else.
                                        <br><br>
                                        Up to 80% of the energy in the battery is transferred directly to the vehicle to
                                        power up the engine,
                                        whereas in case of gasoline-powered vehicles, the number’s are as low as 14 to
                                        26 at
                                        the very most.
                                    </p>
                                    <div class="profile-block">
                                        <img src="https://assets.website-files.com/5ee1bccec7a1f843875ce9ea/5ee1fc875c6bb97507db48a0_Profile%20Picture.jpg"
                                            width="50" alt="" class="profile-picture">
                                        <div class="normal-wrapper">
                                            <div class="title-small">Jennifer Hudson</div>
                                            <p class="paragraph-detials-small">January 10, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row blog-item-shadow ">
                            <div class="col-md-4">
                                <div class="blog-image-wrap"><img
                                        src="https://hips.hearstapps.com/pop.h-cdn.co/assets/cm/15/05/54c8737411e33_-_leno-baker-electric-0507-de.jpg"
                                        width="200" alt="" class="blog-image"
                                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="blog-content">
                                    <h3 class="heading-h2">Electric Cars aren't new, just better</h3>
                                    <p class="paragraph-detials-medium">Although electric cars are thought of as the
                                        future
                                        of motoring,
                                        they’re not actually a new concept. The very first production electric car was
                                        built
                                        in 1884 by
                                        English inventor, Thomas Parker.
                                        <br><br>
                                        Parker was responsible for introducing a range of innovations into the UK
                                        including
                                        the
                                        electrification of the London Underground as well as working on electric
                                        tramways
                                        for a number of
                                        cities. By 1897 a fleet of electric taxis was also being used in London.
                                        Improvements in petrol and
                                        diesel technology marked the end of the popularity of electric cars which has
                                        only
                                        been revived in the
                                        last decade.
                                    </p>
                                    <div class="profile-block">
                                        <img src="https://assets.website-files.com/5ee1bccec7a1f843875ce9ea/5ee1fc875c6bb97507db48a0_Profile%20Picture.jpg"
                                            width="50" alt="" class="profile-picture">
                                        <div class="normal-wrapper">
                                            <div class="title-small">Jennifer Hudson</div>
                                            <p class="paragraph-detials-small">January 10, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row blog-item-shadow ">
                            <div class="col-md-4">
                                <div class="blog-image-wrap"><img
                                        src="https://assets.weforum.org/editor/large_Z6NaCRZgWm31Y1WxKzGerRB7vPdYP3A8-sTqvTUDF9Q.png"
                                        alt="" class="blog-image"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="blog-content">
                                    <h3 class="heading-h2">Why Africa desperately needs more Electric Vehicles</h3>
                                    <p class="paragraph-detials-medium"> In Nairobi, Kenya the city I come from, a
                                        recent
                                        study showed that
                                        residents spend 14-30% of their income on transport. To protect consumers from
                                        ever
                                        increasing fuel
                                        prices, African governments heavily subsidize fuels, at an average cost of 1.4%
                                        GDP.

                                        One experiment done by a Kenyan who imported Electric Vehicles showed that he
                                        saved
                                        upto 70% on fuuel
                                        costs in a year of using an EV.</p>
                                    <div class="profile-block">
                                        <img src="https://assets.website-files.com/5ee1bccec7a1f843875ce9ea/5ee1fc875c6bb97507db48a0_Profile%20Picture.jpg"
                                            width="50" alt="" class="profile-picture">
                                        <div class="normal-wrapper">
                                            <div class="title-small">Jennifer Hudson</div>
                                            <p class="paragraph-detials-small">January 10, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="content-right">
                        <div class="stick-wrapper">
                            <form action="/search" class="search w-form"><input type="search"
                                    class="seach-bar w-input" maxlength="256" name="query"
                                    placeholder="Search articles" id="search" required=""><a href="#"
                                    class="search-button-wrapper w-inline-block"><input type="submit" value=""
                                        class="search-button w-button"><img
                                        src="https://assets.website-files.com/5ee1bccec7a1f843875ce9ea/5ee201ea9dc531a074f2aea1_Search%20icon.svg"
                                        alt="" class="search-icon"></a></form>


                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Portfolio</h2>
                    <p>What we've done</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Testimonials</h2>
                    <p>What they are saying about us</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium
                                    quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis
                                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim
                                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit
                                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore
                                    illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa
                                    labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi
                                    cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Pricing</h2>
                    <p>Our Competing Prices</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="zoom-in">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span class="advanced">Advanced</span>
                            <h3>Ultimate</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a
                            erat nam at lectus
                            urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur
                                gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque
                            varius morbi enim
                            nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id
                                donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                                pellentesque elit
                                ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                            consectetur adipiscing
                            elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum
                                integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                                eu tincidunt.
                                Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed
                                odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci
                            dapibus. Aliquam
                            eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id
                                donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                                pellentesque elit
                                ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam
                            pellentesque nec nam
                            aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc
                                vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum
                                est. Purus
                                gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus
                            faucibus ornare.
                            Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                integer malesuada
                                nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed.
                                Ut venenatis
                                tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas
                                egestas
                                fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Team</h2>
                    <p>Our Hardworking Team</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Selecao</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <!-- <script src="./script.js"></script> -->
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/homeVendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/homeVendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/homeVendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/homeVendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/homeVendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/homeVendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    {{-- <script src="assets/js/main.js"></script>
  <script src="assets/js/carousel.js"></script> --}}

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    <script>
      function displayTime() {
        var now = new Date();
        document.getElementById("time").innerHTML = now.toLocaleTimeString();
      }
      setInterval(displayTime, 1000);
    </script>

</body>

</html>
