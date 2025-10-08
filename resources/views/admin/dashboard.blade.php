@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/crud-style.css') }}">
<section class="content-header py-4 text-center">
  <div class="container">
    <h1 class="fw-bold text-primary mb-3">
      <i class="fas fa-crown me-2"></i>Panel principal del administrador
    </h1>
    <p class="text-muted">Gestiona usuarios, técnicas, tests, recompensas y más desde un solo lugar.</p>
  </div>
</section>

<div class="container py-4">
  <div class="row g-4 justify-content-center">

    {{-- Gestión de Usuarios --}}
    <div class="col-md-5 col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <a href="{{ route('admin.usuarios.index') }}" class="gestion-card">
        <div class="icon-box bg-gradient-primary">
          <i class="fas fa-users"></i>
        </div>
        <div class="info-box">
          <h4>Usuarios</h4>
          <p>Agrega, edita o elimina cuentas de usuarios registrados.</p>
        </div>
      </a>
    </div>

  </div>
</div>
@endsection
