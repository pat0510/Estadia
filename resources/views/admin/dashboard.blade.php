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

    {{-- Gestión de Técnicas --}}
    <div class="col-md-5 col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <a href="#" class="gestion-card">
        <div class="icon-box bg-gradient-success">
          <i class="fas fa-spa"></i>
        </div>
        <div class="info-box">
          <h4>Técnicas</h4>
          <p>Administra las técnicas mindfulness y sus recursos asociados.</p>
        </div>
      </a>
    </div>

    {{-- Gestión de Tests --}}
    <div class="col-md-5 col-lg-4" data-aos="fade-up" data-aos-delay="300">
      <a href="#" class="gestion-card">
        <div class="icon-box bg-gradient-info">
          <i class="fas fa-file-alt"></i>
        </div>
        <div class="info-box">
          <h4>Tests emocionales</h4>
          <p>Gestiona las evaluaciones emocionales y asignaciones.</p>
        </div>
      </a>
    </div>

    {{-- Gestión de Recompensas --}}
    <div class="col-md-5 col-lg-4" data-aos="fade-up" data-aos-delay="400">
      <a href="#" class="gestion-card">
        <div class="icon-box bg-gradient-warning">
          <i class="fas fa-gift"></i>
        </div>
        <div class="info-box">
          <h4>Recompensas</h4>
          <p>Administra los premios disponibles y su sistema de canjeo.</p>
        </div>
      </a>
    </div>

    {{-- Gestión de Reportes --}}
    <div class="col-md-5 col-lg-4" data-aos="fade-up" data-aos-delay="500">
      <a href="#" class="gestion-card">
        <div class="icon-box bg-gradient-danger">
          <i class="fas fa-chart-pie"></i>
        </div>
        <div class="info-box">
          <h4>Reportes</h4>
          <p>Visualiza estadísticas y métricas del progreso general.</p>
        </div>
      </a>
    </div>

    {{-- Notificaciones --}}
    <div class="col-md-5 col-lg-4" data-aos="fade-up" data-aos-delay="600">
      <a href="#" class="gestion-card">
        <div class="icon-box bg-gradient-secondary">
          <i class="fas fa-bell"></i>
        </div>
        <div class="info-box">
          <h4>Notificaciones</h4>
          <p>Envía y gestiona alertas y mensajes del sistema.</p>
        </div>
      </a>
    </div>

  </div>
</div>
@endsection
