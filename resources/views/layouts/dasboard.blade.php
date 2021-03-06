<!doctype html>
<html lang="es" class="perfect-scrollbar-on" >
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}" />
    <link rel="icon" type="assets/image/png" href="{{asset('img/favicon.png')}}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title','BSCONTROL')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />

    <!-- SweetAlert2 |https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.css -->
    <link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
 <div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{asset('assets/img/sidebar-1.jpg')}}">

        <div class="logo">
            <div align="center"><img src="{{asset('img/logo-bodyshop.PNG')}}"  rel="tooltip" title=BSCONTROL data-placement="bottom" WIDTH="120px" data-html="true"></div>
            <a href="{{url('/home')}}" class="simple-text">
                <h4><span class="tim-note"></span>BSCONTROL</h4>
            </a>
        </div>
        <!--MENU DE OPCIONES-->
        <div class="sidebar-wrapper">
            <ul class="nav">

                <li class="active">
                    <a href="{{asset('/home')}}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('home/solicitud')}}">
                        <i class="material-icons">assignment_turned_in</i>
                        <p>Solicitudes</p>
                    </a>
                </li>
                <!--
                <li>
                    <a href="{{url('')}}">
                        <i class="material-icons">content_paste</i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('')}}">
                        <i class="material-icons">library_books</i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('')}}">
                        <i class="material-icons">bubble_chart</i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('')}}">
                        <i class="material-icons">location_on</i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('')}}">
                        <i class="material-icons text-gray">notifications</i>
                        <p>Notifications</p>
                    </a>
                </li>
                -->
            </ul>
        </div>

    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Mike John responded to your email</a></li>
                                <li><a href="#">You have 5 new tasks</a></li>
                                <li><a href="#">You're now friend with Andrew</a></li>
                                <li><a href="#">Another Notification</a></li>
                                <li><a href="#">Another One</a></li>
                                <li><a href="#">Another One</a></li>
                                <li><a href="#">Another One</a></li>
                                <li><a href="#">Another One</a></li>
                                <li><a href="#">Another One</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="{{asset('img/'.Auth::user()->avatar)}}" id="avatarImage" width="24px" class="img-circle" alt="User Image" >
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{url('#')}}">
                                        <i class="material-icons">person</i> PERFIL
                                    </a>
                                </li>
                                <hr width="70%">
                                <li>
                                    <a id='salir' href="javascript:void(0)" class="btn btn-raised btn-danger"><i class="fa fa-power-off" aria-hidden="true"></i>    Salir<div class="ripple-container"></div></a>
                                    <!--
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="material-icons">exit_to_app</i> SALIR
                                    </a>
                                      -->
                                        <!--SweetAlert2-->
                                    @include('include.sweetalert_logout')
                                    <!--Cuando es confirmado llamo este formulario desde el SweetAlert mediante el id="logout-form"-->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Aqui el buscardo-->
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

<script src="{{asset('assets/js/arrive.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

{{--SweeAlert2 | https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.js --}}
<script src="{{asset('js/sweetalert2.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/material-dashboard.js')}}"></script>

<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</body>