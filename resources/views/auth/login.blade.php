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
    </style>
@stop

@section('body')
    <div class="container">
        <br><br>
       <div class="panel panel-default">
           <ul class="nav nav-tabs">
               <li id="login-tab" class="active" ><a><b>Login</b></a></li>
               <li id="signup-tab"><a><b>Sign Up</b></a></li>
           </ul>

           <div class="tab-content">
               <div id="login" class="tab-pane fade in active">
                   <form class="form-horizontal">
                       <fieldset>
                           <legend>Login</legend>
                           <div class="form-group">
                               <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                               <div class="col-lg-10">
                                   <input name="l-username" type="text" class="form-control" placeholder="Username">
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="l-password" class="col-lg-2 control-label">Password</label>
                               <div class="col-lg-10">
                                   <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                   <button type="submit" class="btn btn-primary btns">Login</button>
                               </div>
                           </div>
                       </fieldset>
                   </form>
               </div>

               <!-- Register Tab -->
               <div id="signup" class="tab-pane in">
                   <form class="form-horizontal" method="POST" action="{{ url('/auth/register') }}" autocomplete="off">
                       <fieldset>
                           <legend>Sign Up</legend>
                           <div class="form-group">
                               <label for="r-fullname" class="col-lg-2 control-label">Full Name</label>
                               <div class="col-lg-10">
                                   <input name="r-fullname" type="text" class="form-control" id="r-fullname" placeholder="Full Name">
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="r-username" class="col-lg-2 control-label">Username</label>
                               <div class="col-lg-10">
                                   <input name="r-username" type="text" class="form-control" id="r-username" placeholder="Username">
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="r-email" class="col-lg-2 control-label">Email</label>
                               <div class="col-lg-10">
                                   <input name="r-email" type="email" class="form-control" id="r-email" placeholder="Email">
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                               <div class="col-lg-10">
                                   <input name="r-password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                                   <div class="checkbox">
                                       <label>
                                           <input name="r-offers" type="checkbox"> I would like to receive special offers & promotions!
                                       </label>
                                   </div>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                   <button type="submit" class="btn btn-primary btns">Register</button>
                               </div>
                           </div>
                       </fieldset>
                       {{ csrf_field() }}
                   </form>
               </div>
           </div>
       </div>
        <div id="bottom-padding-fix"></div>
    </div>
@stop

@section('javascript')
    <script>


        $(document).ready(function(){
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
        });


    </script>
@stop