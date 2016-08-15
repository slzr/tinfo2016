@extends('layouts.base')

@section('content')

<div class="remodal-bg">
  <div class="jumbotron">
    <div class="container">

      <div class="col-sm-6">
        <img src="{{ asset('images/folder.png')}}" alt="" class="img-responsive big-logo">
      </div>
      <div class="col-sm-6">
        <div class="page-header">
          <h1>Recursos</h1>
          <p>Archivos para revisar y descargar</p>
        </div>
      </div>

    </div>
  </div>

  <div class="sections even recursos">

    <div class="section recurso">
      <div class="container">
        <div class="col-sm-6">
          <h2>Hardware en la Actualidad</h2>
        </div>
        <div class="col-sm-6">
          <p>En la actualidad, la tecnología ha ido avanzando a pasos agigantados, en muchos campos, desde maquinaria pesada hasta la telefonía móvil. Cualquier tipo de tecnologia ha avanzado considerablemente en los últimos años. El área de la computación no es la excepción, de hecho, es una de las que más rápido avanza y la que se han hecho más innovaciones en la última década...</p>
          <p class="text-right"><a href="#hardware-actualidad" class="btn btn-success">Seguir leyendo</a></p>
        </div>
        <div class="clearfix"></div>
        <div class="recursos-links">
          <a href="https://drive.google.com/open?id=0B4co3OHYR9QqWlU4amRLbXFreTQ" target="_blank">
            <span>Informe</span>
            <img src="{{ asset('images/doc.png') }}" alt="">
          </a>
          <a href="https://drive.google.com/open?id=0B4co3OHYR9QqSkg0d1ZPMDFPX28" target="_blank">
            <span>Triptico</span>
            <img src="{{ asset('images/doc.png') }}" alt="">
          </a>
          <a href="https://drive.google.com/open?id=0B4co3OHYR9QqQ0lrWVZRd0hDWk0" target="_blank">
            <span>Presentacion</span>
            <img src="{{ asset('images/ppt.png') }}" alt="">
          </a>
          <a href="https://drive.google.com/open?id=0B4co3OHYR9Qqekxpak5Ua2MzaHc" target="_blank">
            <span>PDF</span>
            <img src="{{ asset('images/pdf.png') }}" alt="">
          </a>
        </div>
      </div>
    </div>

    <div class="section recurso">
      <div class="container">
        <div class="col-sm-6">
          <h2>Estudios a distancia</h2>
        </div>
        <div class="col-sm-6">
          <p>En la actualidad, la tecnología ha ido avanzando a pasos agigantados, en muchos campos, desde maquinaria pesada hasta la telefonía móvil. Cualquier tipo de tecnología ha avanzado considerablemente en los últimos años. El área del estudio no queda exenta de esta, y es por ello que los avances han llegado hasta la misma....</p>
          <p class="text-right">
            <a href="#estudios-distancia" class="btn btn-success">Seguir leyendo</a>
          </p>
        </div>

        <div class="clearfix"></div>

        <div class="recursos-links">
          <a href="https://drive.google.com/open?id=0B4co3OHYR9QqTy1KUjNPelF5Q00" target="_blank">
            <span>Informe</span>
            <img src="{{ asset('images/doc.png') }}" alt="">
          </a>
          <a href="https://drive.google.com/open?id=0B4co3OHYR9Qqc3Z6MmRScWNMSUk" target="_blank">
            <span>Triptico</span>
            <img src="{{ asset('images/doc.png') }}" alt="">
          </a>
          <a href="https://drive.google.com/open?id=0B4co3OHYR9QqSEw0Ull5aEVoN00" target="_blank">
            <span>Presentacion</span>
            <img src="{{ asset('images/ppt.png') }}" alt="">
          </a>
          <a href="https://drive.google.com/open?id=0B4co3OHYR9QqYXVJNXotbWFRNXM" target="_blank">
            <span>PDF</span>
            <img src="{{ asset('images/pdf.png') }}" alt="">
          </a>
          <a href="https://drive.google.com/open?id=0B4co3OHYR9QqSUpCVS1qT192eUE" target="_blank">
            <span>Video</span>
            <img src="{{ asset('images/mp4.png') }}" alt="">
          </a>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container text-center">
        <a href="https://drive.google.com/folderview?id=0B4co3OHYR9QqUUROU2RvSjBlXzg&usp=sharing" target="_blank" class="big-img-link">
          <img src="{{ asset('images/drive.png') }}" alt="" class="">
          <h2 class="text-center">Puedes visitar nuestro drive.</h2>
        </a>
      </div>
    </div>
  </div>

</div>


{{-- MODAL HARDWARE EN LA ACTUALIDAD --}}
<div class="remodal" data-remodal-id="hardware-actualidad">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h2>Hardware en la Actualidad</h2>
  <div>
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#ha-informe" aria-controls="ha-informe" role="tab" data-toggle="tab">Informe</a></li>
      <li role="presentation"><a href="#ha-diapositiva" aria-controls="ha-diapositiva" role="tab" data-toggle="tab">Presentación</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="ha-informe">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://drive.google.com/file/d/0B4co3OHYR9QqWlU4amRLbXFreTQ/preview" width="640" height="480" frameBorder="0" class="embed-responsive-item"></iframe>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade in" id="ha-diapositiva">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://drive.google.com/file/d/0B4co3OHYR9Qqekxpak5Ua2MzaHc/preview" width="640" height="480" frameBorder="0" class="embed-responsive-item"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- MODAL HARDWARE EN LA ACTUALIDAD --}}
<div class="remodal" data-remodal-id="estudios-distancia">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h2>Estudios a distancia</h2>
  <div>
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#ed-informe" aria-controls="ed-informe" role="tab" data-toggle="tab">Informe</a></li>
      <li role="presentation"><a href="#ed-diapositiva" aria-controls="ed-diapositiva" role="tab" data-toggle="tab">Presentación</a></li>
      <li role="presentation"><a href="#ed-video" aria-controls="ed-video" role="tab" data-toggle="tab">Video</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="ed-informe">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://drive.google.com/file/d/0B4co3OHYR9QqTy1KUjNPelF5Q00/preview" width="640" height="480" frameBorder="0" class="embed-responsive-item"></iframe>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade in" id="ed-diapositiva">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://drive.google.com/file/d/0B4co3OHYR9Qqekxpak5Ua2MzaHc/preview" width="640" height="480" frameBorder="0" class="embed-responsive-item"></iframe>
          <iframe src="https://drive.google.com/file/d/0B4co3OHYR9QqSEw0Ull5aEVoN00/preview" width="640" height="480" frameBorder="0" class="embed-responsive-item"></iframe>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade in" id="ed-video">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://drive.google.com/file/d/0B4co3OHYR9QqSUpCVS1qT192eUE/preview" width="640" height="480" frameBorder="0" class="embed-responsive-item"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>


@stop
