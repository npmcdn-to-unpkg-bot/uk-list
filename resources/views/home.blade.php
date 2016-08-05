@extends('templates.app')

@section('css')
    <link rel="stylesheet" href="{{ url('plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/owl-carousel/owl.theme.css') }}">
    <style>
        #owl-example .item img{
            display: block;
            width: 100%;
            height: auto;
        }
    </style>
@stop

{{-- BODY SECTION --}}
@section('body')

    <div id="owl-example" class="owl-carousel">
        <div class="item"><img src="{{ url('img/slider-1.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ url('img/slider-2.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ url('img/slider-3.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ url('img/slider-4.jpg') }}" alt=""></div>
    </div>

@stop

{{-- JAVASCRIPT SECTION --}}
@section('javascript')
    <script src="{{ url('plugins\owl-carousel\owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-example").owlCarousel({
                navigation: true, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem:true,
                autoPlay: true
            });

//          This code hides the Next and Prev buttons
            $('.owl-buttons').hide();
        });
    </script>
@stop