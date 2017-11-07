<div class="modal fade" id="myModalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <div class="card card-signup">
                        <div class="header header-primary text-center">
                            <img src="{{asset('img/add-user.png')}}" class="img-fluid" alt="Responsive image">
                            <h4>FORMULARIO DE REGISTRO</h4>

                        </div>
                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <div class="form-group is-empty"><input type="text" class="form-control" placeholder=" Nombre completo..." name="email" value="{{ old('name') }}" required><span class="material-input"></span></div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-group is-empty"><input type="email" class="form-control" placeholder=" Correo electronico..." name="email" value="{{ old('email') }}" required><span class="material-input"></span></div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <div class="form-group is-empty"><input type="password" placeholder="Password..." class="form-control" name="password" required><span class="material-input"></span></div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <div class="form-group is-empty"><input type="password" placeholder="Confirmar Password..." class="form-control" name="password" required><span class="material-input"></span></div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                   <i class="material-icons"rel="tooltip" title=Sucursal data-placement="bottom" data-html="true" >store</i>
                                </span>
                                <select class="selectpicker"  header="Select a condiment" data-style="btn-btn-info" data-width="100%">
                                    <option>NACO</option>
                                    <option>BELLA VISTA</option>
                                    <option>ARROYO HONDO</option>
                                    <option>SANTIAGO</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                   <i class="material-icons" rel="tooltip" title=Departamento data-placement="bottom" data-html="true">work</i>
                                </span>
                                <select class="selectpicker"  header="Select a condiment" data-style="btn-btn-info" data-width="100%">
                                    <option>COMPUTOS</option>
                                    <option>CARGOS AUTOMATIVO</option>
                                    <option>CONTABILIDAD</option>
                                    <option>MERCADEO</option>
                                </select>
                            </div>



                        </div>
                        <div  class="footer text-center">
                            <button type="submit"  class="btn btn-primary btn-round">
                                <i class="material-icons">done</i> ACCESAR
                            </button>
                        </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-default btn-simple">Nice Button</button>-->
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cerrar<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: 46.5781px; top: 15px; background-color: rgb(244, 67, 54); transform: scale(8.5);"></div></div></button>
            </div>
        </div>
    </div>
</div>