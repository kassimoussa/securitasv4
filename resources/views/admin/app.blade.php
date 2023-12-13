<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" href="{{ asset('favicon.ico') }}"> --}}

    <title> {{ $page }} </title>

    @vite(['resources/js/app.js'])
    
    @livewireStyles


    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}"> --}}


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    <!-- Font Awesome icons (free version)-->
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />



    <style>
        body {
            background-color: #f1f2f5;
        }

        .nav_link:hover {
            color: #efaa26 !important;
            font-weight: bold;

        }

        .nav_link {
            color: white !important;
            font-size: 18px;
            font-weight: bold;
        }

        .nav-link {
            font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.95rem;
            color: #fff;
            letter-spacing: 0.0625em;
        }

        .activee {
            font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            color: #efaa26 !important;
            font-weight: bold;
            font-size: 0.95rem;
            letter-spacing: 0.0625em;
        }

        .dropdown-item .activee {}

        .main-c {
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 6rem
        }

        /* .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0; // remove the gap so it doesn't close
        } */

        .dropend:hover .dropdown-menu {
            display: block;
            margin-top: 0; // remove the gap so it doesn't close
        }

        .warning {
            color: #ffc107;
        }

        .info {
            color: #67ace0;
        }

        a {
            text-decoration: none
        }

        .dataTables_filter {
            margin-bottom: 10px;
            float: left;
        }

        .navbar {
            background-color: #212529 !important;
        }
    </style>
</head>

<body>

    <!-- Page Heading -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand nav-link activee" href="/" target="_blank"><img
                    src="{{ asset('images/logo_securitas_bgless.png') }}" height="40px" width="70px" alt="">
                SECURIT'AS</a>
            {{-- <a class="navbar-brand @if ($pageSlug == 'accueil') {{ 'activee' }} @endif"
                href="{{ url('index') }}">Accueil</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                    <li class="nav-item">
                        <a class="nav-link nav_link  @if ($pageSlug == 'messages') {{ 'activee' }} @endif "
                            href="{{ url('messages') }}">Messages</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav_link  @if ($pageSlug == 'devis') {{ 'activee' }} @endif "
                            href="{{ url('devis') }}">Devis</a>
                    </li>

                </ul>


                <div class="d-flex justify-content-end">
                    <div class="nav-item dropdown dropstart">

                        <h5 class="nav-link nav_link fw-bold   dropdown-toggle " id="user" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ session('name') }} </h5>

                        <ul class="dropdown-menu dropdown-menu-dark bg-dark " aria-labelledby="user">
                            <li><a class="dropdown-item" href="{{ url('logout') }}">Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Page Content -->
    <!--Container Main start-->

    <div class="main-c   ">
        @yield('content')
    </div>


    @stack('modals')
    @stack('scripts')

    <script>
        window.addEventListener('alert', event => {
            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        });

        window.addEventListener('close-modal', event => {
            $('.modal').modal('hide');
        });

        window.addEventListener('eventAction', event => {
            $('#eventAction').modal('show');
        });
    </script>



    @yield('script')

    @livewireScripts



</body>

</html>
