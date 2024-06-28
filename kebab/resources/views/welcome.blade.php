
<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>KEBAB, TUTAJ SMACZNIE ZJESZ! SERDECZNIE ZAPRASZAMY! </title>
    <meta name="description" content="Tylko świeże produkty, stawiamy na jakość, najlepszy kebab w Gdyni, pyszne jedzenie i miła obsługa,
    zapraszamy do skorzystania z naszych usług, jesteśmy dla Ciebie!">
    <meta name="keywords"  content="kebab, menu, najlepszy kebab, dobre jedzenie">

    <!-- Favicons -->
    <link href="{{ asset('storage/img/favicon.ico')}}" rel="icon">
    <link href="{{ asset('storage/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-phone d-flex align-items-center"><span>+48 123456789</span></i>
            <i class="bi bi-clock d-flex align-items-center ms-4"><span> Pn-Sob: 11:00 - 22:00</span></i>
        </div>


    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="#">Kebab</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Strona główna</a></li>
                <li><a class="nav-link scrollto" href="#about">O Nas</a></li>
                <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Zdjęcia</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontakt</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1>Zapraszamy do <span>Kebab</span></h1>
                <h2>Serwujemy pyszne kebaby od wielu lat!</h2>

                <div class="btns">
                    <a href="#menu" class="btn-menu animated fadeInUp scrollto">Nasze Menu</a>

                </div>
            </div>


        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="{{ asset('storage/img/flaga.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Już od wielu lat na rynku!</h3>
                    <p class="fst-italic">
                         Cały czas utrzymujemy ten sam smak.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Od ponad 15 lat na rynku.</li>
                        <li><i class="bi bi-check-circle"></i> Dobry kebab to podstawa.</li>
                        <li><i class="bi bi-check-circle"></i> Zadowolony klient to nasz cel.</li>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Dlaczego wybrać nas</h2>
                <p>Wybór jest bardzo prosty</p>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>01</span>
                        <h4>Zawsze od serca</h4>
                        <p>Nasze kebaby są przygotowywane tak, aby zaspokoić potrzeby naszych klientów, bo tylko na tym nam zależy.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <span>02</span>
                        <h4>Zawsze smacznie</h4>
                        <p>Większość naszych klientów, jest bardzo zadowolona ze smaku serwowanego przez nas jedzenia.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span>03</span>
                        <h4>Zawsze świeżo</h4>
                        <p>Przygotowując nasze dania, używamy tylko świeżych i wysokiej jakości produktów.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Menu</h2>
                <p>Wybierz to co dla Ciebie najlepsze</p>
            </div>

           <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">Menu</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($productsgniew as $product)
                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="{{ asset('storage/' . $product->image_path)}}" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#"></a><span>{{ $product->price }} zł</span>
                        </div>
                        <div class="menu-ingredients">
                            {{$product->name}} <br>
                            ({{$product->description}})
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Galeria</h2>
                <p>Kilka zdjęć z naszej kultury</p>
            </div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <div class="col-md-3">
                    <div class="gallery-item">
                        <a href="#" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ asset('storage/img/twarz.jpeg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="gallery-item">
                        <a href="#" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ asset('storage/img/imam.jpeg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="gallery-item">
                        <a href="#" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ asset('storage/img/meczet.jpeg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="gallery-item">
                        <a href="#" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ asset('storage/img/droga.jpeg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section><!-- End Gallery Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontakt</h2>
                <p>Kontakt z nami</p>
            </div>
        </div>

        <div data-aos="fade-up">

            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2312.8495059926445!2d18.5156830936969!3d54.57140401189913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fda612f6a43fbd%3A0x38c6d7ea27a160cc!2sGdynia-Kosakowo%20Airport!5e0!3m2!1sen!2spl!4v1719416524852!5m2!1sen!2spl" allowfullscreen></iframe>

        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokalizacja:</h4>
                            <p>ul. Pomorska 19, 80-333 Gdynia</p>
                        </div>

                        <div class="open-hours">
                            <i class="bi bi-clock"></i>
                            <h4>Godziny otwarcia:</h4>
                            <p>
                               Poniedziałek-Sobota:<br>
                                11:00 - 22:00 <br>
                                Niedziela: <br>
                                12:00 - 21:00
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>cyprian.czerwinski@gmail.com/p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telefon:</h4>
                            <p>+48 123 456 789</p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Kebab</h3>
                        <p>
                            Pomorska 29<br>
                            83-333, Gdynia<br><br>
                            <strong>Telefon:</strong> +48 123 456 789<br>
                            <strong>Email:</strong> cyprrian.czerwinski@gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/cyprian.czerwinski/" class="facebook"><i class="bx bxl-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



</body>

</html>
