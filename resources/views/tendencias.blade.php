@extends('layouts.base')

@section('content')

<div class="jumbotron no-margin-bottom">
  <div class="container">
    <div class="col-xs-2">
      <img src="{{ asset('images/mailbox.png')}}" alt="" class="img-responsive big-logo">
    </div>
    <div class="col-xs-10">
      <div class="page-header">
        <h1>Tendencias Informaticas <small>2016-II</small>  </h1>
      </div>
    </div>
  </div>
</div>

<div class="what-is">
  <div class="container">

    <p><b>UNEGBox</b> es un sistema web cuya mision principal es automatizar el proceso de adiciones y cambios de asignaturas, mejorando la experiencia aun en las incidencias y problemas causados en el proceso de inscripcion, poniendo a disposicion tambien un buzon de sugerencias.</p>
  </div>
</div>

<div>
  <div class="section">
    <div class="container">
      <div class="col-sm-6">
        <h2>Buzon de Sugerencias</h2>
        <p>Puedes mandarnos todos tus comentarios y sugerencias, inquietudes ...</p>
        <p>
          <a href="" class="btn btn-success">Enviar Comentario</a>
        </p>
      </div>
      <div class="col-sm-6 text-center">
        <img src="{{ asset('images/3d-mailbox.png') }}" alt="">
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="col-sm-6 text-center">
        <img src="{{ asset('images/test.png') }}" alt="" class="">
      </div>
      <div class="col-sm-6 text-right">
        <h2>Adicion y cambio de asignaturas</h2>
        <p>Puedes evitarte grandes e interminables colas, enviando tus solicitudes de cambio o adicion de asignaturas desde la comodidad de tu hogar...</p>
        <p>
          <a href="" class="btn btn-success">Realizar solicitud</a>
        </p>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="col-sm-6">
        <h2>Coordinación</h2>
        <p>Disponemos de un panel administrativo reservado para la secretaria y coordinacion, donde podra con facilidad dar respuesta a las solicitudes realizadas por los estudiantes.</p>
        <p>
          <a href="" class="btn btn-success">Inicia sesion</a>
        </p>
      </div>
      <div class="col-sm-6 text-center">
        <img src="{{ asset('images/user.png') }}" alt="">
      </div>
    </div>
  </div>
</div>

@stop
