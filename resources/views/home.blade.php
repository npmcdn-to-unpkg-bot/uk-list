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
        .grid-item {
            width: 30%;
        }
        .panel > .panel-body > img {
            width: 99%;
        }
    </style>
@stop

{{-- BODY SECTION --}}
@section('body')

    {{-- Owl Carousel --}}
    <div id="owl-example" class="owl-carousel">
        <div class="item"><img src="{{ url('img/slider-1.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ url('img/slider-2.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ url('img/slider-3.jpg') }}" alt=""></div>
        <div class="item"><img src="{{ url('img/slider-4.jpg') }}" alt=""></div>
    </div>

    {{-- START ROW FOR PRODUCTS / ADVERTS --}}
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-2"></div>
        <div class="col-lg-7 grid">

           <div class="col-lg-4 grid-item">
               <div class="panel panel-default">
                   <div class="panel-body">
                       <img src="{{ url('img/placeholder-500x500.jpeg') }}" alt="" width="100%">
                   </div>
                   <div class="panel-footer">
                       <h4><b>Real Bear With Claws...</b></h4>
                       <p>Posted by: <b>AjaxDemon120X</b></p>
                       <p>Located in: <b>Leicestershire</b></p>
                       <p>Category: <b>Animals</b></p>
                       <p>Price: <b>&pound;1970</b></p>
                   </div>
               </div>
           </div>

            <div class="col-lg-4 grid-item">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ url('img/bugatti.jpg') }}" alt="" width="300px">
                    </div>
                    <div class="panel-footer">
                        <h4><b>New Bugatti Veyron</b></h4>
                        <p>Posted by: <b>AllAboutTheCars2</b></p>
                        <p>Located in: <b>Glouchester</b></p>
                        <p>Category: <b>Card</b></p>
                        <p>Price: <b>&pound;970,031</b></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 grid-item">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ url('img/placeholder-500x500.jpeg') }}" alt="" width="300px">
                    </div>
                    <div class="panel-footer">
                        <h4><b>Real Bear With Claws...</b></h4>
                        <p>Posted by: <b>AjaxDemon120X</b></p>
                        <p>Located in: <b>Leicestershire</b></p>
                        <p>Category: <b>Animals</b></p>
                        <p>Price: <b>&pound;1970</b></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 grid-item">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ url('img/placeholder-500x500.jpeg') }}" alt="" width="300px">
                    </div>
                    <div class="panel-footer">
                        <h4><b>Real Bear With Claws...</b></h4>
                        <p>Posted by: <b>AjaxDemon120X</b></p>
                        <p>Located in: <b>Leicestershire</b></p>
                        <p>Category: <b>Animals</b></p>
                        <p>Price: <b>&pound;1970</b></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 grid-item">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ url('img/placeholder-500x500.jpeg') }}" alt="" width="300px">
                    </div>
                    <div class="panel-footer">
                        <h4><b>Real Bear With Claws...</b></h4>
                        <p>Posted by: <b>AjaxDemon120X</b></p>
                        <p>Located in: <b>Leicestershire</b></p>
                        <p>Category: <b>Animals</b></p>
                        <p>Price: <b>&pound;1970</b></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 grid-item">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ url('img/placeholder-500x500.jpeg') }}" alt="" width="300px">
                    </div>
                    <div class="panel-footer">
                        <h4><b>Real Bear With Claws...</b></h4>
                        <p>Posted by: <b>AjaxDemon120X</b></p>
                        <p>Located in: <b>Leicestershire</b></p>
                        <p>Category: <b>Animals</b></p>
                        <p>Price: <b>&pound;1970</b></p>
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
            var $container = $('.grid');
            $container.imagesLoaded( function () {
                $container.masonry({
                    columnWidth: '.grid-item',
                    itemSelector: '.grid-item'
                });
            });

//          This code hides the Next and Prev buttons
            $('.owl-buttons').hide();
        });
    </script>
@stop