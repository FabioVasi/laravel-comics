<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header id="site_header" class="">

        <div class="top-header mb-3">

            <div class="container d-flex justify-content-end align-items-center">
                <h6 class="text-white m-0">
                    DC POWER⁵ᴹ VISA®
                </h6>
                <div class="dropdown d-flex justify-content-end align-items-center">
                    <a class="btn fs-6 fw-bold py-0 text-white border-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ADDITIONAL DC SITES
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="bottom-header d-flex justify-content-between align-items-center">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    
                    <div>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo">
                        </a>
                    </div>

                    <div class="">
                        <ul class="text-muted list-unstyled d-flex justify-content-evenly align-items-center">
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">CHARACTERS</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-primary fs-5 fw-bold border-bottom border-primary border-5" href="#">COMICS</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">MOVIES</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">TV</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">GAMES</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">COLLECTIBLES</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">VIDEOS</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">FANS</a>
                            </li>
                            <li class="px-2">
                                <a class="py-5 text-decoration-none text-muted fs-5 fw-bold" href="#">NEWS</a>
                            </li>
                            <li class="px-2">
                                <div class="dropdown d-flex justify-content-end align-items-center">
                                    <a class="btn text-muted fs-5 fw-bold p-0 border-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        SHOP
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <form class="d-flex justify-content-center align-items-center" action="POST">
                            <input class="search border-0" type="text" id="search" placeholder="Search">
                            <button class="border-0 bg-transparent" type="submit">
                                <svg class="search-lens" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </header>



    <main id="site_maim" class="">
        @yield('content')
    </main>



    <footer id="site_footer">
        
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex justify-content-start pt-5">
                            <div class="col-4">
                                <div class="card border-0 bg-transparent rounded-0">
                                    <h4 class="text-white">DC COMICS</h4>
                                    <ul class="list-unstyled text-secondary">
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Characters</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Comics</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Movies</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">TV</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Games</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Videos</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">News</a>
                                        </li>
                                    </ul>
                                    <h4 class="text-white">SHOP</h4>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Shop DC</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Shop DC Collectibles</a>
                                        </li>
                                    </ul>
                                </div>                                
                            </div>
                            <div class="col-4">
                                <div class="card border-0 bg-transparent rounded-0">
                                    <h4 class="text-white">DC</h4>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Terms Of Use</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Privacy policy(New)</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Ad Choices</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Advertising</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Jobs</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Subscriptions</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Talent Workshops</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">CPSC Certificates</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Ratings</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Shop Help</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>                                
                            </div>
                            <div class="col-4">
                                <div class="card border-0 bg-transparent rounded-0">
                                    <h4 class="text-white">SITES</h4>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">DC</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">MAD Magazine</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">DC Kids</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">DC Universe</a>
                                        </li>
                                        <li>
                                            <a class="text-secondary fw-medium text-decoration-none" href="#">DC power Visa</a>
                                        </li>
                                    </ul>
                                </div>                                
                            </div>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0">
                            <p class="text-secondary fw-medium m-0">
                                All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a class="text-decoration-none" href="#">noted here</a>. All rights reserved. <a class="text-decoration-none" href="#">Cookies Settings</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="large-logo">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-footer py-5">

            <div class="container d-flex justify-content-between align-items-center">
                <div>
                    <a href="#">
                        <button type="button" class="btn text-white fw-bold fs-3 border-primary border-3 rounded-0 btn-lg">SIGN-UP NOW</button>
                    </a>
                </div>

                <div>
                    <ul class="list-unstyled d-flex justify-content-evenly align-items-center m-0">
                        <li class="px-3">
                            <a class="follow text-decoration-none fw-bold fs-3" href="#">FOLLOW US</a>
                        </li>
                        <li class="px-2">
                            <a class="" href="#">
                                <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                            </a>
                        </li>
                        <li class="px-2">
                            <a class="" href="#">
                                <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                            </a>
                        </li>
                        <li class="px-2">
                            <a class="" href="#">
                                <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                            </a>
                        </li>
                        <li class="px-2">
                            <a class="" href="#">
                                <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                            </a>
                        </li>
                        <li class="px-2">
                            <a class="" href="#">
                                <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </footer>

</body>

</html>