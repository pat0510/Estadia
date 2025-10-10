@extends('layouts.app')

@section('title', 'Bienvenido Paciente')

@section('content')
<section class="paciente-hero text-center py-5">
  <div class="container">
    <h1 class="fw-bold text-white mb-3 animate-fadein">
      ¡Bienvenido a tu espacio de bienestar!
    </h1>
    <p class="lead text-light mx-auto" style="max-width: 720px;">
      Aquí podrás seguir tu progreso emocional, realizar tus test, y acceder a recursos
      diseñados para fortalecer tu salud mental. 🌱  
      Recuerda: <em>cada pequeño paso cuenta.</em>
    </p>
  </div>
</section>

{{-- Carrusel --}}
<section class="paciente-carousel py-5">
  <div class="container">
    <div id="pacienteCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/slide1.png') }}" class="d-block w-100 img-fluid carousel-img" alt="Imagen 1">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/slide2.png') }}" class="d-block w-100 img-fluid carousel-img" alt="Imagen 2">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/slide3.png') }}" class="d-block w-100 img-fluid carousel-img" alt="Imagen 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#pacienteCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#pacienteCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>

{{-- Zona de gestión --}}
<section class="paciente-opciones py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold text-primary mb-4">¿Qué deseas hacer hoy?</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-3">
        <a href="#" class="card shadow-sm h-100 p-4 paciente-card">
          <i class="fas fa-heartbeat fa-2x text-success mb-3"></i>
          <h5 class="fw-bold">Mis Test</h5>
          <p class="text-muted">Accede y completa tus pruebas emocionales.</p>
        </a>
      </div>
      <div class="col-md-3">
        <a href="#" class="card shadow-sm h-100 p-4 paciente-card">
          <i class="fas fa-spa fa-2x text-success mb-3"></i>
          <h5 class="fw-bold">Técnicas Mindfulness</h5>
          <p class="text-muted">Explora técnicas para tu bienestar diario.</p>
        </a>
      </div>
      <div class="col-md-3">
        <a href="#" class="card shadow-sm h-100 p-4 paciente-card">
          <i class="fas fa-calendar-check fa-2x text-success mb-3"></i>
          <h5 class="fw-bold">Citas</h5>
          <p class="text-muted">Consulta tus citas o agenda una nueva.</p>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
