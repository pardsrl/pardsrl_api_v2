<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Usuario extends Authenticatable
{

	use Notifiable, HasApiTokens;

	protected $table = "fos_user";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * @return string
	 */
	public function getAuthIdentifierName()
	{
		// Return the name of unique identifier for the user (e.g. "id")
		return "id";
	}
	/**
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		// Return the unique identifier for the user (e.g. their ID, 123)
		return $this->id;
	}
	/**
	 * @return string
	 */
	public function getAuthPassword()
	{
		// Returns the (hashed) password for the user
		return $this->password;
	}
	/**
	 * @return string
	 */
	public function getRememberToken()
	{
		// Return the token used for the "remember me" functionality
	}
	/**
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		// Save a new token user for the "remember me" functionality
	}
	/**
	 * @return string
	 */
	public function getRememberTokenName()
	{
		// Return the name of the column / attribute used to store the "remember me" token
	}


	public function findForPassport($username)
	{
		$user = Usuario::where('username', $username)->first();

		return $user;
	}

}
