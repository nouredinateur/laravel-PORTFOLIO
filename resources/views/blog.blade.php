@extends('layouts.app')

@section('content')

<div class="flex align-center mx-20	 ">
    <div class="leading-8	">
        <div class="mt-96">
            <h2 class="font-mermelad font-black	text-6xl tracking-wide motion-safe:animate-bounce ">My Blog</h2>
            <p class="font-oldenburg text-xl mt-8 leading-8">
                In this blog, I will be sharing my experience in the Web Development world <br> by writing articles about the field, technologies, lifestyle, and tips and tricks 
            </p>
        </div>
        <div class="mt-20">
            <img id="slide" class="w-80 mt-11" src="{{ asset('img/slide/b.png') }}" alt="">
        </div>
    </div>
    <div class="">
        {{-- <img class="w-9/12 mx-20" src="{{ asset('img/undrawMainImage.png') }}" alt=""> --}}
        <lottie-player class="w-full mx-20" src="{{ asset('img/PRODUCT/Animation 09/drawkit-grape-animation-9-LOOP.json') }}" background="transparent"  speed="1" loop  autoplay></lottie-player>
    </div>
</div>
<div class="h-40"></div>

<script>

var images = [
  "img/slide/a.png",
  "img/slide/b.png",
  "img/slide/c.png",
  "img/slide/d.png"
]
var slide = document.getElementById("slide")

var x = 0;
function slides(){
  console.log(images[x]);
  slide.src = images[x];
	x++;
  if(x === 4){
  	x === 0;
  }
}
setInterval(slides(), 6000) 

</script>
@include('blog.articles')

@endsection