

 <div class="row">
 		<div class="large-1 columns"><p></p></div>
                <div class="large-10 columns">
                  <div class="page-header">
                    <h1><small class="pull-right">{{{$cantidad}}} Comentario(s)</small> </h1>
                  </div> 
                  <div class="row"><p></p></div>
                   @foreach($results as $result)

									 		<div class="comments-list">
                       <div class="media">
                           <p class="pull-right"><small>{{{$result->points}}} puntos</small></p>
                            <a class="media-left" href="#1">
                
                              <div class="small-1 large-1 columns text-center">
											          <img src="{{{$result->url_avatar}}}" alt="profile image">
											        </div>

                            </a>
                            <div class="media-body">
                                
                              <h4 class="media-heading user_name">{{{$result->username}}}</h4>
                              {{{$result->comment}}}
                           
                            </div>
                          </div>                   
                   		</div>
                   		<div class="row"><p></p></div>
									 @endforeach   
                </div>
                <div class="large-1 columns"><p></p></div>
            </div>