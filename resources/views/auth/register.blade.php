@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST"  action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('is_admin') ? ' has-error' : '' }}">
                            <label for="is_admin" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                <select name="is_admin" id="is_admin">
                                    <option selected>Eliga una opción</option>
                                    <option value="0">Administrador</option>
                                    <option value="1">Funcionario</option>
                                    <option value="2">Alumno</option>
                                    <option value="3">Docente</option>
                                    <option value="4">Laborante</option>
                                </select>

                                @if ($errors->has('is_admin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_admin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                            <label for="rut" class="col-md-4 control-label">Rut</label>

                            <div class="col-md-6">
                                <input id="rut" type="text" class="form-control" name="rut" value="{{ old('rut') }}" required autofocus>

                                @if ($errors->has('rut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_ape_pat') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="usu_ape_pat" type="text" class="form-control" name="usu_ape_pat" value="{{ old('usu_ape_pat') }}" required autofocus>

                                @if ($errors->has('usu_ape_pat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_ape_pat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_ape_mat') ? ' has-error' : '' }}">
                            <label for="usu_ape_mat" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="usu_ape_mat" type="text" class="form-control" name="usu_ape_mat" value="{{ old('usu_ape_mat') }}" required autofocus>

                                @if ($errors->has('usu_ape_mat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_ape_mat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_gen') ? ' has-error' : '' }}">
                            <label for="usu_gen" class="col-md-4 control-label">Género</label>

                            <div class="col-md-6">
                                <input type="radio" name="usu_gen" value="Femenino" required="required" /> Femenino
                                <input type="radio" name="usu_gen" value="Masculino" required="required" /> Masculino
                                @if ($errors->has('usu_gen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_gen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_fec_nac') ? ' has-error' : '' }}">
                            <label for="usu_fec_nac" class="col-md-4 control-label">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                                <input type="date" name="usu_fec_nac" step="1" min="1980-01-01" max="2017-12-31" value="2017-01-01">
                                @if ($errors->has('usu_fec_nac'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_fec_nac') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_direc') ? ' has-error' : '' }}">
                            <label for="usu_direc" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <input id="usu_direc" type="text" class="form-control" name="usu_direc" value="{{ old('usu_direc') }}" required autofocus>

                                @if ($errors->has('usu_direc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_direc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_tel') ? ' has-error' : '' }}">
                            <label for="usu_tel" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-6">
                                <input id="usu_tel" type="text" class="form-control" name="usu_tel" value="{{ old('usu_tel') }}" required autofocus>

                                @if ($errors->has('usu_tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_email_inst') ? ' has-error' : '' }}">
                            <label for="usu_email_inst" class="col-md-4 control-label">Correo Electrónico Institucional</label>

                            <div class="col-md-6">
                                <input id="usu_email_inst" type="email" class="form-control" name="usu_email_inst" value="{{ old('email') }}" required>

                                @if ($errors->has('usu_email_inst'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_email_inst') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_ano_ing') ? ' has-error' : '' }}">
                            <label for="usu_ano_ing" class="col-md-4 control-label">Año Ingreso</label>

                            <div class="col-md-6">
                                <input type="date" name="usu_ano_ing" step="1" min="1980-01-01" max="2018-12-31" value="2017-01-01">

                            @if ($errors->has('usu_ano_ing'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_ano_ing') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_nom_cont_eme') ? ' has-error' : '' }}">
                            <label for="usu_nom_cont_eme" class="col-md-4 control-label">Nombre contacto de Emergencia</label>

                            <div class="col-md-6">
                                <input id="usu_nom_cont_eme" type="text" class="form-control" name="usu_nom_cont_eme" value="{{ old('usu_nom_cont_eme') }}" required autofocus>

                                @if ($errors->has('usu_nom_cont_eme'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_nom_cont_eme') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_tel_cont_eme') ? ' has-error' : '' }}">
                            <label for="usu_tel_cont_eme" class="col-md-4 control-label">Teléfono contacto Emergencia</label>

                            <div class="col-md-6">
                                <input id="usu_tel_cont_eme" type="text" class="form-control" name="usu_tel_cont_eme" value="{{ old('usu_tel_cont_eme') }}" required autofocus>

                                @if ($errors->has('usu_tel_cont_eme'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_tel_cont_eme') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_fech_ins') ? ' has-error' : '' }}">
                            <label for="usu_fech_ins" class="col-md-4 control-label">Fecha de Inscripción</label>

                            <div class="col-md-6">
                                <input type="date" name="usu_fech_ins" step="1" min="1990-01-01" max="2018-12-31" value="2017-01-01">
                                @if ($errors->has('usu_fech_ins'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_fech_ins') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_cert_med') ? ' has-error' : '' }}">
                            <label for="usu_cert_med" class="col-md-4 control-label">Certificado Médico</label>

                            <div class="col-md-6">
                                <input type="file" name="usu_cert_med" />
                                @if ($errors->has('usu_cert_med'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_cert_med') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_est_cert_med') ? ' has-error' : '' }}">
                            <label for="usu_est_cert_med" class="col-md-4 control-label">Estado Certificado Médico</label>

                            <div class="col-md-6">
                                <select name="usu_est_cert_med" id="usu_est_cert_med">
                                    <option selected>Eliga una opción</option>
                                    <option value="0">Inactivo</option>
                                    <option value="1">Activo</option>
                                </select>

                                @if ($errors->has('usu_est_cert_med'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_est_cert_med') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_est') ? ' has-error' : '' }}">
                            <label for="usu_est" class="col-md-4 control-label">Estado Usuario</label>

                            <div class="col-md-6">
                                <select name="usu_est" id="usu_est">
                                    <option selected>Eliga una opción</option>
                                    <option value="0">Inactivo</option>
                                    <option value="1">Activo</option>
                                </select>

                                @if ($errors->has('usu_est'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_est') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_area') ? ' has-error' : '' }}">
                            <label for="usu_area" class="col-md-4 control-label">Area usuario</label>

                            <div class="col-md-6">
                                <select name="usu_area" id="usu_area">
                                    <option selected>Eliga una opción</option>
                                    <option value="funcionario">funcionario</option>
                                    <option value="etc">etc</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>

                                </select>
                                @if ($errors->has('usu_area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usu_nom_carr') ? ' has-error' : '' }}">
                            <label for="usu_nom_carr" class="col-md-4 control-label">Carrera</label>

                            <div class="col-md-6">
                                <select name="usu_nom_carr" id="usu_nom_carr">
                                    <option selected>Eliga una opción</option>
                                    <option value="informatica">informatica</option>
                                    <option value="derecho">derecho</option>
                                    <option value="etc">etc</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>

                                </select>
                                @if ($errors->has('usu_nom_carr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usu_nom_carr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
