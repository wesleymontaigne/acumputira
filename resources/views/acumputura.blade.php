<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>Acumputura &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Roboto:wght@400;700&amp;display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    <link href="{{ asset('fonts/icomoon/style.css') }}">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">
            <div
                class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logar</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar
                                    &mdash;</a>
                            @endif
                        @endauth
                    </div>
                @endif


            </div>

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3">
                        <div class="site-logo">
                            <a href="index-2.html">Acumputura<span class="text-primary">.</span> </a>
                        </div>
                    </div>

                    <div class="col-9 text-right">

                        <span class="d-inline-block d-lg-none"><a href="#"
                                class=" site-menu-toggle js-menu-toggle py-5 "><span
                                    class="icon-menu h3 text-white"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="index-2.html" class="nav-link">Home</a></li>
                                <li><a href="services.html" class="nav-link">Services</a></li>
                                <li><a href="testimonials.html" class="nav-link">Testimonials</a></li>
                                <li><a href="blog.html" class="nav-link">Blog</a></li>
                                <li><a href="about.html" class="nav-link">About</a></li>
                                <li><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>


        <div class="hero" style="background-image: url('images/hero_bg_1.jpg');">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 intro text-center">
                        <h1 class="text-white"><strong class="text-primary">Improve</strong> your overall health.</h1>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem
                            praesentium ad, repellendus consequatur ab ut fuga veritatis reiciendis. Vitae, possimus.
                        </div>

                        <div class="col-lg-8 mx-auto">
                            <a href="https://vimeo.com/342333493" data-fancybox class=" play-now mx-auto">
                                <span class="icon">
                                    <span class="icon-play"></span>
                                </span>
                                <span class="caption text-white">Watch intro video</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="services">
            <div class="container-fluid px-0">
                <div class="row no-gutters align-items-stretch">
                    <div class="col-6 col-sm-6 col-md col-lg h-100">
                        <a href="#" class="service">
                            <div class="icon-wrap">
                                <span class="flaticon-acupuncture-2"></span>
                            </div>
                            <h3>Acupuncture</h3>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md col-lg h-100">
                        <a href="#" class="service">
                            <div class="icon-wrap">
                                <span class="flaticon-therapy"></span>
                            </div>
                            <h3>Therapy</h3>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md col-lg h-100">
                        <a href="#" class="service">
                            <div class="icon-wrap">
                                <span class="flaticon-acupuncture-1"></span>
                            </div>
                            <h3>Foot</h3>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md col-lg h-100">
                        <a href="#" class="service">
                            <div class="icon-wrap">
                                <span class="flaticon-herbal"></span>
                            </div>
                            <h3>Natural</h3>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md col-lg h-100">
                        <a href="#" class="service">
                            <div class="icon-wrap">
                                <span class="flaticon-acupuncture"></span>
                            </div>
                            <h3>Healing</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-center order-lg-2">
                        <div class="img-wrap-1 mb-5">
                            <img src="/images/accupuncture_1.png" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto order-lg-1">
                        <h3 class="mb-4 section-heading"><strong>Why Choose Us</strong></h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae,
                            explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem
                            quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!</p>

                        <p><a href="#" class="btn btn-primary">Contact us now</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="d-flex service-2">
                            <div class="icon-wrap">
                                <span class="flaticon-acupuncture"></span>
                            </div>
                            <div class="contents">
                                <h3>Consectetur Adipisicing Elit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro culpa, eveniet
                                    nostrum omnis aliquid incidunt. Officia minus quae quasi earum!</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="d-flex service-2">
                            <div class="icon-wrap">
                                <span class="flaticon-acupuncture-1"></span>
                            </div>
                            <div class="contents">
                                <h3>Lorem Ipsum Dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro culpa, eveniet
                                    nostrum omnis aliquid incidunt. Officia minus quae quasi earum!</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="#" class="d-flex service-2">
                            <div class="icon-wrap">
                                <span class="flaticon-therapy"></span>
                            </div>
                            <div class="contents">
                                <h3>Eveniet Nostrum Omnis</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro culpa, eveniet
                                    nostrum omnis aliquid incidunt. Officia minus quae quasi earum!</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="d-flex service-2">
                            <div class="icon-wrap">
                                <span class="flaticon-herbal"></span>
                            </div>
                            <div class="contents">
                                <h3>Lorem Ipsum Dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro culpa, eveniet
                                    nostrum omnis aliquid incidunt. Officia minus quae quasi earum!</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <span class="text-primary d-block">Testimonials</span>
                        <h2 class="section-heading"><strong>Happy Customers</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                    eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Mike Fisher</span>
                                    <span>Owner, Ford</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                    eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Jean Stanley</span>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                    eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Katie Rose</span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <span class="text-primary d-block">Blog</span>
                        <h2 class="section-heading"><strong>News &amp; Tips</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="post-entry-1 h-100">
                            <a href="single.html" class="mb-3 d-block">
                                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">

                                <span class="meta d-inline-block">July 17, 2019 <span class="mx-2">by</span> <a
                                        href="#">Admin</a></span>
                                <h2><a href="single.html">Natural Healing For The Body</a></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore
                                    harum molestias consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="post-entry-1 h-100">
                            <a href="single.html" class="mb-3 d-block">
                                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">

                                <span class="meta d-inline-block">July 17, 2019 <span class="mx-2">by</span> <a
                                        href="#">Admin</a></span>
                                <h2><a href="single.html">Natural Healing For The Body</a></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore
                                    harum molestias consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="post-entry-1 h-100">
                            <a href="single.html" class="mb-3 d-block">
                                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">

                                <span class="meta d-inline-block">July 17, 2019 <span class="mx-2">by</span> <a
                                        href="#">Admin</a></span>
                                <h2><a href="single.html">Natural Healing For The Body</a></h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore
                                    harum molestias consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-primary py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">What are you waiting for?</h2>
                        <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati,
                            laboriosam.</p>
                    </div>
                    <div class="col-lg-5 text-md-right">
                        <a href="#" class="btn btn-primary btn-white">Contact us now</a>
                    </div>
                </div>
            </div>
        </div>



        <footer class="site-footer py-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">

                        <div class="text-center quick-contact-info">
                            <div class="mb-3 icon-wrap">
                                <span class="icon-phone"></span>
                            </div>
                            <span class="caption">1-800-1234-902</span>
                        </div>

                    </div>
                    <div class="col-lg-4">

                        <div class="text-center quick-contact-info">
                            <div class="mb-3 icon-wrap">
                                <span class="icon-room"></span>
                            </div>
                            <span class="caption">2130 Fulton Street San Diego,
                                CA 94117-1080 USA</span>
                        </div>

                    </div>
                    <div class="col-lg-4">

                        <div class="text-center quick-contact-info">
                            <div class="mb-3 icon-wrap">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <span class="caption">info@mydomain.com</span>
                        </div>

                    </div>
                </div>


                <div class="row pt-5 mt-5 text-center">
                    <div class="col-lg-7 text-lg-left">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                href="https://colorlib.com/" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-lg-5 text-lg-right">
                        <a href="#" class="ml-3">Terms</a>
                        <a href="#" class="ml-3">Privacy</a>
                    </div>
                    <!-- <div class="col-md-12">
              <div class="border-top pt-5">
                
              </div>
            </div> -->

                </div>
            </div>
        </footer>

    </div>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.sticky.js') }}" defer></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/sweetalert.js') }}" defer></script>











</body>

</html>