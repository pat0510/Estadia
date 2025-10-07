@extends('layouts.app')

@section('title', 'Bienvenido a MindWare')

@section('content')

{{-- ========================= HERO ========================= --}}
<section class="hero-mw py-5 py-lg-6">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="badge rounded-pill text-bg-primary-subtle mb-3 fw-semibold">
          Bienestar • Acompañamiento • Emociones
        </span>

        <h1 class="display-4 fw-bold lh-1 mb-3">
          <span class="text-primary">Bienvenido a</span><br>
          <span class="mw-title-gradient">MindWare</span>
        </h1>

        <p class="lead text-secondary-emphasis mb-4">
          <em>La salud mental no es un destino, es un camino que no tienes que recorrer solo.</em>
        </p>

        <a class="btn btn-outline-primary btn-lg px-4" href="#salud-mental">
          Descubre más
        </a>
      </div>

      <div class="col-lg-6 text-center">
        <figure class="mw-hero-illust m-0">
          <img src="{{ asset('img/emoticons.png') }}" alt="Emociones MindWare"
               class="img-fluid mw-emo-img">
        </figure>
      </div>
    </div>
  </div>
</section>


{{-- ========================= SECCIÓN: IMPORTANCIA SALUD MENTAL ========================= --}}
<section id="salud-mental" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4 text-primary">¿Por qué es importante cuidar tu salud mental?</h2>
    <p class="text-secondary mx-auto mb-5" style="max-width: 720px;">
      La salud mental influye en cómo pensamos, sentimos y actuamos.  
      Cuidarla te permite mantener equilibrio emocional, tomar mejores decisiones  
      y disfrutar de relaciones más plenas.
    </p>

    <div class="row g-4 justify-content-center">

      {{-- Tarjeta 1 --}}
      <div class="col-md-4 col-sm-10">
        <div class="visual-card full-bg-card rounded-4 shadow-lg position-relative overflow-hidden">
          <img src="{{ asset('img/calma.png') }}" alt="Reducción del estrés" class="card-bg-img">
          <div class="overlay-gradient"></div>
          <div class="text-overlay">
            <h4 class="fw-bold text-white mb-2">Reducción del estrés</h4>
            <p class="text-light small">Aprende a gestionar la presión diaria y mantener la calma interior.</p>
          </div>
        </div>
      </div>

      {{-- Tarjeta 2 --}}
      <div class="col-md-4 col-sm-10">
        <div class="visual-card full-bg-card rounded-4 shadow-lg position-relative overflow-hidden">
          <img src="{{ asset('img/energia.png') }}" alt="Mayor energía" class="card-bg-img">
          <div class="overlay-gradient"></div>
          <div class="text-overlay">
            <h4 class="fw-bold text-white mb-2">Mayor energía</h4>
            <p class="text-light small">La mente en equilibrio impulsa tu bienestar físico y emocional.</p>
          </div>
        </div>
      </div>

      {{-- Tarjeta 3 --}}
      <div class="col-md-4 col-sm-10">
        <div class="visual-card full-bg-card rounded-4 shadow-lg position-relative overflow-hidden">
          <img src="{{ asset('img/enfoque.png') }}" alt="Claridad y enfoque" class="card-bg-img">
          <div class="overlay-gradient"></div>
          <div class="text-overlay">
            <h4 class="fw-bold text-white mb-2">Claridad y enfoque</h4>
            <p class="text-light small">Conecta con tus objetivos y toma decisiones con serenidad.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




{{-- ========================= SECCIÓN: BENEFICIOS ========================= --}}
<section class="py-5 position-relative" style="background: linear-gradient(135deg, #efb5f7ff, #bdcef1ff);">
  <div class="container text-center text-white">
    <h2 class="fw-bold mb-4">Beneficios de fortalecer tu bienestar mental</h2>
    <p class="mx-auto mb-5" style="max-width: 700px;">
      Practicar mindfulness y hábitos saludables transforma tu vida.  
      Con MindWare puedes desarrollar resiliencia, empatía y equilibrio emocional.
    </p>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="benefit-card p-4 bg-white text-dark rounded-4 shadow-sm h-100">
          <h5 class="fw-bold mb-2">✨ Mayor autoestima</h5>
          <p class="text-secondary">Conecta contigo y aprende a valorar cada pequeño logro.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="benefit-card p-4 bg-white text-dark rounded-4 shadow-sm h-100">
          <h5 class="fw-bold mb-2">🧘‍♀️ Paz interior</h5>
          <p class="text-secondary">Encuentra calma incluso en los días más difíciles.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="benefit-card p-4 bg-white text-dark rounded-4 shadow-sm h-100">
          <h5 class="fw-bold mb-2">💬 Mejores relaciones</h5>
          <p class="text-secondary">La empatía y la serenidad fortalecen tus vínculos personales.</p>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- ========================= SECCIÓN: MENSAJE MOTIVACIONAL ========================= --}}
<section class="py-5 text-center" >
  <div class="container">
    <div class="p-5 rounded-4 shadow-lg mx-auto" style="max-width: 700px; background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px);">
      <h3 class="fw-bold mb-3">Recuerda que no estás solo</h3>
      <p class="lead mb-4">Pedir ayuda es un acto de valentía.  
        En MindWare te acompañamos paso a paso hacia tu bienestar emocional.</p>
    </div>
  </div>
</section>

@endsection
