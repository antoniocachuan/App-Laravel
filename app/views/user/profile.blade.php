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
								<h1 class="text-left">Badges</h1>
							</div>
						</div>
						<div class="row">
							<div class="campaign-content large-12 small-12 columns">
								<div class="row">
									<div class="large-4 small-6 columns">
										<a href="#">
						           <img src='../img/badges/Bienvenida.png' alt="badge image">
						         </a>
						      </div>
						      <div class="large-4 small-6 columns">
						         <a href="#">
						           <img src='../img/badges/Partipando-Campana-1.png' alt="badge image">
						         </a>
						      </div>
						      <div class="large-4 small-6 columns">
						         <a href="#">
						           <img src='../img/badges/Perfil-Completo.png' alt="badge image">
						         </a>
						      </div>
						      <div class="large-4 small-6 columns left">
						         <a href="#">
						           <img src='../img/badges/Dos-Dias-Seguidos.png' alt="badge image">
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
@stop