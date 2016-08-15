@extends('layouts.base')

@section('content')


<div class="jumbotron">
  <div class="container">

    <div class="col-xs-6">
      <img src="{{ asset('images/browser.png')}}" alt="" class="img-responsive big-logo">
    </div>
    <div class="col-xs-6">
      <div class="page-header">
        <h1>Exp+</h1>
        <p>Equipo de desarrollo</p>
      </div>
    </div>

  </div>
</div>


<div class="section">
  <div class="container">
    <div class="col-sm-8">
      <p class="text-center padding-top-lg"><b>Exp+</b> es una propuesta de startup, creada con fin de promover el aprendizaje a distancia. Agregandole como extra la capacidad de poder ganar experiencia valida para otras empresas.</p>
      <p class="text-center">Esto como una solucion al problema laboral donde los estudiantes de Ingeneria en Informatica, al graduarse salen al mundo laboral sin experiencia, lo cual tiene un peso a nivel curricular.</p>
    </div>
    <div class="col-sm-4 text-center">
      <img src="{{ asset('images/startup.png') }}" alt="" class="img-md">
    </div>
  </div>
</div>

<div class="container">
  <div class="row padding-top-lg">
    <h3 class="profesor col-sm-6">Profesor: <span>Isabel Garcia </span></h3>
    <h3 class="profesor col-sm-6">Materia: <span>Tendencias Informaticas 2016-II</span></h3>
  </div>
</div>

<div class="bg-gris">
  <div class="autor container">
    <div class="col-sm-8">
      <h2>Wuilkys Becerra</h2>
      <p>Soy un entusiasta y autodidacta, con enfoque al aprendizaje de nuevas tecnologías de la información. En los últimos 3 años me he desenvuelto en la robotica de competencia, automatización y el desarrollo web. No me cuesta trabajar en equipo y asumir grandes responsabilidades, siempre proactivo y deseoso de más conocimientos.</p>
    </div>
    <div class="col-sm-4 text-center ">
      <img src="{{ asset('images/wuilkys.jpg') }}" >
    </div>
  </div>
</div>

<div class="">
  <div class="autor container">
    <div class="col-sm-4 text-center ">
      <img src="{{ asset('images/xavi.jpg') }}" >
    </div>
    <div class="col-sm-8 text-right">
      <h2>Alexis Moreno</h2>
      <p>La curiosidad del funcionamiento de las cosas me ha llevado a aprender acerca de muchas cosas, el software en mayor medida, crear y dar vida a sistemas es una de las mas grandes satisfacciones, desarrollo web, android desktop, todos son oportunidades de crecer en conocimiento.</p>
    </div>
  </div>
</div>

<div class="bg-gris">
  <div class="autor container">
    <div class="col-sm-8">
      <h2>Wilmer Salazar</h2>
      <p>Con 21 años de edad soy estudiande del 7mo semestre de Ing.Informatica, autodidacta, interesado en conocer las nuevas tecnologias de programacion web, tanto en el area de Front-end como Back-end. El lenguaje de programacion con el cual me desenvuelvo mejor es Java, deseoso de aprender cada dia mas y poder formarme como un buen profesional.</p>
    </div>
    <div class="col-sm-4 text-center ">
      <img src="{{ asset('images/wilmer.jpg') }}" >
    </div>
  </div>
</div>

<div>
  <div class="autor container">
    <div class="col-sm-4 text-center ">
      <img src="{{ asset('images/salazar.jpg') }}" >
    </div>
    <div class="col-sm-8 text-right">
      <h2>Jose Salazar</h2>
      <p>Estudiante de 8vo semestre de Ingeniería en Informática, con 2 años de experiencia como desarrollador, inclinado al desarrollo Frontend y el diseño grafico, aficionado a la robótica y a la animación 3D.</p>
    </div>
  </div>
</div>

<div class="bg-gris">
  <div class="autor container">
    <div class="col-sm-8">
      <h2>Any Muñoz</h2>
      <p>Estudiante de 7mo semestre de ingenieria informatica. Audaz y emprendedora. Experiencia en manejo de personal y finanzas. Buen trato con el publico. Se me facilita el area de diseño y gestion de bases de datos. Interesada en conocer nuevas tecnologias de informacion y en la programacion web a nivel de front-end. Productiva y siempre dispuesta a trabajar en equipo.</p>
    </div>
    <div class="col-sm-4 text-center ">
      <img src="{{ asset('images/any.jpg') }}" >
    </div>
  </div>
</div>

<div>
  <div class="autor container">
    <div class="col-sm-4 text-center ">
      <img src="{{ asset('images/johan.jpg') }}" >
    </div>
    <div class="col-sm-8 text-right">
      <h2>Johan Martin</h2>
      <p>Estudiante de 7mo semestre de ingenieria informatica. Tecnico de audio y cursando un diplomado de sonido. Entusiasta y Emprendedor, con facilidad para expresarme en publico y ante los medios. Interesado en las nuevas tecnologias. Con fortalezas en redes, analisis y diseño de sistemas. Actualmente me desempeño como tecnico de sonido para dos empresas de sonido de la region, trabajando a nivel de eventos y conciertos. Deseoso de obtener mas conocimientos y emprender nuevos retos.</p>
    </div>
  </div>
</div>

@stop
