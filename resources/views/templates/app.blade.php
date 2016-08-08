<html>
<head>
    <meta charset="UTF-8">
    <title>UK-List</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap-yeti.min.css') }}">
    <meta id="_token" value="{{ csrf_token() }}" content="content">
    <style>
        html, body {
            width: 100%;
            overflow-x: hidden;
            overflow-x: hidden;
        }
        .wrapper {
            min-height: 75%;
            height: auto !important;
            height: 75%;
            margin: 0 auto -4em;
        }
        .push {
            height: 200px;
        }
    </style>
    @yield('css')
</head>
<body id="body">

@include('partials.nav')

<div class="wrapper">
    @yield('body')
    <div class="push"></div>
</div>

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script src="{{ url('js/vue.min.js') }}"></script>
<script src="{{ url('js/vue-resource.min.js') }}"></script>
<script>
    Vue.http.headers.common['X-CSRF-TOKEN'] = $('#_token').attr('value');
</script>

@yield('javascript')
</body>
</html>