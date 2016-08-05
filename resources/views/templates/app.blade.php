<html>
<head>
    <meta charset="UTF-8">
    <title>UK-List</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap-yeti.min.css') }}">
    <style>
        html, body {
            width: 100%;
        }
    </style>
    @yield('css')
</head>
<body>

@include('partials.nav')

@yield('body')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
@yield('javascript')
</body>
</html>