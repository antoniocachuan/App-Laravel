<div class="large-12 small-12 columns">
				      <div class="row">
				         <div class="profile-card">
				            <div class="large-4 small-12 columns">
				               <a href="#" class="center">
				                  <img src='{{Auth::user()->url_avatar}}' alt="profile image">
				               </a>
				            </div>
				            <div class="small-12 large-8 columns">
				               <h4>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </h4>
				               <a href="{{ URL::route('user/showAvatarTitle', array('id'=>1)) }}" data-reveal-id="AvatarTitle" data-reveal-ajax="true">

				               <h4 id="level-title"> <i class="fa fa-shield white"></i>{{ Auth::user()->title_level }}</h4>
				               </a>
				               <p><i class="fi-torso"></i>{{ Auth::user()->username }}</p>
				               <p><i class="fi-mail"></i><span> {{ Auth::user()->email }}</span></p>
				               <p><i class="fi-web"></i>Lima, Perú</p>
				               <p><i class="fi-social-thumb-up"></i>Perfil Completado al 100%</p>
				            </div>
				            <div class="row collapse">
				               <ul class="button-group even-3">
				                  <li><a href="#" class="button"> Puntos <span>{{ Auth::user()->points }} </span></a></li>
				                  <li>
				                  <a href="{{ URL::route('user/showLevel', array('id'=>1)) }}" data-reveal-id="Level" data-reveal-ajax="true" class="button"> Nivel <span>{{ Auth::user()->level }} </span></a>
				                  </li>
				                  <li><a href="#" class="button"> Medallas <span>{{ Auth::user()->total_medals }} </span></a></li>
				               </ul>
				            </div>
				         </div>
				      </div>
				   </div>