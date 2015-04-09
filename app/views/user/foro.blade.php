<div class="large-12 small-12 columns">
 						<div class="row">
							<div class="campaign-title large-12 small-12 fix-forum">
								<h1 class="text-left">Últimos Comentarios</h1>
							</div>
						</div>
						<div class="row">
							<div class="campaign-content large-12 small-12 columns">
								<div class="row">
				           
				           	@foreach($results as $result)
                		<div class="blockquote-box blockquote-danger clearfix row">
				                
				                    
											        <div class="small-2 large-2 columns left">
											          <img src="{{{$result->url_avatar}}}" alt="profile image">
											        </div>
							                <div class="small-9 large-10 columns borde-comment-box">
								                <h5>
								                    <span class="color-user-comment">{{{$result->username}}}</span> <small class="level-comment">{{{$result->title_level}}}</small></h5>
								           
								                <p>
								                    <span class="color-comment">{{{$result->comment}}}
								                		</span>
								                </p>
							                </div>
				            	</div>
				            	<div class="row"><p></p></div>
									 @endforeach   

				         </div>
							</div>
						</div>
 					</div>