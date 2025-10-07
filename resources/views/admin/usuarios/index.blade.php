@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1 class="fw-bold text-primary mb-0">Gestión de usuarios</h1>
            <a class="btn btn-primary shadow-sm"
               href="{{ route('admin.usuarios.create') }}">
                <i class="fas fa-user-plus me-2"></i> Crear nuevo usuario
            </a>
        </div>
    </section>

    <div class="content px-3">
        {{-- Mensajes flash --}}
        @include('flash::message')

        <div class="clearfix mb-3"></div>

        {{-- Contenedor principal de la tabla --}}
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-3">
                {{-- ✅ Aquí se incluye la tabla CRUD estilizada --}}
                @include('admin.usuarios.table')
            </div>
        </div>
    </div>
@endsection
