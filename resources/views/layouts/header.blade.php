
<header>

  <!-- NAV BAR -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('inicio') }}">
          <img src="{{ asset('images/browser.png') }}" alt="">
          <span>EXP+</span>
        </a>
      </div>
      
    <div id="navbar-collapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right" id="navbar-collapse">
        <div class="nav-marker"></div>
        <li class=" @if ($slug == "inicio") active @endif ">
          <a href="{{ route('inicio') }}">Inicio</a>
        </li>
        <li class=" @if (strpos($slug, 'tendencias') !== false) active @endif ">
          <a href="{{ route('tendencias') }}">Tendencias</a>
        </li>
        <li class=" @if (strpos($slug, 'recursos') !== false) active @endif ">
          <a href="{{ route('recursos') }}">Recursos</a>
        </li>
        <li class=" @if ($slug == "autores") active @endif ">
          <a href="{{ route('autores') }}">Autores</a>
        </li>
      </ul>
    </div>
    
    </div>
  </nav>
  <!-- NAV BAR -->
</header>

