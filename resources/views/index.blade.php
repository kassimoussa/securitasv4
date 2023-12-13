<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="google-site-verification" content="D3VSkpm4jNyMJF3Upv1SbuHxbi56V-2tkTXYtuD7Bkw" />
    <meta name="msvalidate.01" content="6F9877A1D715AF82A8EB05E0FFBDAC84" />
    <meta name="description"
        content="SECURITAS Djibouti: Votre partenaire de confiance à Djibouti pour la protection des biens et des personnes. Spécialisés dans les services de sécurité, de gardiennage et de surveillance depuis 13 ans. Des solutions sur mesure pour répondre à tous vos besoins de sécurité" />
    <meta name="author" content="Kassim Moussa Ali" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Securitas, Securit'as, Securit-as, Djibouti, Securité Djibouti">

    <title>Bienvenue chez SECURITAS - Leader de la sécurité à Djibouti | Securité Djibouti </title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />

    <!-- Open Graph / Facebook / LinkedIn -->
    <meta property="og:type" content="Securitas">
    <meta property="og:url" content="http://securit-as.com" />
    <meta property="og:locale" content="fr" />
    <meta property="og:title" content="SECURIT'AS - Leader de la sécurité à Djibouti" />
    <meta property="og:description"
        content="SECURITAS Djibouti: Votre partenaire de confiance à Djibouti pour la protection des biens et des personnes. Spécialisés dans les services de sécurité, de gardiennage et de surveillance depuis 13 ans. Des solutions sur mesure pour répondre à tous vos besoins de sécurité">
    <meta property="og:image" content="{{ asset('images/logo_securitas.png') }}">

    <!-- Twitter Card  -->
    <meta name="twitter:card" content="Securitas" />
    <meta name="twitter:url" content="http://securit-as.com">
    <meta name="twitter:title" content="SECURIT'AS - Leader de la sécurité à Djibouti">
    <meta name="twitter:description"
        content="SECURIT'AS Djibouti: Votre partenaire de confiance à Djibouti pour la protection des biens et des personnes. Spécialisés dans les services de sécurité, de gardiennage et de surveillance depuis 13 ans. Des solutions sur mesure pour répondre à tous vos besoins de sécurité">
    <meta name="twitter:image" content="{{ asset('images/logo_securitas.png') }}">



    @vite(['resources/js/app.js'])

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> --}}

    <!-- Font Awesome icons (free version)-->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />


    <style>
        .main-c {
            /* padding-left: 50px;
            padding-right: 50px; */
            padding-top: 6rem
        }

        .caroumage {
            object-fit: cover;
            object-position: center; 
            height: 400px;
        }

        .offcanvas {
            width: 500px !important;
        }

        .docard {
            height: 150px;
            width: auto;
        }

        a {
            text-decoration: none;
        }

        .img-brand {
            width: 100%;
            height: 100%;
            object-fit: fit;
            object-position: center;
        }

        .partenaire-logo {
            height: 200px;
            width: 300px;
            position: relative;
            overflow: hidden;/ margin-left: 2px !important;
            margin-right: 2px !important;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink " id="mainNav">
        <div class="container">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand ms-1" href="#pagetop">
                    <img src="{{ asset('images/logo_securitas_bgless.png') }}" alt="..." />
                </a>

                <div class="col  d-none d-md-block">
                    <h4 class="dore mb-0">SECURIT'AS</h4>
                    <p class="text-white fst-italic">Redifine security</p>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars ms-1"></i>
            </button> --}}

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item my-2">
                        <a class="nav-link" href="#apropos">Qui sommes nous?</a>
                    </li>
                    <li class="nav-item my-2">
                        <a class="nav-link" href="#services">Nos services</a>
                    </li>
                    <li class="nav-item my-2">
                        <a class="nav-link" href="#paternaires">Paternaires</a>
                    </li>
                    <li class="nav-item my-2">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#devis" aria-controls="devis">
                            Devis
                        </button>
                        {{-- <a class="nav-link" data-bs-toggle="offcanvas" role="button" aria-controls="devis"
                            href="#devis">Devis</a> --}}
                    </li>
                    <li class="nav-item my-2">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#contecteznous" aria-controls="contecteznous">
                            Contactez-nous
                        </button>
                        <!-- <a class="nav-link" href="#contact">Contact</a> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    {{-- Alert --}}


    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($message = Session::get('fail'))
        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    <div class="main-c ">

        <!-- Masthead-->
        {{-- <header class="masthead" id="pagetop">
            <div class="container">
                <h2 class="fw-light opacity-75">Parce que votre tranquillité</h2>
                <h2 class="fw-light opacity-75">
                    Et votre sécurité ne sont pas à prendre à la légère,
                </h2>
                <h2 class="fw-light opacity-75">Nous veillons sur vous et vos biens</h2>

            </div>
        </header> --}}

        <div id="carouselExampleFade" class="carousel slide carousel-fade"  data-bs-ride="carousel">
            <div class="carousel-inner" {{-- style="height: 400px;" --}}>
                <div class="carousel-item active">
                    <img src="{{ asset('images/fourgon_securitas.png') }}" class="d-block  w-100 caroumage"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/algamil.jpg') }}" class="d-block  w-100 caroumage"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/geant_hypermarche.jpg') }}" class="d-block  w-100 caroumage"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Apropos -->
        <section class="page-section py-5" id="apropos">
            <div class="container mb-5">
                <div class="text-left">
                    <h3 class="section-heading text-uppercas">Qui sommes nous?</h3>
                    <p class="text-muted w-7">
                        Bienvenue chez SECURIT'AS SARL, votre partenaire de confiance basé à
                        Djibouti, spécialisé dans la protection de biens et de personnes,
                        ainsi que dans les services de sécurité, de gardiennage et de
                        surveillance. Avec une expérience de 13 ans dans l'industrie, notre
                        société s'engage à fournir des solutions de sécurité sur mesure pour
                        répondre aux besoins diversifiés de nos clients.
                    </p>
                    <p class="text-muted w-7">
                        Fondée en 2010, SECURIT'AS SARL s'est forgée une réputation solide
                        en tant qu'entreprise de confiance dans le domaine de la sécurité à
                        Djibouti. Notre équipe expérimentée, composée de professionnels
                        hautement qualifiés, est dévouée à la protection de vos sites, vos actifs et vos biens. <br>
                        Fort d'un management expérimenté nous accompagnons nos clients au quotidien avec les normes et
                        standards les plus élevées que requiert la sûreté privée.
                    </p>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3 text-center my-3 ">
                        <h2 class="count">13</h2>
                        <h5 class="text-muted">Ans d'expérience</h5>
                        <i class="fas fa-calendar-days fa-4x text-primary"></i>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 text-center my-3">
                        <h2 class="count">10</h2>
                        <h5 class="text-muted">Partenaires</h5>
                        <i class="fas fa-handshake fa-4x text-primary"></i>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 text-center my-3">
                        <h2 class="count">6</h2>
                        <h5 class="text-muted">Voitures</h5>
                        <i class="fas fa-car fa-4x text-primary"></i>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 text-center my-3">
                        <h2 class="count">2</h2>
                        <h5 class="text-muted">Vehicules blindés</h5>
                        <i class="fas fa-truck fa-4x text-primary"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services-->
        <section class="page-section bg-light my-5" id="services">
            <div class="container">
                <div class="text-left">
                    <h3 class="section-heading text-uppercas mb-3">Nos services</h3>
                    <h5 class="section-subheading text-muted">
                        Chez SECURIT'AS SARL, nous sommes fiers de proposer une gamme
                        complète de services de sécurité sur mesure pour répondre à divers
                        besoins.
                    </h5>
                </div>

                <div class="col ">
                    <div class="row align-items-center my-3">
                        <div class="col-md-4 text-center text-md-start ">
                            <span class="fa-stack fa-6x">
                                <i class="fas fa-square fa-stack-2x text-primary"></i>
                                <i class="fas fa-truck fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>

                        <div class="col-md-8 text-start">
                            <h4 class="my-3">Transferts (biens et fonds)</h4>
                            <p class="text-muted">
                                SECURIT’AS offre des services de transport de fonds de banknote, et objets de valeurs.
                                Elle
                                assure le transport et la desserte des fonds des points de collecte jusqu' à leurs
                                destinations finales. En plus de véhicules blindes, nos dispositifs sont équipés
                                d'antivols
                                et systèmes de neutralisation de fonds.
                                Enfin, une assurance spécifique nous permet de couvrir tous risques notamment la perte
                                ou le
                                vol des fonds.

                            </p>
                        </div>
                    </div>

                    <div class="row align-items-center my-3">
                        <div class="col-md-4 text-center text-md-start">
                            <span class="fa-stack fa-6x">
                                <i class="fas fa-square fa-stack-2x text-primary"></i>
                                <i class="fas fa-pen-nib fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="col-md-8 text-start">
                            <h4 class="my-3">Ingénierie sûreté </h4>
                            <p class="text-muted text-evenly">
                                Nos équipes vous accompagnent de l’audit ou l’évaluation de sûreté à la mise en œuvre
                                des
                                moyens opérationnels afin de vous assurer un niveau de sécurité optimal au regard des
                                risques identifiés pour votre entreprise et son environnement.
                                Nous veillons à ce que la surveillance humaine s’articule étroitement avec les moyens de
                                protection mécanique, les technologies et l’organisation sécurisée des flux de votre
                                entreprise. Nous contribuons à proposer une offre qui répond en premier lieu au besoin
                                sécuritaire de nos clients dans une démarche structurée depuis l’analyse de risques
                                jusqu’à
                                la mise en place des différents moyens conjugués et adéquats à la protection des biens
                                et
                                des personnes. <br>
                                <strong> Analyse des Risques : </strong>Identifiez et gérez les risques pour la sécurité
                                de
                                vos clients.<br>
                                <strong>Audit de Sûreté : </strong>Assurez-vous de la conformité aux normes de sécurité
                                grâce à des audits
                                impartiaux. <br>
                                <strong>Expertise Technique : </strong>Bénéficiez de notre équipe d'experts techniques
                                pour
                                résoudre des
                                problèmes de sécurité complexes.
                                Chacun de ces services contribue à garantir la sécurité et la sûreté de vos clients.
                                Contactez-nous pour en savoir plus.

                            </p>
                        </div>
                    </div>

                    <div class="row align-items-center my-3">
                        <div class="col-md-4 text-center text-md-start ">
                            <span class="fa-stack fa-6x">
                                <i class="fas fa-square fa-stack-2x text-primary"></i>
                                <i class="fas fa-person-military-pointing fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>

                        <div class="col-md-8 text-start">
                            <h4 class="my-3">Gardiennage</h4>
                            <p class="text-muted text-start">
                                SECURIT’AS propose des services de gardiennage pour des besoins
                                ponctuels ou permanents, de jour comme de nuit. Nous mettons en
                                place des dispositifs de sécurité humains et techniques pour
                                prévenir les risques intentionnels et accidentels, tels que les
                                malveillances, les incendies ou les accidents du travail. Nos
                                équipes comprennent des maîtres-chiens et des agents de sécurité
                                compétents. Nous assurons l'analyse, le conseil, l'organisation
                                et la surveillance en collaboration étroite avec les autorités
                                publiques.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="my-5">
                    <h6 class="text-muted my-3">Domaines d'intervention</h6>

                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-2 g-lg-3 justify-content-center">
                        <div class="col">
                            <a data-bs-toggle="modal" href="#industry">
                                <div class="card text-center docard">
                                    <div class="card-body align-items-center">
                                        <i class="fas fa-industry fa-3x my-3 text-secondary"></i>
                                        <h6 class="my-2 text-muted">Zones Industrielles</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a data-bs-toggle="modal" href="#sieges">
                                <div class="col card text-center docard">
                                    <div class="card-body align-items-center">
                                        <i class="fas fa-house-flag fa-3x my-3 text-secondary"></i>
                                        <h6 class="my-2 text-muted">Sièges sociaux</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a data-bs-toggle="modal" href="#residences">
                                <div class="card text-center docard">
                                    <div class="card-body align-items-center">
                                        <i class="fas fa-house fa-3x my-3 text-secondary"></i>
                                        <h6 class="my-2 text-muted">Résidences</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a data-bs-toggle="modal" href="#banques">
                                <div class="card text-center docard">
                                    <div class="card-body align-items-center">
                                        <i class="fas fa-building-columns fa-3x my-3 text-secondary"></i>
                                        <h6 class="my-2 text-muted">Banques</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a data-bs-toggle="modal" href="#surfaces">
                                <div class="card text-center docard">
                                    <div class="card-body align-items-center">
                                        <i class="fas fa-shop fa-3x my-3 text-secondary"></i>
                                        <h6 class="my-2 text-muted">Grandes surfaces</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- paternaires-->
        <section class="page-section my-5 bg-light" id="paternaires">

            <div class="container">
                <div class="section-heading text-uppercas mb-5">
                    <h3>Nos partenaires</h3>
                </div>

                <div class="container slick-slider">
                    <div class="partenaire-logo p-2 ">
                        <img src="images/bcimr.png" class="img-thumbnail img-brand " />
                    </div>
                    <div class="partenaire-logo p-2 ">
                        <img src="images/exim.png" class="img-thumbnail img-brand " />
                    </div>
                    <div class="partenaire-logo p-2 ">
                        <img src="images/cacbank.png" class="img-thumbnail img-brand " />
                    </div>
                    <div class="partenaire-logo p-2 ">
                        <img src="images/soram.jpg" class="img-thumbnail img-brand " />
                    </div>
                    <div class="partenaire-logo p-2 ">
                        <img src="images/dpcr2.jpg" class="img-thumbnail img-brand " />
                    </div>
                </div>
            </div>

        </section>


        <!-- localisation-->
        <section class="page-section bg-light py-5" id="adresse">
            <div class="container py-8 py-md-8">
                <div class="row">
                    <div class="card shadow-lg p-0">
                        <div class="row gx-0">
                            <div class="col-lg-6 align-self-stretch" style="height: 600px" id="mapCanvas">

                                {{-- <iframe class="w-100 h-100"
                                src="https://www.google.com/maps/embed/v1/view?key=AIzaSyAtDhN0KSnp-HZai11gX9DPtnODKhznKbA&q=SECURITAS&center=-33.8569,151.2152&zoom=18&maptype=satellite"
                                width="100%" height="100%"></iframe> --}}
                                <!-- /.map -->
                            </div>
                            <!--/column -->
                            <div class="col-lg-6 align-items-center">
                                <div class="p-10 p-md-11 p-lg-14 position-relative">


                                    <div class="d-flex flex-row m-1">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1">
                                                <i class="fas fa-location-dot"></i>
                                            </div>
                                        </div>
                                        <div class="align-self-start justify-content-start">
                                            <h5 class="mb-1">Adresse</h5>
                                            <address>
                                                Route de l'Aeroport<br />
                                                Djibouti Ville<br />
                                                Djibouti
                                            </address>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">BP</h5>
                                            <p>508</p>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Fix</h5>
                                            <p>+253 21 34 20 87</p>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1">
                                                <i class="fas fa-mobile"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Mobile</h5>
                                            <p>+253 77 45 37 71</p>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1">
                                                <i class="fas fa-at"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">E-mail</h5>
                                            <p class="mb-0">
                                                <a href="mailto:contact@securit-as.com"
                                                    class="link-body">contact@securit-as.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!--/div -->
                                </div>
                                <!--/div -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

    </div>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    Copyright &copy; SECURIT'AS 2023
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Contactez-nous offcanvas -->
    <div class="offcanvas offcanvas-end bg-light" tabindex="-1" id="contecteznous" aria-labelledby="contecteznous">
        <div class="offcanvas-header border-bottom border-dark">
            <h5 class="offcanvas-title text-center" id="contecteznous">
                Contactez-nous
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="text-start">
                <p class="text-muted fs-6">
                    Remplissez le formulaire ci-dessous et nous prendrons contact avec
                    vous.
                </p>
            </div>

            {{-- <div class="d-flex justify-content-between my-3">
                <div class="bg-primary opacity-50 fs-6 p-2 rounded">
                    <a href="tel:+25321342087" class="text-dark"><i class="fas fa-phone"> </i> 21342087</a>
                </div>
                <div class="bg-primary opacity-50 fs-6 p-2 rounded">
                    <a href="mailto:djiboutisecuritas@gmail.com" class="text-dark"><i class="fas fa-at"> </i>
                        djiboutisecuritas@gmail.com</a>
                </div>
            </div> --}}
            <div class="d-flex flex-column flex-sm-row justify-content-between my-3">
                <div class="bg-primary opacity-50 fs-6 p-2 rounded mb-2 mb-sm-0">
                    <a href="tel:+25321342087" class="text-dark"><i class="fas fa-phone"></i> 21342087</a>
                </div>
                <div class="bg-primary opacity-50 fs-6 p-2 rounded">
                    <a href="mailto:contact@securit-as.com" class="text-dark"><i class="fas fa-at"></i>
                        contact@securit-as.com</a>
                </div>
            </div>


            <div class="">
                <form action="{{ url('/store-messages') }}" method="post" class="">
                    @csrf
                    <x-honeypot />
                    <div class="form-group mb-2">
                        <!-- Name input-->
                        <input class="form-control" id="name1" name="nom" type="text"
                            placeholder="Nom *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name1:required">
                            Ce champ est requit.
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <!-- Email address input-->
                        <input class="form-control" id="email" name="email" type="email"
                            placeholder="Email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">
                            Ce champ est requit.
                        </div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">
                            Email is not valid.
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" name="telephone" type="tel"
                            placeholder="Téléphone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">
                            Ce champ est requit.
                        </div>
                    </div>

                    <div class="form-group form-group-textarea mb-2">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" name="detail" placeholder="Message *" data-sb-validations="required"
                            rows="5"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">
                            Ce champ est requit.
                        </div>
                    </div>

                    <!-- Submit Button-->
                    <div class="text-center my-3">
                        <button class="btn btn-primary btn-lg text-uppercase" id="submitButton" type="submit">
                            Envoyer votre message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Devis offcanvas -->
    <div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="devis" aria-labelledby="devis">
        <div class="offcanvas-header border-bottom border-dark">
            <h5 class="offcanvas-title text-center" id="devis">Demande de devis</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="text-start">
                <p class="text-muted fs-6">
                    Remplissez le formulaire ci-dessous et obtenez très rapidement un
                    devis.
                </p>
            </div>

            <div class="">
                <form action="{{ url('/store-devis') }}" method="post" class="">
                    @csrf
                    <x-honeypot />
                    <div class="form-group mb-2">
                        <!-- Name input-->
                        <input class="form-control" id="name" name="nom" type="text"
                            placeholder="Nom *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">
                            Ce champ est requit.
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <!-- Email address input-->
                        <input class="form-control" id="email" name="email" type="email"
                            placeholder="Email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">
                            Ce champ est requit.
                        </div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">
                            Email is not valid.
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" name="telephone" type="tel"
                            placeholder="Téléphone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">
                            Ce champ est requit.
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <!-- Société name input-->
                        <input class="form-control" id="societe" name="societe" type="name"
                            placeholder="Société *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="societe:required">
                            Ce champ est requit.
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <!-- Adresse name input-->
                        <input class="form-control" id="adresse" name="adresse" type="name"
                            placeholder="Adresse *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="adresse:required">
                            Ce champ est requit.
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <!-- Adresse name input-->
                        <select id="type_service" name="type_service" class="form-select">
                            <option>Type de service</option>
                            <option value="transfert">Transfert (Biens/Fonds)</option>
                            <option value="surete">Ingénierie sûreté </option>
                            <option value="gardiennage">Gardiennage</option>
                        </select>
                        <div class="invalid-feedback" data-sb-feedback="type_service:required">
                            Ce champ est requit.
                        </div>
                    </div>

                    <div class="form-group form-group-textarea mb-2">
                        <!-- Détail du projet input-->
                        <textarea class="form-control" id="detail_projet" name="detail" placeholder="Détail du projet *"
                            data-sb-validations="required" rows="5"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="detail_projet:required">
                            Ce champ est requit.
                        </div>
                    </div>

                    <!-- Submit Button-->
                    <div class="text-center my-3">
                        <button class="btn btn-primary btn-lg text-uppercase" id="submitButton" type="submit">
                            Envoyer votre demande
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Domaines  modals popup-->

    <!-- industry -->
    <div class="modal fade" id="industry" tabindex="-1" aria-labelledby="industry" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class="my-3">Zones Industrielles</h3>

                    <div class="row align-items-center flex-column flex-sm-row">
                        <div class="col-md-3">
                            <span class="fa-stack fa-5x">
                                <i class="fas fa-square fa-stack-2x text-secondary"></i>
                                <i class="fas fa-industry fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>

                        <div class="col-md-9 text-start">
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Sécurisation des zones industrielles contre les vols et les
                                actes de vandalisme.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Surveillance des accès et des périmètres.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Intervention rapide en cas d'incident.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sieges -->
    <div class="modal fade" id="sieges" tabindex="-1" aria-labelledby="sieges" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class="my-3">Sièges sociaux</h3>

                    <div class="row align-items-center flex-column flex-sm-row">
                        <div class="col-md-3">
                            <span class="fa-stack fa-5x">
                                <i class="fas fa-square fa-stack-2x text-secondary"></i>
                                <i class="fas fa-building-columns fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>

                        <div class="col-md-9 text-start">
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Sécurisation des locaux et des bureaux d'entreprise.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Contrôle d'accès pour protéger les informations sensibles.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Surveillance vidéo pour la prévention des cambriolages.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- residences -->
    <div class="modal fade" id="residences" tabindex="-1" aria-labelledby="residences" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class="my-3">Résidences</h3>

                    <div class="row align-items-center flex-column flex-sm-row">
                        <div class="col-md-3">
                            <span class="fa-stack fa-5x">
                                <i class="fas fa-square fa-stack-2x text-secondary"></i>
                                <i class="fas fa-house fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>

                        <div class="col-md-9 text-start">
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Services de sécurité résidentielle pour les maisons
                                individuelles.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Patrouilles de sécurité pour dissuader les intrus.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Systèmes d'alarme et de surveillance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banques -->
    <div class="modal fade" id="banques" tabindex="-1" aria-labelledby="banques" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class="my-3">Banques</h3>

                    <div class="row align-items-center flex-column flex-sm-row">
                        <div class="col-md-3">
                            <span class="fa-stack fa-5x">
                                <i class="fas fa-square fa-stack-2x text-secondary"></i>
                                <i class="fas fa-building-columns fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>

                        <div class="col-md-9 text-start">
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Surveillance continue pour prévenir les intrusions et les
                                vols.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Contrôle d'accès pour les employés et les visiteurs.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Gestion des alarmes et des situations d'urgence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- surfaces -->
    <div class="modal fade" id="surfaces" tabindex="-1" aria-labelledby="surfaces" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class="my-3">Grandes surfaces</h3>

                    <div class="row align-items-center flex-column flex-sm-row">
                        <div class="col-md-3">
                            <span class="fa-stack fa-5x">
                                <i class="fas fa-square fa-stack-2x text-secondary"></i>
                                <i class="fas fa-shop fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>

                        <div class="col-md-9 text-start">
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Sécurisation des grands magasins et des centres commerciaux.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Prévention des vols à l'étalage et des actes de vandalisme.
                            </p>
                            <p class=" ">
                                <i class="fas fa-check text-sucess"></i>
                                Surveillance des allées et des zones de stationnement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        let items = document.querySelectorAll(".carousel .carousel-item");

        items.forEach((el) => {
            const minPerSlide = 4;
            let next = el.nextElementSibling;
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) { 
                    next = items[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });

        window.addEventListener('alert', event => {
            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        });
    </script> --}}

    <!-- Core theme JS-->
    {{-- 
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> 
    <script src="{{ asset('js/scripts.js') }}" ></script> --}}

    <script>
        $(".count").counterUp({
            delay: 10,
            time: 2000,
        });

        $('.slick-slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            accessibility: true,
            arrows: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    <script>
        // Initialize and add the map
        function initMap() {
            // Latitude and longitude of the selected location
            // 11.562580156308288, 43.148099099999996
            const myLatLng = {
                lat: 11.562580156308288,
                lng: 43.148099099999996
            };

            // The map, centered at selected location
            const map = new google.maps.Map(document.getElementById("mapCanvas"), {
                zoom: 17,
                center: myLatLng
            });

            // Info window content
            var contentString = " <h4> SECURIT'AS SARL </h4>";

            // Add info window
            const infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            // The marker, positioned at selected location
            const marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: "Siège social de SECURIT'AS"
            });

            // Marker click event: open info window
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });

            // Open info window on load
            infowindow.open(map, marker);
        }

        window.initMap = initMap;
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPoqxVv9bVRxucHZ0EK77INZUgyx3Q0QE&callback=initMap"
        type="text/javascript"></script>

</body>

</html>
