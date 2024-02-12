<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')

    <main>
        {{-- Contenitore sfondo --}}
        <div id="sfondo-img"></div>
        <div class="sfondo-nero text-light">
            <ul>
                <li>prova</li>
                <li>prova</li>
                <li>prova</li>
                <li>prova</li>
                <li>prova</li>
                <li>prova</li>
                <li>prova</li>
            </ul>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-6 m-4 d-flex flex-wrap">
                    <div class="col-4 ">
                        <h5  class="text-light">DC COMICS</h5>
                        <ul class="text-start p-0">
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                        </ul>
                        <h5 class="text-light">SHOP</h5>
                        <ul class="text-start p-0">
                            <li><a href="">Shop DC</a></li>
                            <li><a href="">Shop DC Collectibles</a></li>
                        </ul>
                    </div>

                    <div class="col-4">
                        <h5  class="text-light">DC</h5>
                        <ul class="text-start p-0">
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>
                            <li><a href="" class="">prova</a></li>

                        </ul>
                    </div>

                    
                    <div class="col-4">
                        <h5  class="text-light">SITES</h5>
                        <ul class="text-start p-0">
                            <li><a href="" class="">DC</a></li>
                            <li><a href="" class="">MAD Magazine</a></li>
                            <li><a href="" class="">DC Kids</a></li>
                            <li><a href="" class="">DC Universe</a></li>
                            <li><a href="" class="">DC Power Visa</a></li>
                        </ul>
                    </div>
                    <div class="col-12 color-grey">All Site Content TM and 2020 DC Enterainment, unless otherwise <span>noted here</span>. All rights reserved. <span>Coockies Settings</span></div>
                    
                </div>
                <div class="img-logo"></div>
            </div>
        </div>
    </footer>
    <div class="bg-scuro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <button type="button" class="btn sign-up m-3">SIGN-UP NOW!</button>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-end">
                        <h5 class="color-blu">FOLLOW US</h5>
                        <ul>
                            <li>
                                <a href="" class=""><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="" class=""><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="" class=""><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="" class=""><i class="fa-brands fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>