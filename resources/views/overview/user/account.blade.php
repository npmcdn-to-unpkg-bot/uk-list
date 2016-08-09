@extends('templates.app')

@section('css')
    <style>
        .verify-message{
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height:270px;
            background: lightgrey;
            padding: 30px;
            text-align: center;
            margin-top:175px;
            color: white;
        }
        .info {
            background: #f2f2f2;
            padding: 10px;
            color: black;
            width: 50%;
            font-weight: bold;
            position: relative;
            margin: auto;
            display: none;
        }
    </style>
@stop

@section('body')

    <div class="container">
        <div class="verify-message">
            <h1>Please Verify Your Account</h1>
            <br>
            <p>
                Veryfying your account will help us by identifying false/ malicious users, in turn this keeps both you
                and us safe!
            </p>
            <p><button class="btn btn-success">Resend Verification Code</button> | <button id="verified" class="btn btn-success">I've Verified my account</button></p>
            <div class="info">
                <p>If you've verified your account give the page a quick refresh!</p>
            </div>
        </div>
    </div>

    {{ $user }}

@stop

@section('javascript')
    <script>
       $(document).ready(function(){
           $('#verified').on('click', function(){
               $('.info').show();
           })
       })
    </script>
@stop