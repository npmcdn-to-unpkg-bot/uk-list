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

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-7">
           <div class="col-lg-4">

               <div class="panel panel-default">
                   <div class="panel-body">
                       <img src="{{ url('img/placeholder-500x500.jpeg') }}" alt="" width="300px">
                   </div>
                   <div class="panel-footer">
                       <h4><b>Real Bear With Claws...</b></h4>
                       <p><b>Leicestershire</b> - <b>Username</b> </p>
                       <p>Animals</p>
                   </div>
               </div>

           </div>
        </div>
        <div class="col-lg-3">

        </div>
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