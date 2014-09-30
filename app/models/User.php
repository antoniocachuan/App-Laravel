<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';
  protected $fillable = array('email', 'firstname', 'password'); //para carga masiva
  public $errors;
  protected $perPage = 6;//indico la cantidad de usuarios para paginar
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function getAuthIdentifier()
  {
    return $this->getKey();
  }
  
  public function getAuthPassword()
  {
    return $this->password;
  } 
  
  public function getRememberToken()
  {
    return $this->remember_token;
  }
  
  public function setRememberToken($value)
  {
    $this->remember_token = $value;
  }
  
  public function getRememberTokenName()
  {
    return "remember_token";
  }
  
  public function getReminderEmail()
  {
    return $this->email;
  }

  public function setPasswordAttribute($value)
    {
        if ( ! empty ($value))
        {
            $this->attributes['password'] = Hash::make($value);
        }
    }

  public function validAndSave($data)
    {
        // Revisamos si la data es válida
        if ($this->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $this->fill($data);//MODIFICAR
            // Guardamos el usuario
            $this->save();           
            return true;
        }     
        return false;
    }

  public function isValid($data)
    {
        $rules = array(
            'email'     => 'required|email|unique:users',
            'firstname' => 'required|min:4|max:40',
            'password'  => 'min:8|confirmed'
        );
        
        // Si el usuario existe:
        if ($this->exists)
        {
            //Evitamos que la regla “unique” tome en cuenta el email del usuario actual
            $rules['email'] .= ',email,' . $this->id;
        }
        else // Si no existe...
        {
            // La clave es obligatoria:
            $rules['password'] .= '|required';
        }
        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;
    }

}
