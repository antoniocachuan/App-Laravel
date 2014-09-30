<?php

class TodoItemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(){
		$this->beforeFilter('csrf', array('on' => ['post', 'put']));		
	}

	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id_task)
	{
		return View::make('todos.items.create')->with('id_task', $id_task);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id_task)
	{
		$rules = array(
			'content' => array('required', 'unique:todo_items')
		);
		
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::route('todos.items.create')
				->with('id_task', $id_task)
				->withErrors($validator)
				->withInput();
		}

		$content = Input::get('content');
		$actividad = new TodoItem();
		$actividad->content = $content;
		$list = TodoList::findOrFail($id_task);
		$list->listItems()->save($actividad);
		$items = $list->listItems()->get();
		return View::make('todos.show')
			->withList($list)
			->withItems($items);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
