<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $usuarios->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $usuarios->apellido }}</p>
</div>

<!-- email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'email:') !!}
    <p>{{ $usuarios->email }}</p>
</div>

<!-- Contrasena Field -->
<div class="col-sm-12">
    {!! Form::label('contrasena', 'Contrasena:') !!}
    <p>{{ $usuarios->contrasena }}</p>
</div>

<!-- Fechanacimiento Field -->
<div class="col-sm-12">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
    <p>{{ $usuarios->fechaNacimiento }}</p>
</div>

<!-- Sexo Field -->
<div class="col-sm-12">
    {!! Form::label('sexo', 'Sexo:') !!}
    <p>{{ $usuarios->sexo }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $usuarios->telefono }}</p>
</div>

<!-- Tipousuario Field -->
<div class="col-sm-12">
    {!! Form::label('tipoUsuario', 'Tipo de usuario:') !!}
    <p>{{ $usuarios->tipoUsuario }}</p>
</div>

<!-- Estadocuenta Field -->
<div class="col-sm-12">
    {!! Form::label('estadoCuenta', 'Estadocuenta:') !!}
    <p>{{ $usuarios->estadoCuenta }}</p>
</div>

