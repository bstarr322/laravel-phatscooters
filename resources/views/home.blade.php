<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ LAConfigs::getByKey('site_description') }}">
    <meta name="author" content="StarSoft Solutions">

    <meta property="og:title" content="{{ LAConfigs::getByKey('sitename') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ LAConfigs::getByKey('site_description') }}" />
    
    <meta property="og:url" content="http://laraadmin.com/" />
    <meta property="og:sitename" content="laraAdmin" />
	<meta property="og:image" content="http://demo.adminlte.acacha.org/img/LaraAdmin-600x600.jpg" />
    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@laraadmin" />
    <meta name="twitter:creator" content="@laraadmin" />
    
    <title>{{ LAConfigs::getByKey('sitename') }}</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/la-assets/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('la-assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('la-assets/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('/la-assets/css/main.css') }}" rel="stylesheet">

    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,700,900" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/la-assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/la-assets/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top hide">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>{{ LAConfigs::getByKey('sitename') }}</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="hide active"><a href="#home" class="smoothScroll">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                @else
                    <li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<!-- HEADER -->
<header>
    <!-- HEADER TOP BANNER    -->
    <div class="header-banner">
        <div class="container">
            <div class="row">
                <div class="hidden-xs col-md-7 col-1">
                    <p class="title">Questions? Call us at 866-972-6687</p>
                </div>
                <div class="col-xs-12 col-md-6 col-2">
                    <p class="desc">Ride Now, Pay Later! Financing Available.</p>
                    <div class="header_cart">
                        <a href="{{ config('app.shop_url') }}/cart"><span class="hidden-xs">Checkout</span><i class="material-icons-shopping_cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container hide">
        <div class="header_top">
            <!-- USER MENU -->
            <ul class="header_user">
                <li><a href="/account/login">My account</a></li>
                <li class="wishlist"><a href="">Wishlist</a></li>
                <li class="checkout"><a href="{{ config('app.shop_url') }}/cart">Checkout</a></li>
            </ul>
        </div>
        <div class="header_bottom">
            <!-- LOGO -->
            <div id="logo" class="logo_main">
                <a href="http://electric.phatscooters.com/home/">
                    <img src="//cdn.shopify.com/s/files/1/1796/0271/t/11/assets/logo.png?8545831465477433450" alt="Phat Scooters" />
                    <script>var pixelRatio=window.devicePixelRatio?window.devicePixelRatio:1,attr1x=$("#logo img").attr("src").replace(".png","@2x.png");$(window).on("load",function(){pixelRatio>1&&$("#logo img").attr("src",attr1x).attr("width","194px")});</script>
                </a>
            </div>
            <!-- HEADER SEARCH -->
            <div class="header_search">
                <form action="/search" method="get" class="search_form">
                    <input id="search-field" name="q" type="text" placeholder="Search store" class="hint" />
                    <button id="search-submit" type="submit"><i class="material-icons-search"></i></button>
                </form>
            </div>
            <!-- HEADER CART -->
            <div class="header_cart">
                <a href="/cart"><i class="material-icons-shopping_cart"></i><span id="cart_items">0</span><span class="item_txt">item(s)</span></a>
            </div>
        </div>
    </div>
</header>

<div id="megamenu">
    <div class="container">
        <div id="logo" class="logo_main">
            <a href="{{ config('app.shop_url') }}">
                <img src="//cdn.shopify.com/s/files/1/1796/0271/t/11/assets/logo.png?8545831465477433450" alt="Phat Scooters" class="" />
                <script>var pixelRatio=window.devicePixelRatio?window.devicePixelRatio:1,attr1x=$("#logo img").attr("src").replace(".png","@2x.png");$(window).on("load",function(){pixelRatio>1&&$("#logo img").attr("src",attr1x).attr("width","194px")});</script>
            </a>
        </div>
        <h2 id="megamenu_mobile_toggle"><span>Scooters</span><i></i></h2>
        <ul class="level_1">
            <li class="level_1_item ">
                <a class="level_1_link " href="{{ config('app.shop_url') }}">
                Home
                </a>
            </li>
            <li class="level_1_item ">
                <a class="level_1_link active" href="{{ config('app.shop_url') }}/collections/scooters">
                SCOOTERS
                </a>
            </li>
            <li class="level_1_item ">
                <a class="level_1_link " href="{{ config('app.shop_url') }}/collections/accessories">
                Accessories
                </a>
            </li>
            <li class="level_1_item ">
                <a class="level_1_link " href="http://electric.phatscooters.com/videos/">
                VIDEOS
                </a>
            </li>
            <li class="level_1_item ">
                <a class="level_1_link " href="{{ config('app.shop_url') }}/pages/contact-us">
                Contact us
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
<div id="main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <h2>Register Your Scooter:</h2>
                {!! Form::open(['action' => 'LA\ScootersController@store', 'id' => 'scooter-add-form']) !!}
                    <div class="box-body">
                        {{ Form::hidden('home_submit', 'true') }}
                        <div class="form-group"><label for="name">Name* :</label><input class="form-control" placeholder="Enter Name" data-rule-minlength="5" data-rule-maxlength="255" required="1" name="name" type="text" value=""></div>
                        <div class="form-group"><label for="email">Email* :</label><input class="form-control" placeholder="Enter Email" data-rule-maxlength="256" required="1" data-rule-email="true" name="email" type="email" value=""></div>
                        <div class="form-group">
                            <label for="model">Model* :</label>
                            <select class="form-control" required="1" data-placeholder="Enter Model" rel="select2" name="model">
                                <option value="Phatty Original">Phatty Original</option>
                                <option value="Phatty Sport">Phatty Sport</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="_token_61" value="<?php echo csrf_token() ?>">
                            <label for="order_number">Order Number* :</label>
                            <input class="form-control" placeholder="Enter Order Number" data-rule-maxlength="256" field_id="61" adminroute="admin" row_id="0" required="1" name="order_number" type="text" value="" aria-required="true">
                        </div>
                        <div class="form-group">
                            <label for="frame_serial_no">Frame Serial Number* :</label>
                            <input class="form-control" placeholder="Enter Frame Serial Number" data-rule-maxlength="256" required="1" name="frame_serial_no" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label for="motor_serial_no">Motor Serial Number* :</label>
                            <input class="form-control" placeholder="Enter Motor Serial Number" data-rule-maxlength="256" required="1" name="motor_serial_no" type="text" value="">
                        </div>

                        <div class="form-group">
                            <label for="frame_color">Frame Color :</label>
                            <select class="form-control" data-placeholder="Enter Frame Color" rel="select2" name="frame_color">
                                <option value="Matte Black">Matte Black</option>
                                <option value="White">White</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="date">Date* :</label>
                            <div class='input-group date'><input class="form-control" placeholder="Enter Date" required="1" name="date" type="text" value=""><span class='input-group-addon'><span class='fa fa-calendar'></span></span></div>
                        </div>
                    </div>
                    {!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div> <!--/ .container -->

</div><!--/ #main_wrapper -->

<div id="c">
    <div class="container">
        <p>
            <strong>Copyright &copy; <?php echo date("Y")?>. Powered by <a href="javascript:void(0)"><b>{{ config('app.devteam') }}</b></a>
        </p>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="{{ asset('/la-assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('la-assets/plugins/bootstrap-datetimepicker/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('la-assets/plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('la-assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('/la-assets/js/home.js') }}" type="text/javascript"></script>

</body>
</html>
