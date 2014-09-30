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
		//
	}

	public function logout()
	{
	  Auth::logout();
	  return Redirect::route('user/login');
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
			'name'=> array('required'),
			'lastname'=> array('required')
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::back()->withErrors(
          			[
          			'password' => ['Ingresar contraseña.'],
          			'email' => ['Ingresar correo.'],
          			'username' => ['Ingresar un nombre de usuario diferente'],
          			'name' => ['Ingresar usuario.'],
          			'lastname' => ['Ingresar usuario.']
          			]);
		}
		Mail::send('user.mails.bienvenida', array('name'=>Input::get('name')), function($message){
        $message->to(Input::get('email'), Input::get('name').' '.Input::get('lastname'))->subject('Welcome to Health App!');
    });
		$username = Input::get('username');
		$lastname = Input::get('lastname');
		$name = Input::get('name');
		$password = Input::get('password');
		$email = Input::get('email');
		$user =  new User();
		$user->username = $username;
		$user->password = $password;
		$user->email = $email;
		$user->lastname = $lastname;
		$user->firstname = $name;
		$user->save();

		return Redirect::route('user/login')->withMessage("Su usuario fue creado!!");
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
