<?php
class Activity extends Eloquent{
	

	public function activityList(){
		return $this->belongsTo('campaign');
	}
}