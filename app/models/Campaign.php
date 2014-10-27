<?php
class Campaign extends Eloquent{
	

	public function listActivities(){
		return $this->hasMany('activity');
	}
}