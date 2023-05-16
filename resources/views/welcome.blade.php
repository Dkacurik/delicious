<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Delicious</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href=
              'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>

    <script src=
                "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>

    <script src=
                "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>


    <!-- Styles -->
</head>
<body class="antialiased">
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div
        class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
        <i class="bi bi-phone d-flex align-items-center"><span>+421 907379153</span></i>
        <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Po - Pia: 9:00 - 17:00</span></i>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="logo me-auto">
            <h1><a href="index.php">Salón Lady</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Domov</a></li>
                <li><a class="nav-link scrollto" href="#about">O nás</a></li>
                <li><a class="nav-link scrollto" href="#menu">Cenník</a></li>
                <li><a class="nav-link scrollto" href="#events">Aktuality</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Galéria</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontakt</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="#book-a-table" class="book-a-table-btn scrollto">Rezervácia</a>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background: url({{asset('img/uvodna_lista.jfif')}})">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><span>Kozmetický salón</span> Lady
                            </h2>
                            <p class="animate__animated animate__fadeInUp">U nás si príde na to svoje naozaj každý a
                                zároveň si tu skvele oddýchne. Radi Vás u nás v Salóne krásy Lady uvítame a našou
                                najväčšou odmenou bude Vaša spokojnosť.</p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Naše
                                    služby</a>
                                <a href="#book-a-table"
                                   class="btn-book animate__animated animate__fadeInUp scrollto">Rezervácia</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-5 align-items-stretch video-box"
                     style='background-image: url({{asset("img/logo.jpg")}});'>
                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3>Radi by sme Vám predstavili salón kde sa budete cítiť ako doma. Salón krásy Lady znamená
                            príjemné a priateľské prostredie, kde môžete zabudnúť na bežné starosti.</h3>
                        <p>
                            Ponúkame Vám širokú škálu kozmetických služieb od poradenstva, klasického čistenia cez
                            moderné laserové ošetrenie, obľúbeného 1D mihalničky, lamináciu obočia, nastreľovanie
                            náušníc, denné a večerné líčenie a oveľa viac.
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> Vykúzlime ti perfektné obočie, či zvodné
                                mihalnice.
                            </li>
                            <li><i class="bx bx-check-double"></i> Profesionálne ťa nalíčime makeupom, čo vydrží
                                celú noc.
                            </li>
                            <li><i class="bx bx-check-double"></i> V priateľskom rozhovore ti poradíme ako mať tú
                                najlepšiu pleť a líčenie.
                            </li>
                        </ul>
                        <p>
                            Našim cieľom je vytvoriť službami zážitok, na ktorý sa budeš tešiť.
                            <br><br>Tešíme sa na dámy ale aj na pánov.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">

            <div class="section-title">
                <h2>Cenník služieb</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">Všetky služby</li>
                        <li data-filter=".filter-zakladne">Základné ošetrenie</li>
                        <li data-filter=".filter-problematicke">Ošetrenie problematickej pleti</li>
                        <li data-filter=".filter-omladzujuce">Omladzujúce ošetrenia</li>
                        <li data-filter=".filter-skraslujuce">Skrášľujúce ošetrenia</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-container">
                <div class="col-lg-6 menu-item filter-zakladne">
                    <div class="menu-content">
                        <a href="#">MIKRODERMABRÁZIA</a><span>12€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-zakladne">
                    <div class="menu-content">
                        <a href="#">FRESH SKIN</a><span>17€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-zakladne">
                    <div class="menu-content">
                        <a href="#">RELAX NA MAX</a><span>18€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-zakladne">
                    <div class="menu-content">
                        <a href="#">KLASICKÉ HĹBKOVÉ ČISTENIE</a><span>20€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-zakladne">
                    <div class="menu-content">
                        <a href="#">MASÁŽ TVÁRE</a><span>12€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-zakladne">
                    <div class="menu-content">
                        <a href="#">KOMPLETNÉ OŠETRENIE</a><span>30€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-problematicke">
                    <div class="menu-content">
                        <a href="#">HĹBKOVÉ OŠETRENIE PLETI</a><span>22€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-problematicke">
                    <div class="menu-content">
                        <a href="#">HĹBKOÉ OŠETRENIE S VAKUOM</a><span>25€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-problematicke">
                    <div class="menu-content">
                        <a href="#">HĹBKOÉ OŠETRENIE PLETI + GALVANICKÁ ŽEHLIČKA</a><span>23€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-problematicke">
                    <div class="menu-content">
                        <a href="#">CHEMICÝ PEELING</a><span>25€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-problematicke">
                    <div class="menu-content">
                        <a href="#">PQA + MASÁŽ TVÁRE</a><span>50€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-problematicke">
                    <div class="menu-content">
                        <a href="#">BIOTRONOVÁ LAMPA</a><span>1 impulz/0,50€</span>
                    </div>
                    <div class="menu-ingredients">
                        (1 impulz 2min)
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-omladzujuce">
                    <div class="menu-content">
                        <a href="#">BEZIHLIČKOVÁ MEZOTERAPIA</a><span>25€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-omladzujuce">
                    <div class="menu-content">
                        <a href="#">RITUAL TIMEXPERT</a><span>25€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-omladzujuce">
                    <div class="menu-content">
                        <a href="#">DERMABOTOXIN + MASÁŽ TVÁRE</a><span>35€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-omladzujuce">
                    <div class="menu-content">
                        <a href="#">CHEMICKÝ PEELING</a><span>30€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-omladzujuce">
                    <div class="menu-content">
                        <a href="#">PQA + MASÁŽ</a><span>50€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-skraslujuce">
                    <div class="menu-content">
                        <a href="#">HENNA BROWN</a><span>15€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-skraslujuce">
                    <div class="menu-content">
                        <a href="#">LASH LIFTING</a><span>15€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-skraslujuce">
                    <div class="menu-content">
                        <a href="#">LASH BOTOX</a><span>15€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-skraslujuce">
                    <div class="menu-content">
                        <a href="#">TRVALÁ NA RIASY</a><span>10€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-skraslujuce">
                    <div class="menu-content">
                        <a href="#">NASTREĽOVANIE NÁUŠNÍC</a><span>5/10€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-skraslujuce">
                    <div class="menu-content">
                        <a href="#">LEPENIE TŔS</a><span>1 kus/0,50€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-skraslujuce">
                    <div class="menu-content">
                        <a href="#">MAKE-UP PO OŠETRENÍ</a><span>4€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-skraslujuce">
                    <div class="menu-content">
                        <a href="#">DENNÉ LÍČENIE</a><span>10€</span>
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-skraslujuce">
                    <div class="menu-content">
                        <a href="#">VEČERNÉ LÍČENIE</a><span>15€</span>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Aktuality a novinky</h2>
            </div>

            <div class="events-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="{{asset('img/novinka-december.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>Ošetrenie na mesiac december</h3>
                                <div class="price">
                                    <p><span>18€</span></p>
                                </div>
                                <p class="fst-italic">
                                    Buďte rozžiarená pod vianočným stromčekom🎄
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i> rozjasňujúce s vitamínom C alebo použitie
                                        sér s bieliacim účinkom
                                    </li>
                                    <li><i class="bi bi-check-circle"></i> podľa stavu Vašej pleti</li>
                                    <li><i class="bi bi-check-circle"></i> oba s vypínacím účinkom</li>
                                    <li><i class="bi bi-check-circle"></i> masáž vykonávaná pomocou masážneho
                                        valčeka
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="{{asset('img/novinka-oci.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>Ošetrenie očí</h3>
                                <div class="price">
                                    <p><span>25€</span></p>
                                </div>
                                <p class="fst-italic">
                                    Táto novinka v ošetrení očného okolia je v našom salóne podľa nás revolučná 👌 aj
                                    Vy môžete mať takýto výsledok bez bolestivých procedúr, ošetrenie totiž zahŕňa
                                    ,,len,, príjemnú masáž.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Vyhladzuje vrásky</li>
                                    <li><i class="bi bi-check-circle"></i> Výrazne redukuje vačky pod očam</li>
                                    <li><i class="bi bi-check-circle"></i> Dodáva energiu a pevnosť očnému okoliu,
                                        prejasní pohľad
                                    </li>
                                    <li><i class="bi bi-check-circle"></i> Pôsobí a redukuje modrasté kruhy okolo
                                        očí a pigmentové kruhy hnedej farby
                                    </li>
                                </ul>
                                <p>
                                    Krásny výsledok už po prvom ošetrení!
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="{{asset('img/novinka-chladnejsie_pocasie.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>Rituál Timexpert</h3>
                                <div class="price">
                                    <p><span>20€</span></p>
                                </div>
                                <p class="fst-italic">
                                    Chladnejšie počasie opäť prináša aj naše zľavnené ošetrenia.
                                </p>
                                <p>
                                    Na mesiac október🍂 máme pre Vás nachystané ošetrenie Rituál Timexpert, prípravky
                                    sa miešajú podľa stavu pleti a veku klienta.
                                    <br>Zahŕňa:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i>AHA peeling</li>
                                    <li><i class="bi bi-check-circle"></i>úprava obočia</li>
                                    <li><i class="bi bi-check-circle"></i>masáž tváre a dekoltu prevádzaná
                                        namiešaným krémom
                                    </li>
                                    <li><i class="bi bi-check-circle"></i>miešaná maska</li>
                                    <li><i class="bi bi-check-circle"></i>krém</li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container">

            <div class="section-title">
                <h2>Rezervijte si termín</h2>
                <p>Odborné vedomosti, štýlové prostredie. U nás ti bude príjemne.</p>
            </div>

            <form action="" method="post" class="php-email-form">

                <input type="hidden" name="makeReservation" value="1">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Vaše meno"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Váš email"
                               data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Váš telefón"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <select class="form-control" name="worker" id="worker">

                        </select>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <select class="form-control" name="service" id="service">

                        </select>
                        <div class="validate"></div>
                    </div>
                    <div id="calendar"></div>

                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" id="note" name="note" rows="5" placeholder="Správa"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to
                        confirm your reservation. Thank you!
                    </div>
                </div>

                <div class="text-center"><input type="submit" name="makeReservation" value="Poslať"></div>
            </form>

        </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="section-title">
            </div>

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('img/galeria1.jpg')}}" class="gallery-lightbox">
                            <img src="{{asset('img/galeria1.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('img/galeria2.jpg')}}" class="gallery-lightbox">
                            <img src="{{asset('img/galeria2.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('img/galeria3.jpg')}}" class="gallery-lightbox">
                            <img src="{{asset('img/galeria3.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('img/galeria4.jpg')}}" class="gallery-lightbox">
                            <img src="{{asset('img/galeria4.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('img/galeria5.jpg')}}" class="gallery-lightbox">
                            <img src="{{asset('img/galeria5.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('img/galeria6.jpg')}}" class="gallery-lightbox">
                            <img src="{{asset('img/galeria6.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('img/galeria7.jpg')}}" class="gallery-lightbox">
                            <img src="{{asset('img/galeria7.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset('img/galeria8.jpg')}}" class="gallery-lightbox">
                            <img src="{{asset('img/galeria8.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2><span>Kontaktujte nás</span></h2>
            </div>
        </div>

        <div class="container mt-5">

            <div class="info-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-6 info">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Adresa:</h4>
                        <p>Radničné Námestie 39<br>Bardejov, 085 01</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="bi bi-clock"></i>
                        <h4>Otváracie hodiny:</h4>
                        <p>Pondelok-Piatok:<br>9:00 - 17:00</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>iwanka.iwancova@gmail.com<br>11zdenka22@gmail.com</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="bi bi-phone"></i>
                        <h4>Telefón:</h4>
                        <p>+421 907 379 153</p>
                    </div>
                </div>
            </div>

            <img src="{{asset('/img/mapa.png')}}" alt="" style="width: 100%">
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Salón Lady</h3>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Salón Lady</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">Zdenka Ivančová</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src={{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<script src={{asset('vendor/glightbox/js/glightbox.min.js')}}></script>
<script src={{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}></script>
<script src={{asset('vendor/swiper/swiper-bundle.min.js')}}></script>
<script src={{asset('vendor/php-email-form/validate.js')}}></script>
<!-- Add jQuery library (required) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<!-- Add the evo-calendar.js for.. obviously, functionality! -->
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
<script src={{asset('js/app.js')}}></script>
</body>
</html>
