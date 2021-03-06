<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>@yield('title','BSCONTROL')</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet">
    <!-- SweetAlert2 |https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.css -->
    <link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}">

    <!--CSS MATERIAL WINZARD-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel="stylesheet" type="text/css">

    <!-- SweetAlert2 |https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.css -->
    <link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}">

    <link rel="stylesheet" href="{{asset('css/button-float.css')}}">


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{asset('img/basket.jpg')}}">

        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

        <div class="logo">
            <div align="center"><img src="{{asset('img/logo-bodyshop.PNG')}}"  rel="tooltip" title=BSCONTROL data-placement="bottom" WIDTH="120px" data-html="true"></div>
            <a href="{{url('/home')}}" class="simple-text">
                <h4><span class="tim-note"></span>BSCONTROL</h4>
            </a>
            </a>
        </div>

        <div class="sidebar-wrapper">

            <ul class="nav">
                <li class="@yield('home','active')">
                    <a href="{{url('/home')}}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                <li class="@yield('solicitud')">
                    <a href="{{url('/home/solicitud')}}">
                        <i class="material-icons">assignment_turned_in</i>
                        <p>Solicitudes</p>
                    </a>
                </li>
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
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
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
                            <ul class="dropdown-menu">
                                <li><a href="#">Mike John responded to your email</a></li>
                                <li><a href="#">You have 5 new tasks</a></li>
                                <li><a href="#">You're now friend with Andrew</a></li>
                                <li><a href="#">Another Notification</a></li>
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
                                {{--Linia de division--}}
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

                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group  is-empty">
                            <input type="text" class="form-control" placeholder="Buscar..">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i><div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
            <div class="container-fluid">
                <div class="row">
                @yield('content')
                </div>
            </div>
    </div>

</div>
@include('modal.add_solicitud')
</body>

<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
{{--SweeAlert2 | https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.js --}}
<script src="{{asset('js/sweetalert2.js')}}"></script>

<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/material-dashboard.js')}}"></script>


<!--  Plugin for the Wizard -->
<script src="{{asset('assets/js/material-bootstrap-wizard.js')}}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>

<script>
    $(function () {
        $('#select-tipo').on('change', onSelectTipoChange);

    });
    function onSelectTipoChange() {
        //Aqui tengo el ID del tipo
        var category_id=$(this).val();

        // AJAX
        $.get('/home/solicitud/'+category_id+'/category',function(data){
            var html_select='<option value="">Selectione la categoria</option>';
            for (var i=0;i<data.length;++i)
                html_select +='<option value="'+data[i].id+'">'+data[i].name+'</option>';
           // console.log(html_select);
            $('#select-category').html(html_select);
        });
    }
</script>

</html>

