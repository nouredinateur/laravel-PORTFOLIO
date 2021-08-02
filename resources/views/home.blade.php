@extends('layouts.app')


@section('content')

<div class="flex align-center mx-20	 ">
    <div class="leading-8	">
        <div class="mt-96">
            <p class="font-Sintony text-4xl leading-14 motion-safe:animate-bounce">I'm</p>
            <h1 class="font-mermelad font-black	text-7xl tracking-wide ">NOUREDDINE<br>NAFZAOUI</h1>
            <p class="font-oldenburg text-xl mt-8 leading-8">aka nnafzaoui/Mmusashii, a full stack web developer
                in love with technologie since birth<br>
                Youcode Student</p>
        </div>
        <div class="mt-12">
            <a href=""> <button  class="w-44 h-16 mr-8 bg-orange text-white rounded-xl shadow-xl">Resume</button></a>
            <a href=""><button  class="w-44 h-16 bg-darkblue text-white rounded-xl shadow-xl ">Get in Touch</button></a>
           
        </div>
    </div>
    <div class="">
        {{-- <img class="w-9/12 mx-20" src="{{ asset('img/undrawMainImage.png') }}" alt=""> --}}
        <lottie-player class="w-full mx-20" src="{{ asset('img/PRODUCT/Animation 02/drawkit-grape-animation-2-LOOP.json') }}" background="transparent"  speed="1" loop  autoplay></lottie-player>

    </div>
</div>
<div class="flex justify-around p-16">
    <div class="text-center">
        <img class="w-60 mb-4" src="{{ asset('img/fswd.png') }}" alt="illustration">
        <p>full stack web devlopment</p>
    </div>
    <div class="text-center">
        <img class="w-60 mb-4" src="{{ asset('img/ux.png') }}" alt="illustration">
        <p>UI/UX Design</p>
    </div>
    <div class="text-center" >
        <img class="w-60 mb-4" src="{{ asset('img/gd.png') }}" alt="illustration">
        <p>Graphic Design</p>
    </div>
</div>
@include('projects.projects')

@endsection