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

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::email('correo', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- contrasena Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrasena', 'Contrasena:') !!}
    {!! Form::password('contrasena', ['class' => 'form-control', 'required', 'minlength' => 6]) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
    {!! Form::text('fechaNacimiento', null, ['class' => 'form-control','id'=>'fechaNacimiento']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fechaNacimiento').datepicker()
    </script>
@endpush

<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', [
        'masculino' => 'Masculino',
        'femenino' => 'Femenino',
        'otro' => 'Otro'
    ], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción']) !!}
</div>


<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('tipoUsuario', 'Tipo de Usuario:') !!}
    {!! Form::select('tipoUsuario', [
        'administrador' => 'Administrador',
        'medico' => 'Médico',
        'paciente' => 'Paciente'
    ], null, ['class' => 'form-control', 'placeholder' => 'Seleccione tipo']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('estadoCuenta', 'Estado de Cuenta:') !!}
    {!! Form::select('estadoCuenta', [
        'activo' => 'Activo',
        'inactivo' => 'Inactivo'
    ], null, ['class' => 'form-control', 'placeholder' => 'Seleccione estado']) !!}
</div>
