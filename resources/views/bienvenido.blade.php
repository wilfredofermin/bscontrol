@extends('layouts.master')
@section('title','Bienvendio BSConttrol')
@section('class-page','tutorial-page')
@section('class-page','section landing-section')
@section('class-page','section text-center section-landing')
@section('content')

    <div class="header header-filter" style="background-image: url('{{asset('img/bgbs.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title">BSCONTROL</h1>
                    <h5 class="description">Sistema de servicios variados</h5>
                    <a href="#" id="tourTutorial" class="btn btn-danger btn-raised btn-lg" >
                        <i class="fa fa-play" ></i> Como funciona?
                    </a>
                    <a href="#" id="tourIntro" class="btn btn-success btn-raised btn-lg" >
                        <i class="fa fa-bus"></i> Inicia un demo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="section">
            {{--Mensaje de error--}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>Alerta de error:</b>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            @endif

            <div class="section text-center section-landing">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-primary">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">First Feature</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Second Feature</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Third Feature</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                </div>

                <div class="section landing-section">
                    <hr width="50%">{{--Linea separador--}}
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1><span class="tim-note">Estamos trabajamos para ti.</span></h1>
                            <h4 class="text-center description">Queremos ayudarte,no dejes de enviarnos tus inquietudes.</h4>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Tu nombre completo</label>
                                            <input type="email" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Tu correo electronico</label>
                                            <input type="email" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Tu mensaje</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                    <span class="material-input"></span></div>

                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 text-center">
                                        <button class="btn btn-primary btn-raised">
                                            Enviar mensaje
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection