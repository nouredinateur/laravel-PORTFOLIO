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
            <img class="h-16" src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <div class="p-5 mr-16">
            <ul class="flex items-center">
                <li class=""><a class="p-6 text.orange.orange href="">Home</a></li>
                <li><a class="p-6" href="">Blog</a></li>
                <li><a class="p-6" href="">Contact</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')
    
</body>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</html>