@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Usuario</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @include('adminlte-templates::common.errors')

        <div class="card">
            {{-- Model binding con el registro a editar --}}
            {!! Form::model($usuario, ['route' => ['admin.usuarios.update', $usuario->idUsuario], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- Importante: ruta del partial ya en admin/usuarios --}}
                    @include('admin.usuarios.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.usuarios.index') }}" class="btn btn-default">Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
