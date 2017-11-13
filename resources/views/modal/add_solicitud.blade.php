<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <!--      Wizard container        -->
                            <div class="wizard-container">
                                <div class="card wizard-card" data-color="purple" id="wizard">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <form action="" method="">
                                        <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                                        <div class="wizard-header">
                                            <h3 class="wizard-title">
                                                SOLICITUD DE SERVICIO
                                            </h3>
                                        </div>
                                        <div class="wizard-navigation">
                                            <ul>
                                                <li><a href="#info" data-toggle="tab">Ubicacion</a></li>
                                                <li><a href="#tipo" data-toggle="tab">Solicitud</a></li>
                                                <li><a href="#description" data-toggle="tab">Descripcion Extras</a></li>
                                            </ul>
                                        </div>
                                        {{--DATOS DEL EQUIPO--}}
                                        <div class="tab-content">
                                            <div class="tab-pane" id="info">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class="info-text"> LUGAR DE LA SOLICITUD</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Ubicacion</label>
                                                            <select name="" class="form-control" >
                                                                @foreach($sucursales as $sucursal)
                                                                    <option value="{{$sucursal->id}}">{{$sucursal->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">Tipo de servicio</label>
                                                            <select name="" class="form-control" id="select-tipo">
                                                                <option value="">--Tipo de servicio--</option>
                                                                @foreach($services as $service)
                                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                    </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Area de referencia</label>
                                                                <input name="area" type="text" class="form-control" required >
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Nivel de urgencia</label>
                                                            <select class="form-control">
                                                                <option value="pc"> Normal</option>
                                                                <option value="laptop">Bajo</option>
                                                                <option value="Movil">Alto</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--TIPO DE SERVICIO--}}
                                            <div class="tab-pane" id="tipo">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Categoria</label>
                                                            <select name="" class="form-control" id="select-category" >
                                                                <option value="">--</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Sub Categoria</label>
                                                            <select name="" class="form-control" id="select-subcategory">
                                                                <option value="pc"> PC </option>
                                                                <option value="laptop"> Laptop </option>
                                                                <option value="Movil"> Movil </option>
                                                                <option value="Movil"> Handkey </option>
                                                                <option value="Otros"> Otros</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
                                                                <input type="radio" name="job" value="Design">
                                                                <div class="icon">
                                                                    <i class="material-icons">weekend</i>
                                                                </div>
                                                                <h6>Single</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
                                                                <input type="radio" name="job" value="Code">
                                                                <div class="icon">
                                                                    <i class="material-icons">home</i>
                                                                </div>
                                                                <h6>Family</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are coming with your team.">
                                                                <input type="radio" name="job" value="Code">
                                                                <div class="icon">
                                                                    <i class="material-icons">business</i>
                                                                </div>
                                                                <h6>Business</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--DESCRIPCION--}}
                                            <div class="tab-pane" id="description">
                                                <div class="row">
                                                    <h4 class="info-text"> Drop us a small description.</h4>
                                                    <div class="col-sm-6 col-sm-offset-1">
                                                        <div class="form-group">
                                                            <label>Room description</label>
                                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Example</label>
                                                            <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-footer">
                                            <div class="pull-right">
                                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd'  value='Proximo'/>
                                                <input type='button' class='btn btn-finish btn-fill btn-success btn-wd'  value='Finalizado' />
                                            </div>
                                            <div class="pull-left">
                                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' value='< Anterior' />

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- wizard container -->
                        </div>
                    </div> <!-- row -->
                </div> <!--  big container -->
    </div>
</div>