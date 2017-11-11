<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title','BSCONTROL')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />


    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/material-kit.css')}}" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Dropdown -->
    <link href="{{asset('css/bootstrap-select.min.css')}}" rel="stylesheet"/>
    <!--
    <!-- CSS Files
    <link href="{{asset('assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />
    <!--  Crediitos
    <a href="https://wilfredofermin.github.io" class="made-with-mk">
        <div class="brand">WF</div>
        <div class="made-with">Developers >_ <strong> RD&copy</strong> </div>
    </a>
    -->
<body class="@yield('class-page')">


<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{url('/app')}}" id="tourInicio">
                <div class="logo-container" >
                    <div class="logo">
                        <img src="{{asset('img/logobs.jpg')}}"  rel="tooltip" title=BSCONTROL data-placement="bottom" data-html="true" width="48" height="48">
                    </div>
                    <div class="brand">
                        BODYSHOP CONTROL
                    </div>

                </div>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul  class="nav navbar-nav navbar-right">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary btn-round">
                            <i class="material-icons">dashboard</i> Dashboard
                        </a>
                        @else
                            <a href="#" class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal">
                                <i class="material-icons">verified_user</i> Acceso
                            </a>
                            <a href="#" class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModalRegistro">
                                <i class="material-icons">person_add</i> Registrate
                            </a>
                        <!--
                            <a href="{{ route('register') }}" class="btn btn-primary btn-round">
                                <i class="material-icons">person_add</i> Registrate
                            </a>
                            -->
                            @endauth
                    </div>
                @endif
            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="wrapper">
    @yield('content')
</div>
<footer class="footer footer-transparent">
    <div class="container">
        <nav class="pull-right">
            <ul>
                <li>
                    <a href="https://wilfredofermin.github.io/">
                        <i class="material-icons">web</i> WF Developers
                    </a>
                </li>
            </ul>
        </nav>
        <!--
        <div class="social-area pull-right">
            <a class="btn btn-social btn-twitter btn-just-icon" href="https://twitter.com/CreativeTim">
                <i class="fa fa-twitter"></i>
            </a>
            <a class="btn btn-social btn-facebook btn-just-icon" href="https://www.facebook.com/CreativeTim">
                <i class="fa fa-facebook-square"></i>
            </a>
            <a class="btn btn-social btn-google btn-just-icon" href="https://plus.google.com/+CreativetimPage">
                <i class="fa fa-google-plus"></i>
            </a>
        </div>
        -->
        <div class="copyright">
            &copy; 2017 Bodyshop Athletic Club
        </div>
    </div>
</footer>

</body>
<!--   Core JS Files   -->

<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/material.min.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>
{{--Bootstrap Notify--}}
<script src="{{asset('js/bootstrap-notify.js')}}" type="text/javascript"></script>
<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{{asset('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>

<!-- Dashboard del sistema-->
<script src="{{asset('js/material-dashboard.js')}}" type="text/javascript"></script>
{{--Bootstrap Dropdown Select--}}
<script src="{{asset('js/bootstrap-select.min.js')}}" type="text/javascript"></script>

<!-- Inimodalodal -->
@include('modal.acceso')
@include('modal.registrate')
@include('modal.tutorial')
        <!-- Fin Modal -->
<script>
    $(function(){
        $('#tourIntro').click(function(){
            Tour.run([
                {
                    element: $('#tourAcceso'),
                    content: 'Debes tener una cuenta para acceder al sistema de comprar',
                    position: 'bottom'bienvenido.blade.php
                },
                {
                    element: $('#tourRegistro'),
                    content: 'De no tener una cuenta, accede desde aqui',
                    position: 'bottom'
                },

                {
                    element: $('#tourMsg'),
                    content: 'Para alguna informacion de interes, escribe un mensaje',
                    position: 'top'
                },
                {
                    element: $('#tourTutorial'),
                    content: 'Mira el tutorial de funcionamiento basico',
                    position: 'bottom'
                }
            ],{language:"es"});
        });
    });
</script>
<script>

    $().ready(function(){

        $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

    });

</script>
<script>
    $(document).ready(function(){
        autoPlayYouTubeModal();
    });
</script>
<script type="text/javascript">
    function autoPlayYouTubeModal() {
        var trigger = $("body").find('[data-toggle="modal"]');
        trigger.click(function () {
            var theModal = $(this).data("target"),
                videoSRC = $(this).attr("data-theVideo"),
                videoSRCauto = videoSRC + "?autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.close').click(function () {
                $(theModal + ' iframe').attr('src', videoSRC);
            });
        });
    }
</script>


</html>
