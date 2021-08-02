<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marmelad&family=Oldenburg&family=Sintony&display=swap" rel="stylesheet">
    <title>nnafzaoui</title>
</head>
<body>
    <nav class="w-full h-16	shadow flex justify-between">
        <div class="ml-16">
            <img class="h-16" src="{{ asset('img/logo.png') }}" alt="Logo ilustration of me">
        </div>
        <div class="p-5 mr-16">
            <ul class="flex items-center">
                <li class=""><a class="p-6 text-orange" href="/">Home</a></li>
                <li><a class="p-6" href=" {{ route('blog') }}">Blog</a></li>
                <li><a class="p-6" href="">Contact</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')
    
    <footer class="w-full mt-40 bg-black h-52"> 
        <div class="h-full flex justify-between">
            <div class="h-full pt-8 pl-8" >
                <img class="h-4/5"src="{{ asset('img/logo.png') }}" alt="Logo ilustration of me">
            </div>
            <div class=" my-24 text-white">
                <ul class="flex items-center">
                    <li class=""><a class="p-6"  href="">Home</a></li>
                    <li><a class="p-6" href="">Blog</a></li>
                    <li><a class="p-6" href="">Contact</a></li>
                </ul>
            </div>
            <div class="text-white pr-8 my-24">
                <div>
                    <p>You can find me on these Platforms</p>
                </div>
                <div class="ml-8 mt-4 text-4xl">
                    <a href="https://github.com/nnafzaoui" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://twitter.com/Mmusashi20" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://codepen.io/nnafzaoui" target="_blank"><i class="fab fa-codepen"></i></a>
                    <a href="" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://kit.fontawesome.com/21917d46d7.js" crossorigin="anonymous"></script>
</html>