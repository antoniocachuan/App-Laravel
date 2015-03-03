<?php

class UserController extends \BaseController {

	public function __construct(){
		$this->beforeFilter('csrf', array('on' => ['post', 'put']));		
	}
	/**
	 * class UserController extends \BaseController 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('layouts.principal');
	}

	public function loginWithGoogle() {
		 // get data from input
    $code = Input::get( 'code' );
    // get google service
    $googleService = OAuth::consumer( 'Google' );
    // check if code is valid
    // if code is provided get user data and sign in
    if ( !empty( $code ) ) {
        // This was a callback request from google, get the token
        $token = $googleService->requestAccessToken( $code );       	
        // Send a request with it
        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );
        try{//CREATE
        	$user =  new User(); 
					$user->username = $result['email'];
					$user->password = $result['id'];
					$user->email = $result['email'];
					$user->lastname = $result['name'];
					$user->firstname = $result['name'];
          $user->name = $result['name'];
          $user->level = '1';
          $user->total_badges = 1;
          $user->total_medals = 1;
          $user->total_campains = 0;
          $user->points = 100;
          $user->url_avatar = $result['picture'];
					$user->save();
					$credentials = ['username' => $result['email'],'password' => $result['id']];
        	if (Auth::attempt($credentials)) {
          	return Redirect::route('user/profile');
        	}else{
        		return Redirect::route('user/login')->withMessage("No se pudo registrar.");
        	}
        }catch(Exception $e){//LOGIN
        	$credentials = ['username' => $result['email'],'password' => $result['id']];
        	if (Auth::attempt($credentials)) {
          	return Redirect::route('user/profile');
        	}else{
        		return Redirect::route('user/login')->withMessage("No se pudo ingresar.");
        	}
        }
    }
    // if not ask for permission first
    else {
        // get googleService authorization
        $url = $googleService->getAuthorizationUri();
        // return to google login url
        return Redirect::to( (string)$url );
    }    
	}

	public function loginWithTwitter() {
    // get data from input
    $token = Input::get( 'oauth_token' );
    $verify = Input::get( 'oauth_verifier' );
    // get twitter service
    $tw = OAuth::consumer('Twitter');
    // check if code is valid
    // if code is provided get user data and sign in
    if ( !empty( $token ) && !empty( $verify ) ) {
        // This was a callback request from twitter, get the token
        $token = $tw->requestAccessToken( $token, $verify );
        // Send a request with it
        $result = json_decode( $tw->request( 'account/verify_credentials.json' ), true );
        try{//CREATE
        	$user =  new User(); 
					$user->username = $result['screen_name'];
					$user->password = $result['id_str'];
					$user->email = $result['screen_name'].'@twitter.com';
					$user->lastname = $result['name'];
					$user->firstname = $result['name'];

          $user->name = $result['name'];
          $user->level = '1';
          $user->total_badges = 1;
          $user->total_medals = 1;
          $user->total_campains = 0;
          $user->points = 100;
          $user->url_avatar = $result['profile_image_url_https'];  

					$user->save();
					$credentials = ['username' => $result['screen_name'],'password' => $result['id_str']];
        	if (Auth::attempt($credentials)) {
          	return Redirect::route('user/profile');
        	}else{
        		return Redirect::route('user/login')->withMessage("No se pudo crear.");
        	}
        }catch(Exception $e){
        	$credentials = ['username' => $result['screen_name'],'password' => $result['id_str']];
        	if (Auth::attempt($credentials)) {
          	return Redirect::route('user/profile');
        	}else{
        		return Redirect::route('user/login')->withMessage("No se pudo ingresar.");
        	}
        }
    }
    // if not ask for permission first
    else {
        // get request token
        $reqToken = $tw->requestRequestToken();
        // get Authorization Uri sending the request token
        $url = $tw->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));
        // return to twitter login url
        return Redirect::to( (string)$url );
    }
}

	public function loginWithFacebook() {

      // get data from input
    $code = Input::get( 'code' );

    // get fb service
    $fb = OAuth::consumer( 'Facebook' );

    // check if code is valid

    // if code is provided get user data and sign in
    if ( !empty( $code ) ) {

        // This was a callback request from facebook, get the token
        $token = $fb->requestAccessToken( $code );

        // Send a request with it
        $result = json_decode( $fb->request( '/me' ), true );

        try{
        	$user =  new User(); 
					$user->username = $result['email'];
					$user->password = $result['id'];
					$user->email = $result['email'];
					$user->lastname = $result['first_name'];
					$user->firstname = $result['last_name'];

          $user->name = $result['first_name'].' '.$result['last_name'];
          $user->level = '1';
          $user->total_badges = 1;
          $user->total_medals = 1;
          $user->total_campains = 0;
          $user->points = 100;
          $user->url_avatar = 'http://graph.facebook.com/'.$result['id'].'/picture';  

					$user->save();
					$credentials = ['username' => $result['email'],'password' => $result['id']];
        	if (Auth::attempt($credentials)) {
          	return Redirect::route('user/profile');
        	}else{
        		return Redirect::route('user/login')->withMessage("No se pudo crear.");
        	}		
        }catch(Exception $e){
        	$credentials = ['username' => $result['email'],'password' => $result['id']];
        	if (Auth::attempt($credentials)) {
          	return Redirect::route('user/profile');
        	}else{
        		return Redirect::route('user/login')->withMessage("No se pudo ingresar.");
        	}
        }
    }
    // if not ask for permission first
    else {
        // get fb authorization
        $url = $fb->getAuthorizationUri();

        // return to facebook login url
         return Redirect::to( (string)$url );
    }
	}

	public function logout()
	{
	  Auth::logout();
	  return Redirect::route('user.index');
	}

	public function showLogin()
	{
		return View::make('user.login');
	}

	public function login()
	{
		
		if ($this->isPostRequest()) {
      		$validator = $this->getLoginValidator();
  
      		if ($validator->passes()) {
        		$credentials = $this->getLoginCredentials();

        		if (Auth::attempt($credentials)) {
          			return Redirect::route('user/profile');
        		}
  					//return var_dump(Hash::make($credentials->password));
        		return Redirect::back()->withErrors([
          		'password' => ['Contraseña incorrecta.']
        		]);
      			} else {
        			return Redirect::back()
          			->withInput()
          			->withErrors($validator);
      		}
    	}
    	return View::make('user.login');
	}

	public function profile()
	{
	  return View::make('user/profile');
	}

	protected function isPostRequest()
  {
    return Input::server('REQUEST_METHOD') == 'POST';
  }
  
  protected function getLoginValidator()
  {
    return Validator::make(Input::all(), [
      'username' => 'required',
      'password' => 'required'
    ]);
  }
  
  protected function getLoginCredentials()
  {
    return [
      'username' => Input::get('username'),
      'password' => Input::get('password')
    ];
  }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
    return View::make('layouts.testmain');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'username' => array('required', 'unique:user'),
			'password' => array('required'),
			'email' => array('required'),
			'firstname'=> array('required'),
			'lastname'=> array('required')
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::back()->withErrors(
          			[
          			'password' => ['Ingresar contraseña.'],
          			'email' => ['Ingresar correo.'],
          			'username' => ['Ingresar un nombre de usuario diferente'],
          			'firstname' => ['Ingresar usuario.'],
          			'lastname' => ['Ingresar usuario.']
          			]);
		}
		Mail::queue('user.mails.bienvenida', array('firstname'=>Input::get('firstname')), function($message){
    $message->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))->subject('Bienvenido a Health App!');
    });
		$user =  new User();
		$user->username = Input::get('username');
		$user->password = Input::get('password');
		$user->email = Input::get('email');
		$user->lastname = Input::get('lastname');
		$user->firstname = Input::get('firstname');
    $user->level = '1';
    $user->total_badges = 1;
    $user->total_medals = 1;
    $user->total_campains = 0;
    $user->points = 100;
		$user->save();
    $credentials = ['username' => Input::get('username'),'password' => Input::get('password')];
    if (Auth::attempt($credentials)) {
      return Redirect::route('user/profile');
    }else{
      return Redirect::route('user/index')->withMessage("No se pudo crear su usuario.");
    } 
		//return Redirect::route('user/login')->withMessage("Su usuario fue creado!!");
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
