{{HTML::style('css/campaign.css', array('media' => 'screen')) }}
{{HTML::script('js/campaign.js')}}
<div class="large-12 small-12 columns">
    <div class="page-header text-center">
        <h1 id="timeline">{{{ $list->title }}}</h1>
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
                  <label>{{{ $item->title }}}</label>
                  <p>{{{ $item->description }}}</p>
                </div>
                
                <div class="timeline-footer">
                    <a><i class="fa fa-thumbs-o-up"></i></a>
                    <a><i class="fa fa-share-alt"></i></a>
                    <a href="{{ URL::route('activities.show', array('id'=>$item->id)) }}">
                        IR
                    </a>
                    <a href="#"class="points">{{{ $item->points }}} puntos</a>
                </div>
              </div>
              <div class="small-1 columns timeline-badge primary">
                <br><br>
                  <a>
                    <i class="fa fa-star" rel="tooltip" title="{{{ $item->title }}}"></i>
                  </a>
               </div>
            </div>
          </li>
        @endforeach       
        <li class="clearfix" style="float: none;"></li>
    </ul>
</div>