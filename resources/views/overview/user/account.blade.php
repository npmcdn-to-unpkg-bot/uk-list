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
        .account-nav-fix {
            padding: 20px;
            margin-top: 50px;
        }
        .nav-tabs li {
            width: 25%;
            font-weight: bold;
        }
        .nav-tabs li:hover {
            cursor: pointer;
        }
    </style>
@stop

@section('body')

    @if($user->confirmed == 0)
        <div class="container">
            <div class="verify-message">
                <h1>Please Verify Your Account</h1>
                <br>
                <p>
                    Veryfying your account will help us by identifying false/ malicious users, in turn this keeps both you
                    and us safe!
                </p>
                <p><button class="btn btn-success">Resend Verification Email</button> | <button id="verified" class="btn btn-success">I've Verified my account</button></p>
                <div class="info">
                    <p>If you've verified your account give the page a quick refresh!</p>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="account-nav-fix">
                <ul class="nav nav-tabs">
                    <li id="my-add" class="active"><a>My Ads</a></li>
                    <li id="my-messages" ><a>My Messages</a></li>
                    <li id="my-starred-items"><a>My Starred Items</a></li>
                    <li id="my-messages"><a>My Messages</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="ads">
                        <div class="row">
                            <form>
                                <div class="form-group">
                                    <div class="col-lg-3">
                                        You currently have 0 active ads!
                                    </div>
                                    <div class="col-lg-4 col-lg-offset-5">
                                        <div class="col-lg-10">
                                            <select class="form-control" id="select">
                                                <option>Active Ads</option>
                                                <option>Inactive Ads</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile">
                        asdadfcxv
                    </div>
                    <div class="tab-pane" id="starred-items">
                        xccef
                    </div>
                    <div class="tab-pane" id="messages">
                        4
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{ $user }}

@stop

@section('javascript')
    <script>
       $(document).ready(function(){
           $('#verified').on('click', function(){
               $('.info').show();
           })

           $('.nav-tabs li').on('click', function(){
               $('.nav-tabs li').removeClass('active');
               $(this).addClass('active');

               $('div #ads').hide();
               $('div #profile').hide();
               $('div #starred-items').hide();
               $('div #messages').hide();

               var check = $(this).attr('id');

               switch(check)
               {
                   case 'my-ads':
                       $('#add').show();
                       $('#add').addClass('active');
                       break;
                   case 'my-profile':
                       $('#profile').show();
                       $('#profile').addClass('active');
                       break;
                   case 'my-starred-items':
                       $('#starred-items').show();
                       $('#starred-items').addClass('active');
                       break;
                   case 'my-messages':
                       $('#messages').show();
                       $('#messages').addClass('active');
                       break;
                   default:
                       console.log('default hit');
                       break;
               }

           })

       })
    </script>
@stop