<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap-yeti.min.css') }}">
</head>
<body>

<div class="jumbotron">
    <h1>Welcome</h1>
    <p>
        Hey {{ $user->full_name }}, Welcome to uk-list.com! We value your choice to use our services.You are now verified so you are able to start using our services!
    <a class="btn btn-primary btn-lg" href="{{ URL::to('/') }}" target="_blank">Get Started!</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>