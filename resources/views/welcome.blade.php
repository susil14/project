@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/owl/owl.carousel.min.css')}}">

@endsection
@section('main')
<div class="owl-carousel">
    <div> <img src="{{asset('images/cone.jpg')}}" class="h-[90vh] w-full"></div>
    <div><img src="{{asset('images/design.jpg')}}" class="h-[90vh] w-full">  </div>
    <div> <img src="{{asset('images/milk.jpg')}}" class="h-[90vh] w-full"> </div>
    <div> <img src="{{asset('images/orange.jpg')}}" class="h-[90vh] w-full"> </div>
  </div>
@endsection


@section('slide')
<div class="owl-carousel">
  <div> <img src="{{asset('images/cone.jpg')}}" class="h-[90vh]"></div>
    <div><img src="{{asset('images/design.jpg')}}" class="h-[90vh]">  </div>
    <div> <img src="{{asset('images/milk.jpg')}}" class="h-[90vh]"> </div>
    <div> <img src="{{asset('images/orange.jpg')}}" class="h-[90vh]"> </div>
</div>

@endsection





@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="{{asset('js/owl/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    autoplay:true,
    items:1,
    autoplayHoverPause:true,
    loop:true,
    autoplayTimeout:1000,
    

  });
});
    </script>
    @endsection