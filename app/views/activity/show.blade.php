@extends('layouts.main')
@section('content')
{{HTML::style('css/activities.css', array('media' => 'screen')) }}
{{HTML::style('css/font-awesome.css') }}
{{HTML::style('css/rating.css') }}
{{HTML::style('css/comments.css') }}
      <div class="hero" id="background-activity">
        <div class="row">
          <div class="large-12 columns intro-text">
            <p>{{{ $activity->title }}}<br>{{{ $activity->description }}}</p> 
          </div>
        </div>
      </div>
      <div class="row"><p></p></div>
      <div class="row about">
        
        <div class="small-12 large-3 columns">
          <div class="row">
            <div class="large-12 small-12 columns jumbotron-lightblue jumbotron-sm">
                <h1 class="h1">
                    <i class="fa fa-trophy"> {{{ $activity->points }}} puntos</i>
                </h1>
            </div>
            
          </div>
          <div class="row bordes-blue">
            <div class="row">
     
              <div class="large-12 small-12 columns">
                  <div class="row text-center">
                       <img src="{{{ $activity->url_badged }}}">
                  </div>
              </div>       
            </div>
              
                
          </div>           
        </div>

        <div class="large-8 small-12 columns">
          
          <div class="row">
             
              <div class="large-12 small-12 columns jumbotron-red jumbotron-sm">
                  <h1 class="h1">
                      <i class="fa fa-connectdevelop"></i> Lo importante <i class="fa fa-connectdevelop"></i>
                  </h1>
              </div>
             
          </div>
          <div class="row">
              
              <div class="large-12 small-12 columns">
                  <div class="row bordes-blue">
                    <article class="margin-article">
                      <p class="text-justify font-local">{{{ $activity->paragraph1 }}}</p>
                      <p class="text-justify font-local">{{{ $activity->paragraph2 }}}</p>
                    </article>
                    
                  </div>
              </div>
              
          </div>     
        </div>
        
      </div>

      <div class="row work">
        <div class="row">
        <div class="medium-12 large-12 columns">
          <div class="row"><p></p></div>
          <div class="row">
             
              <div class="large-12 small-12 columns jumbotron-yellow jumbotron-sm">
                  <h1 class="h1">
                      <i class="fa fa-picture-o"></i> Imágenes & Cuadros
                  </h1>
              </div>
             
          </div>
          <div class="row bordes-blue">
              <div class="large-12 small-12 columns">
                  <div class="row bordes-blue">

                    <article class="margin-article">
                      <p class="font-local">Más inspiración a solo un clic.</p>
                    </article>
                      <ul class="margin-article clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
                      <li>
                        <a href="{{{ $activity->url_image1 }}}">
                        <img data-caption="{{{ $activity->description_img1 }}}" src="{{{ $activity->url_image1 }}}"></a>
                      </li>
                      <li>
                        <a href="{{{ $activity->url_image2 }}}">
                        <img data-caption="{{{ $activity->description_img2 }}}" src="{{{ $activity->url_image2 }}}"></a>
                      </li>
                      <li>
                        <a href="{{{ $activity->url_image3 }}}">
                        <img data-caption="{{{ $activity->description_img3 }}}" src="{{{ $activity->url_image3 }}}"></a>
                      </li>
                    </ul>
                  </div>
              </div>
              
          </div>     
        </div>
      </div>
    </div>

      
    

  <div class="row contact">
      
        <div class="row"><p></p></div>
        <div class="row">
            
            <div class="large-12 small-12 columns jumbotron-green jumbotron-sm">
                <h1 class="h1">
                    <i class="fa fa-question"></i> ¿Sabías Qué?
                </h1>
            </div>
            
        </div>
        <div class="row bordes-blue">
            
            <div class="large-12 small-12 columns">
                <div class="row bordes-blue">
                    <article class="margin-article">
                      <p class="text-justify font-local"> {{{ $activity->didyouknow }}}</p>
                    </article>
                  
                </div>
            </div>
            
        </div>     
  </div>
  <div class="row"><p></p></div>
      <div class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-4 small-12 columns">
              @include('activity.rating')
            </div>
            <div class="large-5 small-12 columns">
              @include('activity.share')
            </div>
            <div class="large-3 small-12 columns">
               <a href="{{ URL::route('activities.next', array('id'=>$activity->id, 'idUser'=>Auth::user()['id'] )) }}" class="button success large expand">Lo Logré!!</a>
            </div>
          </div>
        </div>
      </div>
      @include('activity.comments')

           
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
{{HTML::script('js/comment.js')}}
@stop
    