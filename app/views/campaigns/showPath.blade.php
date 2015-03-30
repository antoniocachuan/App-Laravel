
{{HTML::script('js/campaign.js')}}
<div class="large-12 small-12 columns campaign-page">
    <div class="page-header text-center">
        <h1 id="timeline"></h1>

        <div class="jumbotron jumbotron-sm">
          
              <div class="row">
                  <div class="large-12 small-12 columns">
                      <h1 class="h1">
                          {{{ $list->title }}}
                      </h1>
                  </div>
              </div>
          
      </div>

    </div>
    <ul class="timeline">
        @foreach($items as $item)
          <li>
            <div class="row">
              <div class="small-11 columns timeline-panel">
                <div class="timeline-heading">
                  <img class="img-responsive" src="{{{ $item->url_activitie }}}" />    
                </div>
                <div class="timeline-body">
                    <div class="blockquote-box-campa blockquote-primary-campa clearfix">
                  <div class="square-campa pull-left">
                      <span class="text-white">{{{ $item->points }}} puntos</span>
                  </div>
                  <h4 class="title-campaign">
                      <a  href="{{ URL::route('activities.show', array('id'=>$item->id)) }}" > {{{ $item->title }}}</a>  
                  </h4>
                  <p class="description-campaign">
                      {{{ $item->description }}}
                  </p>
                  </div>

                </div>
                
                <div class="timeline-footer row">
                  <div class="large-1 small-1 columns">
                    <a href="#" onclick="window.open(
                                'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://healthappgame.com') +'&amp;t=' + encodeURIComponent('Mira esta campaña -> {{{$item->title}}}!'), 
                                'facebook-share-dialog', 
                                'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 )); 
                              return false;">
                                          <i class="fa fa-facebook facebook"></i>
                    </a>
                    </div>
                    <div class="large-1 small-1 columns">
                    <a href="#" onclick="window.open(
                                'https://twitter.com/share?url='+encodeURIComponent('http://healthappgame.com')+'&amp;text='+encodeURIComponent('Mira esta campaña \-> {{{$item->title}}}! @healthappgame:') + '&amp;count=none/', 
                                'twitter-share-dialog', 
                                'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 )); 
                              return false;">
                                          <i class="fa fa-twitter twitter"></i>
                    </a>
                    </div>
                   
                    <div class="large-1 small-1 columns">
                    <a href="#" onclick="window.open(
                                'https://plus.google.com/share?url=http://healthappgame.com')">

                                          <i class="fa fa-google-plus google-plus"></i>
                    </a>
                    </div>
                    <div class="large-1 small-1 columns">
                    <a href="whatsapp://send?text=Mira%20esta%20campaña%20:%20{{{$item->title}}}%20en%20Health%20App%20Game - http%3A%2F%2Fhealthappgame.com">
                                          <i class="fa fa-whatsapp whatsapp"></i>
                    </a>
                    </div>

                    <div class="large-3 small-3 columns right">
                    <a class="right" href="{{ URL::route('activities.show', array('id'=>$item->id)) }}" > IR</a>
                    </div>
                </div>
              </div>
              <div class="small-1 columns timeline-badge primary">
                <br><br>
                  <a href="{{ URL::route('activities.show', array('id'=>$item->id)) }}">
                    <i class="fa fa-star" rel="tooltip" title="{{{ $item->title }}}"></i>
                  </a>
               </div>
            </div>
          </li>
        @endforeach       
        <li class="clearfix" style="float: none;"></li>
    </ul>
</div>

{{HTML::style('css/campaign.css', array('media' => 'screen')) }}