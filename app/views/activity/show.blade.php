@extends('layouts.main')
@section('content')
{{HTML::style('css/activities.css', array('media' => 'screen')) }}
{{HTML::style('css/font-awesome.css') }}
{{HTML::style('css/rating.css') }}
      <div class="hero" id="background-activity">
        <div class="row">
          <div class="large-12 columns intro-text">
            <p>{{{ $activity->title }}}<br>{{{ $activity->description }}}</p> 
          </div>
        </div>
      </div>

      <div class="row about">
        <div class="medium-6 large-8 columns">
          <h4>Contenido</h4>
          <article>
          <p class="text-justify">{{{ $activity->paragraph1 }}}</p>
          <p class="text-justify">{{{ $activity->paragraph2 }}}</p>
          </article>
        </div>
        <div class="medium-6 large-4 columns text-center">
          <img src="{{{ $activity->url_badged }}}">
        </div>
      </div>

      <div class="row work">
        <hr>
        <div class="large-12 columns">
          <h4>Imágenes</h4>
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
          <h4>¿Sabías Qué?</h4>
          <p class="text-justify">{{{ $activity->didyouknow }}}</p>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-4 small-12 columns">
              @include('activity.rating')
            </div>
            <div class="large-4 small-12 columns">
              @include('activity.share')
            </div>
            <div class="large-4 small-12 columns">
               <a href="{{ URL::route('activities.next', array('id'=>$activity->id, 'idUser'=>Auth::user()['id'] )) }}" class="button success large expand">Lo Logré!!</a>
            </div>
          </div>
        </div>
      </div>

           
<script>
  var source_img = "{{ URL::asset($activity->url_activitie ) }}";
  var id_activity = "{{{ $activity->id }}}";
  var id_user = "{{{Auth::user()['id']}}}";
</script>

{{HTML::script('js/vendor/jquery.js')}}
{{HTML::script('js/foundation.min.js')}}
{{HTML::script('js/activities.js')}}
{{HTML::script('js/foundation/foundation.clearing.js')}}
{{HTML::script('js/rating.js')}}
@stop
    