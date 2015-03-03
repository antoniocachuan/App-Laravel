@extends('layouts.main')
@section('content')
{{HTML::style('css/activities.css', array('media' => 'screen')) }}
{{HTML::style('css/rateit.css') }}
      <div class="hero">
        <div class="row">
          <div class="large-12 columns intro-text">
            <p>{{{ $activity->title }}}<br>{{{ $activity->description }}}</p> 
          </div>
        </div>
      </div>

      <div class="row about">
        <div class="medium-6 large-8 columns">
          <h4>Contenido</h4>
          <p>{{{ $activity->paragraph1 }}}</p>
          <p>{{{ $activity->paragraph2 }}}</p>
        </div>
        <div class="medium-6 large-4 columns">
          <img src="http://placehold.it/550x300">
        </div>
      </div>

      <div class="row work">
        <hr>
        <div class="large-12 columns">
          <h4>Imagenes</h4>
          <p>Aqui iria las imagenes relavantes al tema</p>

          <ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
            <li>
              <a href="http://placehold.it/550x300">
              <img data-caption="caption here" src="{{{ $activity->url_image1 }}}"></a>
            </li>
            <li>
              <a href="http://placehold.it/550x300">
              <img data-caption="caption 2 here..." src="{{{ $activity->url_image2 }}}"></a>
            </li>
            <li>
              <a href="http://placehold.it/550x300">
              <img data-caption="caption 2 here..." src="{{{ $activity->url_image3 }}}"></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row contact">
        <hr>
        <div class="large-12 columns">
          <h4>Sabías Que</h4>
          <p>{{{ $activity->didyouknow }}}</p>
        </div>
      </div>

      <footer class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-6 columns">
              <p>Califica esta actividad</p>
              @include('activity.rating')
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#">facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

{{HTML::script('js/vendor/jquery.js')}}
{{HTML::script('js/foundation.min.js')}}
{{HTML::script('js/activities.js')}}
{{HTML::script('js/foundation/foundation.clearing.js')}}
{{HTML::script('js/jquery.rateit.min.js')}}
@stop
    