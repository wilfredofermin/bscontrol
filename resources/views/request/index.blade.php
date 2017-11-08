@extends('layouts.dasboard')
@section('title','Solicitudes')
@section('content')
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <i class="material-icons">store</i>
            </div>
            <div class="card-content">
                <p class="category">Revenue</p>
                <h3 class="title">$34,245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <i class="material-icons">store</i>
            </div>
            <div class="card-content">
                <p class="category">Revenue</p>
                <h3 class="title">$34,245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <i class="material-icons">store</i>
            </div>
            <div class="card-content">
                <p class="category">Revenue</p>
                <h3 class="title">$34,245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <i class="material-icons">store</i>
            </div>
            <div class="card-content">
                <p class="category">Revenue</p>
                <h3 class="title">$34,245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header" data-background-color="purple">

                <h3 class="title"><span><i class="material-icons">assignment_turned_in</i></span> Solicitudes realizadas</h3>
                <p class="category">Here is a subtitle for this table</p>
                @include('include.search')
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr><th>ID</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr></thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>Niger</td>
                        <td>Oud-Turnhout</td>
                        <td>Editar</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>Curaçao</td>
                        <td>Sinaai-Waas</td>
                        <td>Editar</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>Netherlands</td>
                        <td>Baileux</td>
                        <td>Editar</td>
                    </tr>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

