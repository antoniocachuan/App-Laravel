{{HTML::style('css/medal.css', array('media' => 'screen')) }}
<div class="large-12 small-12 columns cuerpo"> 
	<div class="row">
		<div class="large-12 small-12 columns user-details">
        <div class="user-image">
          <img src="{{{$medal->url_medal}}}" alt="Medalla" title="Medalla" class="img-circle">
        </div>
        <div class="user-info-block">
        	<div class="user-heading">
              <h3 class="basic-color">{{{$medal->medals_name}}}</h3>
              <span class="help-block">{{{$medal->medals_description}}}</span>
           </div>
           <div class="text-right">
	           <a href="#" onclick="window.open(
	                              'https://twitter.com/share?url='+encodeURIComponent('http://healthappgame.com')+'&amp;text='+encodeURIComponent('Acabo de ganar la medalla -> {{{$medal->medals_name}}}! @healthappgame:') + '&amp;count=none/', 
	                              'twitter-share-dialog', 
	                              'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 )); 
	                            return false;">
	                          <i class="fa fa-twitter"></i> Twittear
	           </a>
	           <a href="#" onclick="window.open(
	                              'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://healthappgame.com/medals/1') +'&amp;t=' + encodeURIComponent('Acabo de ganar la medalla -> {{{$medal->medals_name}}}!'), 
	                              'facebook-share-dialog', 
	                              'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 )); 
	                            return false;">
	                            <i class="fa fa-facebook"></i> Compartir
	           </a>
	           <a href="whatsapp://send?text=Acabo%20de%20ganar%20la%20medalla%20{{{$medal->medals_name}}}%20en%20Health%20App%20Game - http%3A%2F%2Fhealthappgame.com"><i class="fa fa-weixin"></i>WhatsApp</a>
           </div>
        </div>
    </div>
	</div>
</div>