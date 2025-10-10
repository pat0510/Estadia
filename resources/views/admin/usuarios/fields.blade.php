@php
    use Illuminate\Support\Carbon;
@endphp

{{-- Nombre --}}
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', old('nombre', $usuario->nombre ?? null), [
        'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
        'maxlength' => 50,
        'autocomplete' => 'given-name',
    ]) !!}
    @error('nombre')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Apellido --}}
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', old('apellido', $usuario->apellido ?? null), [
        'class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''),
        'maxlength' => 50,
        'autocomplete' => 'family-name',
    ]) !!}
    @error('apellido')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Email --}}
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', old('email', $usuario->email ?? null), [
        'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
        'maxlength' => 100,
        'autocomplete' => 'email',
    ]) !!}
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Contraseña (solo requerida en create;) --}}
<div class="form-group col-sm-6">
    {!! Form::label('contrasena', 'Contraseña:') !!}
    {!! Form::password('contrasena', [
        'class' => 'form-control' . ($errors->has('contrasena') ? ' is-invalid' : ''),
        'autocomplete' => 'new-password',
        'minlength' => 8,
        // sin pattern para no activar validación del navegador
    ]) !!}
    @error('contrasena')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <small class="form-text text-muted">
        Mínimo 8 caracteres, con mayúsculas, minúsculas, números y símbolo.
    </small>
</div>

{{-- Confirmación de contraseña --}}
<div class="form-group col-sm-6">
    {!! Form::label('contrasena_confirmation', 'Confirmar contraseña:') !!}
    {!! Form::password('contrasena_confirmation', [
        'class' => 'form-control' . ($errors->has('contrasena_confirmation') ? ' is-invalid' : ''),
        'autocomplete' => 'new-password',
    ]) !!}
    @error('contrasena_confirmation')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Fecha de nacimiento --}}
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fecha de nacimiento:') !!}
    {!! Form::date(
        'fechaNacimiento',
        old(
            'fechaNacimiento',
            isset($usuario) && $usuario->fechaNacimiento
                ? Carbon::parse($usuario->fechaNacimiento)->format('Y-m-d')
                : null
        ),
        [
            'class' => 'form-control' . ($errors->has('fechaNacimiento') ? ' is-invalid' : ''),
            'max' => now()->format('Y-m-d'),
        ]
    ) !!}
    @error('fechaNacimiento')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <small class="form-text text-muted">Formato: AAAA-MM-DD</small>
</div>

{{-- Sexo --}}
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select(
        'sexo',
        ['masculino' => 'Masculino', 'femenino' => 'Femenino', 'otro' => 'Otro'],
        old('sexo', $usuario->sexo ?? null),
        [
            'class' => 'form-select' . ($errors->has('sexo') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione…',
        ]
    ) !!}
    @error('sexo')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Teléfono --}}
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::text('telefono', old('telefono', $usuario->telefono ?? null), [
        'class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''),
        'maxlength' => 10,
        'inputmode' => 'numeric', // guía para móviles
        'autocomplete' => 'tel',
    ]) !!}
    @error('telefono')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <small class="form-text text-muted">10 dígitos sin espacios ni guiones.</small>
</div>

{{-- Tipo de usuario --}}
<div class="form-group col-sm-6">
    {!! Form::label('tipoUsuario', 'Tipo de usuario:') !!}
    {!! Form::select(
        'tipoUsuario',
        ['administrador' => 'Administrador', 'paciente' => 'Paciente'],
        old('tipoUsuario', $usuario->tipoUsuario ?? null),
        [
            'class' => 'form-select' . ($errors->has('tipoUsuario') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione…',
        ]
    ) !!}
    @error('tipoUsuario')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>



<div class="form-group col-sm-6">
    {!! Form::label('estadoCuenta', 'Estado de Cuenta:') !!}
    {!! Form::select('estadoCuenta', [
        'activo' => 'Activo',
        'inactivo' => 'Inactivo'
    ], null, ['class' => 'form-control', 'placeholder' => 'Seleccione estado']) !!}
</div>
