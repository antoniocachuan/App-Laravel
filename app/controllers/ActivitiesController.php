<?php

class ActivitiesController extends \BaseController {

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
		$activity = Activity::find($id);
		   
    if (is_null($activity)) App::abort(404);

    /*
    switch ($activity) {
    	case "1":
    		return View::make('activity.poll', array('activity' => $activity));
    		break;
    	case "2":
    		return View::make('activity.show', array('activity' => $activity));
    		break;    	
    }
    */
    //return View::make('activity.poll', array('activity' => $activity));
    
    return View::make('activity.show', array('activity' => $activity));
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

	//Guardar la calificacion actividad
	public function grade()
	{

		$feedback = new ActivityFeedback;
		$feedback->id_user = Input::get('idUsuario');
		$feedback->id_activity = Input::get('idActividad');
		$feedback->starts = Input::get('calificacion');
		$feedback->save();
		/*return Response::json( array(
		'sms' => $resultado2, 
		'variable' =>$resultado,
		));*/
		return View::make('activity.respuesta');//retorna vista
	}

	public function comment()
	{

		$comment = new Comment;
		$comment->id_user = Input::get('idUsuario');
		$comment->id_activity = Input::get('idActividad');
		$comment->comment = Input::get('comment');
		$comment->save();
		/*return Response::json( array(
		'sms' => $resultado2, 
		'variable' =>$resultado,
		));*/
		return View::make('activity.respuesta');//retorna vista
	}

	public function showcomment()
	{

		$idActividad= Input::get('idActividad');

	

		$results = DB::table('activity_comments')
				->where('activity_comments.id_activity','=',$idActividad)
        ->leftJoin('user', 'user.id', '=', 'activity_comments.id_user')
        ->get();

   	$cantidad = Comment::where('id_activity', '=', $idActividad)
								->count();
		/*return Response::json( array(
		'sms' => $resultado2, 
		'variable' =>$resultado,
		));*/
		return View::make('activity.showComment', array('results' => $results, 'cantidad'=> $cantidad));//retorna vista

	}

	public function showlastcomment()
	{

		$idUser= Input::get('id');

		$results = DB::table('activity_comments')
		    ->orderBy('activity_comments.updated_at', 'desc')
        ->leftJoin('user', 'user.id', '=', 'activity_comments.id_user')
        ->take(4)
        ->get();

		/*return Response::json( array(
		'sms' => $resultado2, 
		'variable' =>$resultado,
		));*/
		return View::make('user.foro', array('results' => $results));//retorna vista

	}

	public function next(){
		
		$idActitivy = Input::get('id');
		$idUser = Input::get('idUser');

		$currentActivity = Activity::find($idActitivy);

		//Add points
		$user = User::find($idUser);
		$user->points = $user->points + $currentActivity->points;
  	$user->save();

  	//Give Badged
		$result = MedalsUser::where('id_usuario', '=', $user->id)
										->where('id_medal', '=', $currentActivity->badged_id)
										->delete();

		$newMedal= new MedalsUser;
		$newMedal->id_usuario = $user->id;
		$newMedal->id_medal = $currentActivity->badged_id;
		$newMedal->save();

		//Send Next Activity
		$nextActivity = Activity::find($idActitivy +1);
		if (is_null($nextActivity)){ 
    	return View::make('activity.final');
		}

		//Calculate Level
		$user = User::find($idUser);
		$actualLevel = $user->level;
		$actualPoints = $user->points;
		$nextLevel = Level::find($actualLevel+1);
		$nextLevelLimit = $nextLevel->limitI;

		if($actualPoints > $nextLevelLimit){
			$user->level = $actualLevel + 1;
			$user->title_level = $nextLevel->titleLevel;

			$newMedal= new MedalsUser;
			$newMedal->id_usuario = $user->id;
			$newMedal->id_medal = $nextLevel->idMedal;
			$newMedal->save();
	
		}

		//update total_medals
			$totalMedals = MedalsUser::where('id_usuario', '=', $user->id)
										->count();
			$user->total_medals = $totalMedals;
			$user->save();

		return View::make('activity.show', array('activity' => $nextActivity));
	}

}
