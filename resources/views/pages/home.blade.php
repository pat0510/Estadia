@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
  <section class="hero-mw py-5 py-lg-6">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="badge rounded-pill text-bg-primary-subtle mb-3 fw-semibold">
            Bienestar • Acompañamiento • Emociones0
          </span>

          <h1 class="display-4 fw-bold lh-1 mb-3">
            <span class="text-primary">Bienvenido a</span><br>
            <span class="mw-title-gradient">MindWare</span>
          </h1>

          <p class="lead text-secondary-emphasis mb-4">
            <em>La salud mental no es un destino, es un camino que no tienes que recorrer solo.</em>
          </p>

          <div class="d-flex gap-3 flex-wrap">
            <a class="btn btn-outline-primary btn-lg px-4" href="#">
              Leer más...
            </a>
          </div>

          {{-- Mini highlights --}}
          <div class="d-flex gap-4 mt-4 text-secondary small">
            <div class="d-flex align-items-center gap-2">
              <span class="mw-dot"></span> Técnicas guiadas
            </div>
            <div class="d-flex align-items-center gap-2">
              <span class="mw-dot"></span> Test emocionales
            </div>
            <div class="d-flex align-items-center gap-2">
              <span class="mw-dot"></span> Citas y seguimiento
            </div>
          </div>
        </div>

        <div class="col-lg-6 text-center">
          {{-- Ilustración con brillo suave y ligera elevación --}}
          <figure class="mw-hero-illust m-0">
            <img src="{{ asset('img/emoticons.png') }}"
                 alt="Emociones MindWare"
                 class="img-fluid mw-emo-img">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{-- Franja de stats / confianza --}}
  <section class="py-4 bg-white border-top">
    <div class="container">
      <div class="row text-center g-3 g-lg-0">
        <div class="col-6 col-lg-3">
          <p class="h3 fw-bold mb-0 text-primary">+120</p>
          <p class="text-secondary mb-0">Técnicas practicadas</p>
        </div>
        <div class="col-6 col-lg-3">
          <p class="h3 fw-bold mb-0 text-primary">98%</p>
          <p class="text-secondary mb-0">Usuarios satisfechos</p>
        </div>
        <div class="col-6 col-lg-3">
          <p class="h3 fw-bold mb-0 text-primary">24/7</p>
          <p class="text-secondary mb-0">Acceso a recursos</p>
        </div>
        <div class="col-6 col-lg-3">
          <p class="h3 fw-bold mb-0 text-primary">Profesionales</p>
          <p class="text-secondary mb-0">Acompañamiento seguro</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Tarjetas de valor (limpias y modernas) --}}
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card mw-card h-100">
            <div class="card-body">
              <h5 class="card-title fw-bold">Técnicas guiadas</h5>
              <p class="card-text text-secondary">
                Ejercicios breves y prácticos para regular emociones y mejorar el enfoque.
              </p>
              <a href="#" class="link-primary fw-semibold">Explorar técnicas</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mw-card h-100">
            <div class="card-body">
              <h5 class="card-title fw-bold">Test emocionales</h5>
              <p class="card-text text-secondary">
                Mide tu bienestar con instrumentos validados y visualiza tu progreso.
              </p>
              <a href="#" class="link-primary fw-semibold">Aplicar un test</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mw-card h-100">
            <div class="card-body">
              <h5 class="card-title fw-bold">Citas y seguimiento</h5>
              <p class="card-text text-secondary">
                Agenda, recibe recordatorios y continúa tu proceso con orientación profesional.
              </p>
              <a href="#" class="link-primary fw-semibold">Agendar ahora</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
