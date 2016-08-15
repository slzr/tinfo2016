@extends('layouts.base')

@section('content')

<div class="jumbotron no-margin-bottom bg">
  <div class="container">
    <div class="col-xs-6">
      <img src="{{ asset('images/browser-2.png')}}" alt="" class="img-responsive big-logo">
    </div>
    <div class="col-xs-6">
      <div class="page-header">
        <h1>EXP+</h1>
        <p>Blog de tendencias Informaticas</p>
      </div>
    </div>
  </div>
</div>

<div class="what-is">
  <div class="container">
    <h2>¡Aprende y gana experiencia!</h2>
    <p class="small">un modelo de aprendizaje innovador</p>
  </div>
</div>

<div class="sections">
  <div class="section">
    <div class="container">
      <div class="col-sm-8">
        <h2>Aprende</h2>
        <p>El aprendizaje a distancia no es una moda, es una tendencia arraigada por la necesidad de aprender desde la comodidad de tu casa.</p>
        <p>Aprende a programar multitudes de lenguajes y sobre las tecnologias actuales mas utilizadas atravez de nuestra red de profesores y sistema de videotutoriales.</p>
      </div>
      <div class="col-sm-4 text-center">
        <img src="{{ asset('images/browser-3.png') }}" alt="">
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="col-sm-4 text-center">
        <img src="{{ asset('images/browser-2.png') }}" alt="" class="">
      </div>
      <div class="col-sm-8 text-right">
        <h2>Practica</h2>
        <p>Escribe codigo, ejecuta, prueba y practica todo lo aprendido y pon a prueba tus conocimientos, donde por cada prueba superada obtendras puntos que avalaran tus conocimientos.</p>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="col-sm-8">
        <h2>¡Gana!</h2>
        <p>Contamos con una red de empresas disponibles con las que puedes ganar experiencia desarrollando aplicaciones reales del mundo laboral actual. para cuando termines cualquieras de nuestros cursos no solo contaras con los conocimientos necesarios sino que tambien con experiencia valida y un portafolio profesional.</p>
      </div>
      <div class="col-sm-4 text-center">
        <img src="{{ asset('images/quality.png') }}" alt="">
      </div>
    </div>
  </div>
</div>


<div class="container">
  <h2 class="text-center subtitle">Exp+ como un ecosistema de aprendizaje</h2>
  <div class="row">
    <div class="col-md-3">
      <img src=" {{ asset('images/dev.png') }}" alt="" class="img-md">
      <h4>Construye tu propio sitio web</h4>
      <p>Aprenderas lo basico para crear desde cero un sitio web, seras introducido a los editores de texto mas usados, las etiquetas HTML basicas y recomendaciones de desarrollo avanzadas.</p>
    </div>
    <div class="col-md-3">
      <img src=" {{ asset('images/lern.png') }}" alt="" class="img-md">
      <h4>Aprende a programar</h4>
      <p>Aprende las taecnologias de desarrollo mas actuales y usadas como Ruby on Rails, para crear productos finales que podrian cambiar el mundo.</p>
    </div>
    <div class="col-md-3">
      <img src=" {{ asset('images/build.png') }}" alt="" class="img-md">
      <h4>Construye una aplicacion</h4>
      <p>Aprenderas los lenguajes, herramientas y conceptos necesarios para crear tus aplicaciones moviles.</p>
    </div>
    <div class="col-md-3">
      <img src=" {{ asset('images/create.png') }}" alt="" class="img-md">
      <h4>Preparate para el mundo real</h4>
      <p>Crear tu propio negocio o la aplicacion que saque adelante tu negocio, aprende y gana experiencia necesaria para ser un profesional solicitado en un mundo laboral demandante y exigente.</p>
    </div>
  </div>
</div>

<div class="bg-gris">
  <div class="container">
    <h2 class="text-center">Red de aprendizaje</h2>
    <div class="logos">
      <div class="logo">
        <a href="https://teamtreehouse.com/" target="_blank"><img src="{{ asset('images/treehouse.png') }}" alt=""></a>
      </div>
      <div class="logo">
        <a href="https://www.codeschool.com/" target="_blank"><img src="{{ asset('images/codeschool.svg') }}" alt=""></a>
      </div>
      <div class="logo">
        <a href="https://www.codecademy.com/" target="_blank"><img src="{{ asset('images/codecademy.svg') }}" alt=""></a>
      </div>
      <div class="logo">
        <a href="https://www.udemy.com" target="_blank"><img src="{{ asset('images/udemy.png') }}" alt=""></a>
      </div>

      <br>

      <div class="logo">
        <a href="https://www.udacity.com/" target="_blank"><img src="{{ asset('images/udacity.png') }}" alt=""></a>
      </div>
      <div class="logo">
        <a href="https://www.nextuniversity.com/" target="_blank"><img src="{{ asset('images/nextuniversity.png') }}" alt=""></a>
      </div>
      <div class="logo">
        <a href="https://platzi.com/" target="_blank"><img src="{{ asset('images/platzi.png') }}" alt=""></a>
      </div>
      <div class="logo">
        <a href="http://escuela.digital/" target="_blank"><img src="{{ asset('images/edlogo.svg') }}" alt=""></a>
      </div>
    </div>
  </div>
</div>

@stop
