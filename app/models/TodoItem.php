<?php
class TodoItem extends Eloquent{
	

	public function todoList(){
		return $this->belongsTo('TodoList');
	}
}