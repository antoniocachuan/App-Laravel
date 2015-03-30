<?php

class MedalsObtainedController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$id =Input::get('id');
		$items = DB::table('medals_obtained')
		->leftJoin('medals', 'id_medal', '=', 'medals.id')
		->where('id_usuario', '=', $id)
		->get();
		/*return Response::json( array(
		'sms' => $resultado2, 
		'variable' =>$resultado,
		));*/
		
		return View::make('user.medals_user')->withItems($items);//retorna vista
		//return View::make('user.medals_user', array('items' => $items));
		//return View::make('user.medals_user', array('item' => $items));
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
