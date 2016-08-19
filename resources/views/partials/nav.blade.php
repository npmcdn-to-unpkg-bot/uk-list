<div class="bs-component" style="margin-bottom: -21px;">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">LOGO HERE</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::user())
                        <li><a href="{{ url('user/me') }}">{{Auth::user()->full_name}}</a></li>
                        <li><a href="#">Help</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('user/me') }}">My Ads</a></li>
                                <li><a href="{{ url('user/me') }}">My Messages</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('user/me') }}">My Details</a></li>
                                <li><a href="{{ url('user/me') }}">Payment Options</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="#">Help</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/login') }}">My Ads</a></li>
                                <li><a href="{{ url('/login') }}">My Messages</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/login') }}">My Details</a></li>
                                <li><a href="{{ url('/login') }}">Payment Options</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <form class="navbar-form navbar-right">
                    @if(Auth::user())
                        <a href="{{ url('/post/ad') }}" class="btn btn-success">Post An Ad</a>
                    @else
                        <a href="{{ url('/login') }}" class="btn btn-success">Post An Ad</a>
                    @endif
                </form>
            </div>
            </div>
        </div>
    </nav>
    <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;asdasd</div>
</div>

<div class="bs-component" style="margin-bottom: -21px;">
    <nav class="navbar navbar-inverse" style="background:lightgrey;height: 80px; display: flex; align-items: center; justify-content: center;">
        <div class="container-fluid">
            <div class="container">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <select class="form-control" id="what">
                                <option selected>All</option>
                                <option>Cars</option>
                                <option>General</option>
                                <option>Personal Services</option>
                                <option>Help</option>
                                <option>Jobs</option>
                                <option>Animals</option>
                            </select>
                            <div class="input-group">
                                <input type="text" width="400px" placeholder="I'm Trying To Find..." style="padding:6px;width:300px;">
                            </div>
                            <div class="input-group">
                                <b>In Location:</b>
                            </div>
                            <select class="form-control" id="where">
                                    <option>Everywhere</option>
                                <optgroup label="England">
                                    <option>Bedfordshire</option>
                                    <option>Berkshire</option>
                                    <option>Bristol</option>
                                    <option>Buckinghamshire</option>
                                    <option>Cambridgeshire</option>
                                    <option>Cheshire</option>
                                    <option>London</option>
                                    <option>Cornwall</option>
                                    <option>Cumbria</option>
                                    <option>Derbyshire</option>
                                    <option>Devon</option>
                                    <option>Dorset</option>
                                    <option>Durham</option>
                                    <option>East Riding of Yorkshire</option>
                                    <option>East Sussex</option>
                                    <option>Essex</option>
                                    <option>Gloucestershire</option>
                                    <option>Greater London</option>
                                    <option>Greater Manchester</option>
                                    <option>Hampshire</option>
                                    <option>Herefordshire</option>
                                    <option>Hertfordshire</option>
                                    <option>Isle of Wight</option>
                                    <option>Kent</option>
                                    <option>Lancashire</option>
                                    <option>Leicestershire</option>
                                    <option>Lincolnshire</option>
                                    <option>Merseyside</option>
                                    <option>Norfolk</option>
                                    <option>North Yorkshire</option>
                                    <option>Northamptonshire</option>
                                    <option>Northumberland</option>
                                    <option>Nottinghamshire</option>
                                    <option>Oxfordshire</option>
                                    <option>Rutland</option>
                                    <option>Shropshire</option>
                                    <option>Somerset</option>
                                    <option>South Yorkshire</option>
                                    <option>Staffordshire</option>
                                    <option>Suffolk</option>
                                    <option>Surrey</option>
                                    <option>Tyne and Wear</option>
                                    <option>Warwickshire</option>
                                    <option>West Midlands</option>
                                    <option>West Sussex</option>
                                    <option>West Yorkshire</option>
                                    <option>Wiltshire</option>
                                    <option>Worcestershire</option>
                                </optgroup>
                                <optgroup label="Wales">
                                    <option>Anglesey</option>
                                    <option>Brecknockshire</option>
                                    <option>Caernarfonshire</option>
                                    <option>Carmarthenshire</option>
                                    <option>Cardiganshire</option>
                                    <option>Denbighshire</option>
                                    <option>Flintshire</option>
                                    <option>Glamorgan</option>
                                    <option>Merioneth</option>
                                    <option>Monmouthshire</option>
                                    <option>Montgomeryshire</option>
                                    <option>Pembrokeshire</option>
                                    <option>Radnorshire</option>
                                </optgroup>
                                <optgroup label="Scotland">
                                    <option>Aberdeenshire</option>
                                    <option>Angus</option>
                                    <option>Argyllshire</option>
                                    <option>Ayrshire</option>
                                    <option>Banffshire</option>
                                    <option>Berwickshire</option>
                                    <option>Buteshire</option>
                                    <option>Cromartyshire</option>
                                    <option>Caithness</option>
                                    <option>Clackmannanshire</option>
                                    <option>Dumfriesshire</option>
                                    <option>Dunbartonshire</option>
                                    <option>East Lothian</option>
                                    <option>Fife</option>
                                    <option>Inverness-shire</option>
                                    <option>Kincardineshire</option>
                                    <option>Kinross</option>
                                    <option>Kirkcudbrightshire</option>
                                    <option>Lanarkshire</option>
                                    <option>Midlothian</option>
                                    <option>Morayshire</option>
                                    <option>Nairnshire</option>
                                    <option>Orkney</option>
                                    <option>Peeblesshire</option>
                                    <option>Perthshire</option>
                                    <option>Renfrewshire</option>
                                    <option>Ross-shire</option>
                                    <option>Roxburghshire</option>
                                    <option>Selkirkshire</option>
                                    <option>Shetland</option>
                                    <option>Stirlingshire</option>
                                    <option>Sutherland</option>
                                    <option>West Lothian</option>
                                    <option>Wigtownshire</option>
                                </optgroup>
                                <optgroup label="Northern Ireland">
                                    <option>Antrim</option>
                                    <option>Armagh</option>
                                    <option>Down</option>
                                    <option>Fermanagh</option>
                                    <option>Londonderry</option>
                                    <option>Tyrone</option>
                                </optgroup>
                            </select>
                            <button class="btn btn-success" type="button">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;asdasd</div>
</div>