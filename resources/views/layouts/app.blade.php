<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'MindWare')</title>

  {{-- Carga de CSS y JS con Vite --}}
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link href="{{ asset('css/crud-style.css') }}" rel="stylesheet">

</head>
<body class="bg-light">

  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-mindware shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
        <img src="{{ asset('img/logo.png') }}" 
        alt="MindWare" 
        width="80" 
     class="me-2 rounded-circle">

        <span class="fw-bold text-primary">MindWare</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarMain" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Acerca de nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Iniciar sesión</a></li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- cargar aquí el contenido de la pagina --}}
  <main>
    @yield('content')
  </main>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @stack('scripts')
  </body>


</body>
</html>
