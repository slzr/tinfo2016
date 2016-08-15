@extends('layouts.base')

@section('content')


<div class="jumbotron">
  <div class="container">

    <div class="col-xs-6">
      <img src="{{ asset('images/folder.png')}}" alt="" class="img-responsive big-logo">
    </div>
    <div class="col-xs-6">
      <div class="page-header">
        <h1>Recursos</h1>
        <p>Archivos para revisar y descargar</p>
      </div>
    </div>

  </div>
</div>

<div class="sections even">

  <div class="section">
    <div class="container">
      <h2>Titulo</h2>
      <p>Descripcion</p>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <h2>Titulo</h2>
      <p>Descripcion</p>
    </div>
  </div>

</div>

@stop
