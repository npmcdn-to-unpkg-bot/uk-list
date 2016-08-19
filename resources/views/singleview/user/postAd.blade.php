@extends('templates.app')

@section('css')
    <style>
        .lbl-txt{
            font-size:1em;
        }
    </style>
@stop

@section('body')

    <br><br>

    {{--FIRST CATEGORY--}}
    <form class="form-horizontal col-lg-5 col-lg-offset-3">

        <div class="form-group" id="category">
            <label for="select" class="col-lg-2 control-label">Category</label>
            <div class="col-lg-10">
                <select class="form-control" id="select">
                    <option value="default" disabled selected>Please Choose A Category!</option>
                    <option value="vehicles">Vehicles</option>
                    <option value="jobs">Jobs</option>
                    <option value="jobs">Clothing</option>
                    <option value="housing">Housing</option>
                    <option value="services">Services</option>
                    <option value="for_sale">Personal Services</option>
                    <option value="for_sale">Community</option>
                    <option value="for_sale">Entertainment</option>
                    <option value="for_sale">For Sale</option>
                </select>
            </div>
        </div>

        <div id="ad-details">
            <div class="form-group">
                <label for="title" class="col-lg-2 control-label">Title</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="title" placeholder="Title for your ad" autocomplete="off" style="font-size: 1.5em;padding:3px;">
                </div>
            </div>
            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                    <span id="count"></span>
                    <span class="help-block">Now go into more detail about your ad here, properly explain what you are advertising.</span>
                </div>
            </div>

            <hr>

            <div class="form-group">
                <h2 class="col-lg-offset-2">Special Additions</h2>

                <div class="col-lg-10">
                    <label class="col-lg-2 control-label"> <i>£1.99 / pw</i> </label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                            <span class="label label-primary lbl-txt"><b>Urgent</b></span> - Let everyone know that you want to sell / buy as quickly as possible
                        </label>
                    </div>
                    <label class="col-lg-2 control-label"> <i>£3.99 / pw</i> </label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            <span class="label label-success lbl-txt"><b>Homepage</b></span> - Let your ad me shown on our homepage!
                        </label>
                    </div>
                    <label class="col-lg-2 control-label"> <i>£9.99 / pw</i> </label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            <span class="label label-danger lbl-txt"><b>Site Wide</b></span> - Let your ad be shown all over our site!
                        </label>
                    </div>
                </div>
            </div>

            <hr>

            <div class="form-group">



            </div>

            <hr>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <a id="post-ad" type="submit" class="btn btn-primary disabled">Submit</a>
                </div>
            </div>
        </div>

    </form>


@stop

@section('javascript')

    <script>

        $(document).ready(function(){
            $('#ad-details').hide();

            $("#textArea").keyup(function(){
                if($(this).val().length < 20)
                {
                    $('#post-ad').addClass('disabled');
                    $("#count").text("Characters to go: " + (20 - $(this).val().length));
                }
                else
                {
                    $('#post-ad').removeClass('disabled');
                    $("#count").text("Characters left: " + (500 - $(this).val().length));
                }

            });

        });

        new Vue({

            el: '#body',
            data: {

            },
            ready: function(){

                $('#category').change(function(){
                   $('#ad-details').show();
                });

                $( "#myselect option:selected" ).text();

            },

            methods: {

            }

        });

    </script>

@stop



