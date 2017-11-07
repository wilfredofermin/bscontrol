<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <div class="card card-signup">
                        <div class="header header-primary text-center">
                            <img src="{{asset('img/acceso.png')}}" class="img-fluid" alt="Responsive image">
                            <h4>FORMULARIO DE ACCESO</h4>

                        </div>
                        <div class="content">

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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Recordarme
                                </label>
                            </div>

                            <!-- If you want to add a checkbox to this form, uncomment this code

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                    Subscribe to newsletter
                                </label>
                            </div> -->
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