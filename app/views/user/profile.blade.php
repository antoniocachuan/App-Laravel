@extends("layouts.main")
@section("content")
{{HTML::style('css/profile.css', array('media' => 'screen')) }}
  <div class="row">
    <p></p>
  </div>
  <div class="row">    
    <div class="large-5 small-12 columns">
				<div class="row">
				   @include('user.user_Card')
				</div> 
				<div class="row fix-forum">
           <div id="lastComments">
           </div>
				</div>
    </div>
   	<div class="large-7 small-12 columns">
				<div class="row">
					 @include('user.campaigns_all')
				</div>
				<div id="medallas">
				</div>
    </div>
  </div>
  <div class="reveal-modal medium" id="Path" data-reveal>
   </div>
   <div class="reveal-modal medium" id="Medal" data-reveal>
   </div>

    <div class="reveal-modal small" id="Level" data-reveal>
   </div>
    <div class="reveal-modal medium" id="AvatarTitle" data-reveal>
   </div>
   <div class="reveal-modal medium" id="UserEdit" data-reveal>
   </div>
   <script>
  	var user_id = "{{Auth::user()->id}}";
	</script>
{{HTML::script('js/vendor/jquery.js')}}
{{HTML::script('js/modulos.js')}}
@stop