@extends('layouts.app')


@section('content')

<div class=" z-10 flex align-center mx-20	 ">
    
    <div class="leading-8 w-6/12">
       
        <div class="mt-24 ">
            <p>portfolios for developers</p>
            <h1>POORTFOLIO</h1>
            <P>Welcome to POORTFOLIO <br>
            
            
            </P>
        </div>
      
    </div>
    <div class="">
        {{-- <img class="w-9/12 mx-20" src="{{ asset('img/undrawMainImage.png') }}" alt=""> --}}
        <lottie-player class="w-full mx-20" src="{{ asset('img/PRODUCT/Animation 09/drawkit-grape-animation-9-LOOP.json') }}" background="transparent"  speed="1" loop  autoplay></lottie-player>

    </div>
</div>
<div class="z-0	-mt-28">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#14213D" fill-opacity="1" d="M0,224L60,192C120,160,240,96,360,58.7C480,21,600,11,720,58.7C840,107,960,213,1080,245.3C1200,277,1320,235,1380,213.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</div>
@endsection