@extends('templates.app')

@section('css')
    <style>
        .panel {
            width: 50% !important;
            margin:0 auto;
        }
        .nav-tabs > li {
            width: 50% !important;
        }
        .tab-pane {
            padding: 10px;
        }
        .nav-tabs:hover {
            cursor: pointer;
        }
        legend {
            padding-bottom: 15px;
        }
        .nav-tabs {
            border-bottom: none;
        }
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus {
            border: 0 !important;
        }
        .nav-tabs>li>a:hover {
            border-bottom: 1px solid transparent !important;
        }
        .nav-tabs>li>a{
            width: 100% !important;
        }
        .btns {
            width: 100%;
        }
        .error {
            color: red;
            font-size: 12px;
        }
        .r-alert,.l-alert {
            padding: 15px;
            border: 1px solid transparent;
            border-radius: 0;
            display: none;
            width: 50%;
            margin: 0 auto;
            margin-bottom: 30px;
        }
        .r-alert-dismissable,
        .r-alert-dismissible {
            padding-right: 35px;
        }
        .r-alert-danger {
            background-color: #f04124;
            border-color: #ea2f10;
            color: #ffffff;
        }
        .r-alert-danger hr {
            border-top-color: #d32a0e;
        }
        #forgot-password-link {
            font-size: 13px;
            font-style: italic;
        }
        #r_offers_link:hover {
            text-decoration: none;
        }
        .nav > li.disabled > a {
            color: #999999 !important;
            text-decoration: none !important;
            background-color: transparent !important;
            cursor: not-allowed !important;
        }
        .nav > li.disabled > a:hover,
        .nav > li.disabled > a:focus {
            color: #999999;
            text-decoration: none !important;
            background-color: transparent !important;
            cursor: not-allowed !important;
        }
    </style>
@stop

@section('body')

    <div class="container">
        <br><br>

        <div class="r-alert r-alert-dismissible r-alert-danger">
            <button type="button" class="close">&times;</button>
            <p class="r-alert-message">That E-mail Address is already registered!</p>
        </div>

        <div class="l-alert r-alert-dismissible r-alert-danger">
            <button type="button" class="close">&times;</button>
            <p class="r-alert-message">Invalid Username/Email or password</p>
        </div>

       <div class="panel panel-default">

           <ul class="nav nav-tabs">
               <li id="login-tab" class="active" ><a><b>Login</b></a></li>
               <li id="signup-tab"><a><b>Sign Up</b></a></li>
           </ul>

           <div class="tab-content">
               <div id="login" class="tab-pane fade in active">
                   <form class="form-horizontal" autocomplete="off">
                       <fieldset>
                           <legend>Login</legend>
                           <div class="form-group" id="l-username-group">
                               <label for="l-username" class="col-lg-2 control-label">Username</label>
                               <div class="col-lg-10">
                                   <input v-model="login.username" name="l-username" type="text" class="form-control" placeholder="Username or Email">
                                   <span class="l-username-error error">Username is required to login!</span>
                               </div>
                           </div>
                           <div class="form-group" id="l-password-group">
                               <label for="l-password" class="col-lg-2 control-label">Password</label>
                               <div class="col-lg-10">
                                   <input v-model="login.password" type="password" class="form-control" id="l-password" placeholder="Password">
                                   <span class="l-password-error error">Password is required to login!</span>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                   <a href="#" id="forgot-password-link">Forgot your password?</a>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                   <a v-on:click="postLogin" class="btn btn-primary btns">Login <img class="ajax" src="{{ url('img/ajax.gif') }}" alt="" width="20px"></a>
                               </div>
                           </div>
                       </fieldset>
                   </form>
               </div>

               <!-- Register Tab -->
               <div id="signup" class="tab-pane in">
                   <form class="form-horizontal" autocomplete="off">
                       <fieldset>
                           <legend>Sign Up</legend>
                           <div id="fullname-group" class="form-group">
                               <label for="r-fullname" class="col-lg-2 control-label">Full Name</label>
                               <div class="col-lg-10">
                                   <input name="r_fullname" v-model="user.fullname" type="text" class="form-control" id="r_fullname" placeholder="Full Name">
                                   <span class="fullname-error error">Cannot be less than 3 characters.</span>
                               </div>
                           </div>
                           <div id="username-group" class="form-group">
                               <label for="r-username" class="col-lg-2 control-label">Username</label>
                               <div class="col-lg-10">
                                   <input name="r_username" v-model="user.username" type="text" class="form-control" id="r_username" placeholder="Username">
                                   <span class="username-error error">Cannot be less than 6 characters.</span>
                               </div>
                           </div>
                           <div id="email-group" class="form-group">
                               <label for="r-email" class="col-lg-2 control-label">Email</label>
                               <div class="col-lg-10">
                                   <input name="r_email" v-model="user.email" type="email" class="form-control" id="r_email" placeholder="Email">
                                   <span class="email-error error">Cannot be empty & Must be an email</span>
                               </div>
                           </div>
                           <div id="password-group" class="form-group">
                               <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                               <div class="col-lg-10">
                                   <input name="r_password" v-model="user.password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                                   <span class="password-error error">Cannot be less than 6 characters.</span>
                                   <div class="checkbox">
                                       <label>
                                           <input name="r_offers" v-model="user.offers" type="checkbox"> <span style="color:black !important;"><b><a id="r_offers_link">I would like to receive special offers & promotions!</a></b></span>
                                       </label>
                                   </div>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                   <a v-on:click="postRegister" class="btn btn-primary btns">Register <img class="ajax" src="{{ url('img/ajax.gif') }}" alt="" width="20px"> </a>
                               </div>
                           </div>
                       </fieldset>
                   </form>
               </div>
           </div>
       </div>
        <div id="bottom-padding-fix"></div>
    </div>
@stop

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
    <script>

        $(document).ready(function(){
            $('.ajax').hide();

            $('.fullname-error').hide();
            $('.username-error').hide();
            $('.email-error').hide();
            $('.password-error').hide();
            $('.l-username-error').hide();
            $('.l-password-error').hide();

            $('#email-exists').hide();
            $('#username-exists').hide();

            $('.nav-tabs li').on('click', function(){
                if($(this).attr('id') == 'signup-tab')
                {
                    $(this).addClass('active');
                    $('#login-tab').removeClass('active');
                    $('#login').hide();
                    $('#signup').show();
                    $('#signup').css('display', 'block');
                }
                else
                {
                    $(this).addClass('active');
                    $('#signup-tab').removeClass('active');
                    $('#signup').hide();
                    $('#login').show();
                    $('#login').css('display', 'block');
                }
            })

            $('.close').on('click', function(){
                $('.r-alert').fadeOut();
                $('.l-alert').fadeOut();
            })
        });

        new Vue ({

            el: '#body',

            data: {
                user: {
                    fullname: '',
                    username: '',
                    email: '',
                    password: ''
                },
                login : {
                    username: '',
                    password: ''
                }
            },

            ready: function(){

            },

            methods: {
                postRegister: function(){

                    if(this.validateRegisterInput() == false)
                    {

                    }
                    else
                    {
                        $('.ajax').show();
                        $('.btns').addClass('disabled');

                        var data = this.user;

                        this.$http.post('auth/register', data, function(response){

                            switch(response)
                            {
                                case 'email_exists':
                                    $('.r-alert').fadeIn();
                                    $('.r-alert-message').text('Sorry! That E-mail address already exists.');
                                    $('#email-group').addClass('has-error');
                                    break;
                                case 'username_exists':
                                    $('.r-alert').fadeIn();
                                    $('.r-alert-message').text('Sorry! That username already exists.');
                                    $('#username-group').addClass('has-error');
                                    break;
                                default:
                                    console.log('default hit');
                                    var redirect_url = '/';
                                    window.location.href = redirect_url;
                                    break;
                            }

                            $('.ajax').hide();
                            $('.btns').removeClass('disabled');

                        });

                    }
                },

                postLogin: function(){
                    if(this.validateLoginInput() == false)
                    {

                    }
                    else
                    {
                        $('.ajax').show();
                        $('.btns').addClass('disabled');

                        var data = this.login;

                        this.$http.post('auth/login', data, function(response){

                            switch(response)
                            {
                                case 'error':
                                    $('.l-alert').fadeIn();
                                    break;
                                case 'auth':

                                    console.log('User Authed!');

                                    var redirect_url = '/';
                                    window.location.href = redirect_url;

                                    break;
                                default:
                                    console.log('default hit');
                                    break;
                            }

                            $('.ajax').hide();
                            $('.btns').removeClass('disabled');

                        });
                    }
                },

                validateRegisterInput: function(){
                    this.hideAllErrors();

                    var check = true;
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                    if(this.user.fullname == '' || this.user.fullname.length < 3)
                    {
                        $('#fullname-group').addClass('has-error');
                        $('.fullname-error').show();
                        check = false;
                    }

                    if(this.user.username == '' || this.user.username.length < 6)
                    {
                        $('#username-group').addClass('has-error');
                        $('.username-error').show();
                        check = false;
                    }

                    if(this.user.email == '' || re.test(this.user.email) == false)
                    {
                        $('#email-group').addClass('has-error');
                        $('.email-error').show();
                        check = false;
                    }

                    if(this.user.password == '' || this.user.password.length < 6)
                    {
                        $('#password-group').addClass('has-error');
                        $('.password-error').show();
                        check = false;
                    }

                    return check;
                },

                validateLoginInput: function(){
                    this.hideAllErrors();

                    var check = true;

                    if(this.login.username == '')
                    {
                        $('#l-username-group').addClass('has-error');
                        $('.l-username-error').show();
                        check = false;
                    }

                    if(this.login.password == '')
                    {
                        $('#l-password-group').addClass('has-error');
                        $('.l-password-error').show();
                        check = false;
                    }

                    return check;
                },

                hideAllErrors: function(){
                    $('#fullname-group').removeClass('has-error');
                    $('#username-group').removeClass('has-error');
                    $('#email-group').removeClass('has-error');
                    $('#password-group').removeClass('has-error');
                    $('#l-username-group').removeClass('has-error');
                    $('#l-password-group').removeClass('has-error');
                    $('.fullname-error').hide();
                    $('.username-error').hide();
                    $('.email-error').hide();
                    $('.password-error').hide();
                    $('.l-username-error').hide();
                    $('.l-password-error').hide();
                },
            }

        });


    </script>
@stop