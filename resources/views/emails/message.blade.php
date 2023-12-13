<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau Message</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>

<body>

    <div class="container m-3 ">
        <div class="d-flex justify-content-center">

            <div class="card w-50 p-3 bg-light ">
                <div class="d-flex justify-content-center align-items-center my-3">
                    <img src="{{ asset('images/logo_securitas_bgless.png') }}" alt="Company Logo" height="90px">
                    <h1 class="ms-0 mb-0 dore">SECURIT'AS</h1>
                </div>

                <div class="my-3">
                   <p>Bonjour {{ $name }}, <br>
                    Merci pour nous avoir contacter. <br>
                    Nous vous repondrons sous peu!</p>  
                </div>

                <div class="text-center mt-5">
                    <a href="http://securitasv3.test" class="btn btn-primary">Visiter le site</a>
                </div>

                <footer class="footer mt-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-4 text-lg-start">
                                SECURIT'AS SARL 2023
                            </div>
                            <div class="col-8 my-3 text-end">
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </div>

</body>

</html>
