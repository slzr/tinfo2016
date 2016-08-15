@extends('layouts.base')

@section('content')

<div class="jumbotron no-margin-bottom">
  <div class="container">
    <div class="col-xs-3">

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img src="{{ asset('images/startup-2.png') }}">
          </div>
          <div class="item">
            <img src="{{ asset('images/user.png') }}">
          </div>
          <div class="item">
            <img src="{{ asset('images/worldwide.png') }}">
          </div>
          <div class="item">
            <img src="{{ asset('images/cloud.png') }}">
          </div>

        </div>
      </div>

    </div>
    <div class="col-xs-9">
      <div class="page-header">
        <h1>Tendencias Informaticas <small>2016-II</small>  </h1>
      </div>
    </div>
  </div>
</div>

<div class="what-is small">
  <div class="container">
    <div class="col-sm-6">
      <p>Se basa primordialmente en el descubrimiento de nuevas tecnologías, donde los expertos verifican el consumo, factibilidad, potencialidad y beneficios que pudiesen traer al mercado; tanto por su implementación o desarrollo.</p>
    </div>
    <div class="col-sm-6">
      <p>En un mundo dónde los ordenadores van sustituyen la mano del hombre en tareas complejas y cotidianas convirtiendo así, lo que antes era ficción en una fascinante realidad, de eso se trata las nuevas tendencias en software y hardware; <b>innovar</b> e <b>impactar</b>.</p>
    </div>
  </div>
</div>

<div class="sections">
  <div class="section text-center">
    <div class="container">
      <h2>Objetivo general</h2>
      <p class="big-text">Presentar las tendencias en hardware, herramientas para el aprendizaje a distancia y el modelo de negocio.</p>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <h2 class="text-center">Objetivos específicos</h2>
      <ul class="list">
        <li>Contrastar las herramientas que contribuyen al aprendizaje a distancia </li>
        <li>Mencionar las tecnologías más novedosas en hardware.</li>
        <li>Indicar las mejores herramientas educativas.</li>
        <li>Explicar en qué consiste el modelo de negocio.</li>
      </ul>
    </div>
  </div>

<div class="section">
  <div class="container">
    <h2 class="text-center subtitle">Dirigido a:</h2>
    <div class="row">
      <div class="col-sm-4 text-center">
        <img src=" {{ asset('images/estudiante.png') }}" alt="" class="img-md">
        <h3>Estudiantes</h3>
      </div>
      <div class="col-sm-4 text-center">
        <img src=" {{ asset('images/profesor.png') }}" alt="" class="img-md">
        <h3>Profesores</h3>
      </div>
      <div class="col-sm-4 text-center">
        <img src=" {{ asset('images/geek.png') }}" alt="" class="img-md">
        <h3>Geeks</h3>
      </div>
      <div class="clearfix"></div>
      <p class="big-text text-center padding-top-lg">Toda persona interesada que le guste la tecnologia y quiera aprender mas.</p>
    </div>
  </div>
</div>




@stop
