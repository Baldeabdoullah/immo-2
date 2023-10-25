<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMMO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container ">

        <div class="d-flex justify-content-evenly my-2">
            <p><i class="fa-solid fa-phone"></i> +221 484748484</p>

            <p><i class="fa-solid fa-phone"></i> +221 89747387</p>

            <p><i class="fa-regular fa-envelope"></i> contact@immo.infos</p>

            <div class=" d-flex ">
                <i class="fa-brands fa-facebook-f mx-1"></i>
                <i class="fa-brands fa-instagram mx-1"></i>
                <i class="fa-brands fa-x-twitter mx-1"></i>
                <i class="fa-brands fa-linkedin-in mx-1"></i>

            </div>


        </div>

        <nav class="navbar navbar-expand-lg navbar-light fs-5  ">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">IMMO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('infos') }}">A propos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Service</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacte') }}">Contacte</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid  ">
        <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner relation">
                <div class="carousel-item accueil-carousel active ">
                    <img src="{{ asset('images/hero_bg_1.jpg') }}" class="d-block " alt="...">

                </div>
                <div class="carousel-item accueil-carousel">
                    <img src="{{ asset('images/hero_bg_2.jpg') }}" class="d-block  " alt="...">
                </div>
                <div class="carousel-item accueil-carousel">
                    <img src="{{ asset('images/hero_bg_3.jpg') }}" class="d-block  " alt="...">
                </div>
                <div class="carousel-text fw-light">
                    <h2>Trouver la maison de vos rêves avec une gamme de villa immeubles et bureau a votre disposition
                    </h2>
                </div>
            </div>
        </div>
    </div>



    @yield('contenu')



    <footer class="bg-light container-fluid p-5">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="d-flex flex-column">
                        <p>Dakar, plateaux rue 2</p>
                        <p>+221 4894949</p>
                        <p>+221 8474849</p>
                        <p>infos@immo.com</p>

                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="d-flex flex-column">
                        <p> <a href="#" class="text-dark">Accueil</a></p>
                        <p><a href="#" class="text-dark">A propos</a></p>
                        <p><a href="#" class="text-dark">Infos</a></p>
                        <p><a href="#" class="text-dark">Realisations</a></p>

                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="d-flex flex-column">
                        <div class="my-1">
                            <p>Suivez-nous</p>
                        </div>
                        <div class="my-1">
                            <i class="fa-brands fa-facebook-f mx-1"></i>
                        </div>
                        <div class="my-1">
                            <i class="fa-brands fa-instagram mx-1"></i>
                        </div>
                        <div class="my-1">
                            <i class="fa-brands fa-x-twitter mx-1"></i>
                        </div>

                        <div class="my-1">
                            <i class="fa-brands fa-linkedin-in mx-1"></i>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <p class="my-2">Copyright © 2023 Developpé avec passion par <a class="text-dark" href="#">Abdoullah
                BALDE</a></p>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
