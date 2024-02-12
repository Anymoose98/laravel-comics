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
            <div class="container pt-5">
                <div class="row">
                    {{-- Contenuto  --}}
                    @foreach ($db as $db)
                        <div class="col-2 my-4">
                            <div class="text-center">
                                <img src="{{$db['thumb']}}" class="card-main" alt="{{$db['title']}}">
                                  <h5 class="card-title">{{$db['title']}}</h5>
                              </div>
                        </div>  
                    @endforeach

                    {{-- Bottone --}}
                    <div class="col-12 text-center">
                        <button type="button" class="btn load-more mb-4 px-5 ">LOAD MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

   @include('partials.footer')
</body>
</html>