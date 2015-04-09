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
							@foreach($items as $item)
							<div class="large-2 small-3 columns left fix-padding">
				         <a href="{{ URL::route('medals.show', array('id'=>$item->id_medal )) }}" data-reveal-id="Medal" data-reveal-ajax="true">
		           				<img src='{{{$item->url_medal}}}' alt="medal image">
		          		</a>
				      </div>
				    	 @endforeach
		         </div>  
			</div>
		</div>
	</div>
</div>