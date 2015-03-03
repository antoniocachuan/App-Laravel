@extends("layouts.main")
@section("content")
{{HTML::style('css/profile.css', array('media' => 'screen')) }}
	<div class="row">
		<p></p>
	</div>
  <div class="row">    
    <div class="large-5 small-12 columns">
				<div class="row">
				   <div class="large-12 small-12 columns">
				      <div class="row">
				         <div class="profile-card">
				            <div class="small-12 large-4 columns">
				               <a href="#">
				                  <img src='{{Auth::user()->url_avatar}}' alt="profile image">
				               </a>
				            </div>
				            <div class="small-12 large-8 columns">
				               <h4>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span># {{ Auth::user()->username }} </span></h4>
				               <p><i class="fi-torso"></i>{{ Auth::user()->username }}</p>
				               <p><i class="fi-mail"></i><span> {{ Auth::user()->email }}</span></p>
				               <p><i class="fi-web"></i>Lima, Perú</p>
				               <p><i class="fi-social-thumb-up"></i>Perfil Completado al 100%</p>
				            </div>
				            <div class="row collapse">
				               <ul class="button-group even-3">
				                  <li><a href="#" class="button"> Puntos <span>{{ Auth::user()->points }} </span></a></li>
				                  <li><a href="#" class="button"> Ranking <span>{{ Auth::user()->ranking_total }} </span></a></li>
				                  <li><a href="#" class="button"> Medallas <span>{{ Auth::user()->total_medals }} </span></a></li>
				               </ul>
				            </div>
				         </div>
				      </div>
				   </div>
				</div> 
				<div class="row fix-forum">
 					<div class="large-12 small-12 columns">
 						<div class="row">
							<div class="campaign-title large-12 small-12 fix-forum">
								<h1 class="text-left">Últimos Post del Foro</h1>
							</div>
						</div>
						<div class="row">
							<div class="campaign-content large-12 small-12 columns">
								<div class="row">
				            <div class="blockquote-box blockquote-info clearfix">
				                <div class="square pull-left">
				                     <h2>2</h2>
				                </div>
				                <h4>
				                    Apps para Correr</h4>
				                <p>
				                    Recientemente descague de la play store la aplicación Fit.
				                </p>
				            </div>
				            <div class="blockquote-box blockquote-warning clearfix">
				                <div class="square pull-left">
				                    <h2>3</h2>
				                </div>
				                <h4>
				                    Cantidad de agua diaria</h4>
				                <p>
				                    La cantidad de agua a ingerir diariamente varia deacuerdo a factores como género, clima, y actividad física.
				                </p>
				            </div>
				            <div class="blockquote-box blockquote-danger clearfix">
				                <div class="square pull-left">
				                    <h2>3</h2>
				                </div>
				                <h4>
				                    Lonchera sana</h4>
				                <p>
				                    Los alimentos ricos en carbohidratos y sodio son perjudiciales para el bienestar.
				                </p>
				            </div>
				         </div>
							</div>
						</div>
 					</div>
				</div>
    </div>
   	<div class="large-7 small-12 columns">
				<div class="row">
					<div class="large-12 small-12 columns">
						<div class="row">
							<div class="campaign-title large-12 small-12">
								<h1 class="text-left">Campañas</h1>
							</div>
						</div>
						<div class="row">
							<div class="campaign-content">
								<div class="row">
									<div class="small-11 large-6 columns">
										<div class="offer offer-primary">
											<div class="shape">
												<div class="shape-text">
													<i class="fi-heart"></i>								
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead">
													Conociéndome Primero
												</h3>
												<p>
													Aprende hoy lo maravilloso de la prevención.
													<br>
													<a href="{{ URL::route('campaign.show', array('id'=>1)) }}" data-reveal-id="Path" data-reveal-ajax="true">
				           					<i class="fi-torso"></i>
				          					Puedo lograrlo →
				          				</a>	
												</p>
											</div>
										</div>
									</div>
									<div class="small-11 large-6 columns">
										<div class="offer offer-success">
											<div class="shape">
												<div class="shape-text">
													<i class="fi-star"></i>					
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead">
													Dr. Prevensión
												</h3>
												<p>
													Nuestro doctor te dará los mejores consejos.
													<br>
													<a href="{{ URL::route('campaign.show', array('id'=>2)) }}" data-reveal-id="Path" data-reveal-ajax="true">
				           					<i class="fi-torso"></i>
				          					Puedo lograrlo →
				          				</a>	
												</p>
											</div>
										</div>
									</div>
									<div class="small-11 large-6 columns left">
										<div class="offer offer-success">
											<div class="shape">
												<div class="shape-text">
													<i class="fi-star"></i>									
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead">
													Yo soy Salud
												</h3>						
												<p>
													Pon en práctica todo lo aprendido.
													<br>
													<a href="{{ URL::route('campaign.show', array('id'=>3)) }}" data-reveal-id="Path" data-reveal-ajax="true">
				           					<i class="fi-torso"></i>
				          					Puedo lograrlo →
				          				</a>	
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row away">
					<div class="large-12 small-12 columns">
						<div class="row">
							<div class="campaign-title large-12 small-12">
								<h1 class="text-left">Medallas</h1>
							</div>
						</div>
						<div class="row">
							<div class="campaign-content large-12 small-12 columns">
								<div class="row">
									<div class="large-4 small-6 columns">
						         <a href="{{ URL::route('medals.show', array('id'=>1)) }}" data-reveal-id="Medal" data-reveal-ajax="true">
				           				<img src='../img/medals/Bienvenida.png' alt="medal image">
				          		</a>
						      </div>
						      <div class="large-4 small-6 columns">
						          <a href="{{ URL::route('medals.show', array('id'=>2)) }}" data-reveal-id="Medal" data-reveal-ajax="true">
				           			<img src='../img/medals/Partipando-Campana-1.png' alt="medal image">
				          		</a>
						      </div>
						      <div class="large-4 small-6 columns">
						         <a href="{{ URL::route('medals.show', array('id'=>3)) }}" data-reveal-id="Medal" data-reveal-ajax="true">
				           			<img src='../img/medals/Perfil-Completo.png' alt="medal image">
				          		</a>
						      </div>
						      <div class="large-4 small-6 columns left">
				         			<a href="{{ URL::route('medals.show', array('id'=>4)) }}" data-reveal-id="Medal" data-reveal-ajax="true">
				           			<img src='../img/medals/Dos-Dias-Seguidos.png' alt="medal image">
				          		</a>
				         	</div>
				         </div>
							</div>
						</div>
					</div>
				</div>
    </div>
  </div>
  <div class="reveal-modal medium" id="Path" data-reveal>
   </div>
   <div class="reveal-modal medium" id="Medal" data-reveal>
   </div>
@stop