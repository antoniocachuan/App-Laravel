@extends('layouts.main')
@section('content')
{{HTML::script('js/vendor/jquery.js')}}
{{HTML::style('css/finalActivity.css') }}
{{HTML::script('js/TweenLite.min.js')}}
{{HTML::script('js/finalActivity.js')}}
<div class="row vertical-offset-100">
    <div class="large-3 small-1 columns"> <a href="" class="btn">Thanks!!</a></div>
    <div class="large-6 small-10 columns ">
        
    <div class="row">
        <div class="large-12 small-12 columns ">
            <div class="box panelFinal">
                <div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Felicidades {{ Auth::user()->username }}!!</h4>
                    <p>A sido una gran aventura {{ Auth::user()->username }}, hemos aprendido que tener una cultura de prevención y cuidar nuestra salud no es solo para adultos. Ahora es momento de ir más allá, y compartir con nuestro amigos, familia y el mundo todas nuestras experiencias y conocimiento.</p>
                    <div class="left">
                    <a href="{{ URL::route("user/profile") }}" class="right alineado final-centrar">Perfil</a>
                    </div>
                    <div id="inbox" class="alineado">
                          <div class="fab btn-group show-on-hover dropup">
                            <div id="tooltip" data-toggle="tooltip" data-placement="left" title="Compartir">
                              <button type="button" class="btn btn-danger btn-io dropdown-toggle right" data-toggle="dropdown">
                                <span class="fa-stack fa-1x">
                                    <i class="fa fa-circle fa-stack-1x fab-backdrop"></i>
                                    <i class="fa fa-share-alt fa-stack-1x"></i>
                                    <i class="fa fa-pencil fa-stack-1x fa-inverse fab-secondary"></i>
                                </span>
                              </button>
                            </div>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li>
                            <a href="#" onclick="window.open(
                                'https://twitter.com/share?url='+encodeURIComponent('http://healthappgame.com')+'&amp;text='+encodeURIComponent('Acabo de terminar todas las actividades en Healthappgame! @healthappgame:') + '&amp;count=none/', 
                                'twitter-share-dialog', 
                                'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 )); 
                              return false;">
                                          <i class="fa fa-twitter twitter"></i>
                                      </a>
                            
                            <li>
                            <a href="#" onclick="window.open(
                                'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://healthappgame.com') +'&amp;t=' + encodeURIComponent('Acabo de terminar todas las actividades en -> Healthappgame!'), 
                                'facebook-share-dialog', 
                                'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 )); 
                              return false;">
                                          <i class="fa fa-facebook facebook"></i>
                                          </a>
                            </li>

                            <li>
                            <a href="#" onclick="window.open(
                                'https://plus.google.com/share?url=http://healthappgame.com')">

                                          <i class="fa fa-google-plus google-plus"></i>
                                          </a>
                            </li>
                            
                            <li>
                            <a href="whatsapp://send?text=Acabo%20de%terminar%20todas%20las%20actividad%20%20en%20Health%20App%20Game - http%3A%2F%2Fhealthappgame.com">
                                          <i class="fa fa-whatsapp whatsapp"></i>
                                          </a>
                            </li>
                          </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
            
        
    </div>
    <div class="large-3 small-1 columns"> <a href="" class="btn right">Arigato!!</a></div>
</div>
@stop