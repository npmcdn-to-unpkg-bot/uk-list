@extends('templates.app')

@section('css')
    <style>
        .verify-message{
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height:270px;
            background: #008CBA;
            padding: 30px;
            text-align: center;
            margin-top:175px;
            color: white;
        }
        .info {
            padding: 10px;
            width: 50%;
            font-weight: bold;
            position: relative;
            margin: auto;
        }

    </style>
@stop

@section('body')

        <div class="container">
            <div class="verify-message">
                <h1><b>Account Successfully Verified</b></h1>
                <br>
                <p>
                    <b>
                        Welcome, Please enjoy our site and get listing!
                    </b>
                </p>
            </div>
        </div>

@stop

@section('javascript')

@stop