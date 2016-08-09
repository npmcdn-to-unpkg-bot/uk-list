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
        Hey {{ $user->full_name }}, Welcome to uk-list.com! We value your choice to use our services. To begin using our site properly please click the verification link below.
    </p>
    <a class="btn btn-primary btn-lg" href="{{ URL::to('/user/verify/key=' . Crypt::encrypt($user->email)) }}" target="_blank">Verify Me!</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>