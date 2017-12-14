<div style="width: 735px; height: 800px; overflow-y: scroll;">

<div class="form-group">
{!! Form::Label('is_admin','Tipo de Usuario') !!}
{!! Form::select('is_admin', ['1'=>'Administrador', '2'=>'Funcionario', '3'=>'Alumno','4'=>'Docente','5'=>'Laborante'], null, ['placeholder'=>'Elija una opcion'], ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('rut','Rut') !!}
    {!! Form::number('rut', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('name','Nombre') !!}
    {!! Form::text('name', null, ['class' =>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::Label('usu_ape_pat','Apellido Paterno') !!}
    {!! Form::text('usu_ape_pat', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_ape_mat','Apellido Materno') !!}
    {!! Form::text('usu_ape_mat', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_gen','Género') !!}
    {!! Form::select('usu_gen',['masculino'=>'masculino', 'femenino'=>'femenino'], null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_fec_nac','Fecha de Nacimiento') !!}
    {!! Form::date('usu_fec_nac', null, ['class' =>'form-control'], \Carbon\Carbon::now()) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_direc','Dirección') !!}
    {!! Form::text('usu_direc', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_tel','Teléfono') !!}
    {!! Form::number('usu_tel', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('email','Correo Electrónico') !!}
    {!! Form::email('email', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_email_inst','Correo Electrónico Institucional') !!}
    {!! Form::email('usu_email_inst', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_ano_ing','Año Ingreso') !!}
    {!! Form::date('usu_ano_ing',null,['class' =>'form-control'],\Carbon\Carbon::now()) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_nom_cont_eme','Nombre Contacto Emergencia') !!}
    {!! Form::text('usu_nom_cont_eme', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_tel_cont_eme','Teléfono Contacto Emergencia') !!}
    {!! Form::number('usu_tel_cont_eme', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_fech_ins','Fecha de Inscripción') !!}
    {!! Form::date('usu_fech_ins', null, ['class' =>'form-control'], \Carbon\Carbon::now()) !!}
</div>

<div class="form-group">
    {!! Form::Label('usu_cert_med','Certificado Médico') !!}
    {!! Form::file('usu_cert_med', null, ['class' =>'form-control']) !!}
</div>

    <div class="form-group">
        {!! Form::Label('usu_est_cert_med','Estado Certificado Médico') !!}
        {!! Form::select('usu_est_cert_med',['1'=>'Activo', '0'=>'Inactivo'], null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('usu_est','Estado Usuario') !!}
        {!! Form::select('usu_est',['1'=>'Activo', '0'=>'Inactivo'], null, ['class' =>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::Label('usu_area','Area usuario') !!}
        {!! Form::select('usu_area',['funcionario'=>'funcionario', 'etc'=>'etc','2002'=>'2002','2003'=>'2003','2004'=>'2004',
        '2005'=>'2005','2006'=>'2006','2007'=>'2007','2008'=>'2008','2009'=>'2009',
        '2010'=>'2010','2011'=>'2011','2012'=>'2012','2013'=>'2013','2014'=>'2014','2015'=>'2015',
        '2016'=>'2016','2017'=>'2017','2018'=>'2018',], null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('usu_nom_carr','Nombre carrera') !!}
        {!! Form::select('usu_nom_carr',['informatica'=>'informatica', 'derecho'=>'derecho','etc'=>'etc','2003'=>'2003','2004'=>'2004',
        '2005'=>'2005','2006'=>'2006','2007'=>'2007','2008'=>'2008','2009'=>'2009',
        '2010'=>'2010','2011'=>'2011','2012'=>'2012','2013'=>'2013','2014'=>'2014','2015'=>'2015',
        '2016'=>'2016','2017'=>'2017','2018'=>'2018',], null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('password','Contraseña') !!}
        {!! Form::password('password',['class' => 'awesome','form-control'] ) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('password_confirmation','Reescribir Contraseña') !!}
        {!! Form::password('password-confirmation',['class' => 'awesome','form-control']) !!}
    </div>

<div class="form-group">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>
</div>