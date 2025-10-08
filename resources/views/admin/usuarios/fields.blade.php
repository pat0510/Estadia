<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field (antes era Correo) -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Contraseña Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrasena', 'Contraseña:') !!}
    {!! Form::password('contrasena', ['class' => 'form-control', 'required', 'minlength' => 6]) !!}
</div>

<!-- Fecha de Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fecha de Nacimiento:') !!}
    {!! Form::text('fechaNacimiento', null, ['class' => 'form-control', 'id' => 'fechaNacimiento']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fechaNacimiento').datepicker()
    </script>
@endpush

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', [
        'masculino' => 'Masculino',
        'femenino' => 'Femenino',
        'otro' => 'Otro'
    ], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción']) !!}
</div>

<!-- Teléfono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo de Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoUsuario', 'Tipo de Usuario:') !!}
    {!! Form::select('tipoUsuario', [
        'administrador' => 'Administrador',
        'medico' => 'Médico',
        'paciente' => 'Paciente'
    ], null, ['class' => 'form-control', 'placeholder' => 'Seleccione tipo']) !!}
</div>

<!-- Estado de Cuenta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estadoCuenta', 'Estado de Cuenta:') !!}
    {!! Form::select('estadoCuenta', [
        'activo' => 'Activo',
        'inactivo' => 'Inactivo'
    ], null, ['class' => 'form-control', 'placeholder' => 'Seleccione estado']) !!}
</div>
