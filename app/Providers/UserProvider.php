<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider as IlluminateUserProvider;


class UserProvider  implements IlluminateUserProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
	    dd('UserProvider');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

	/**
	 * @param  mixed  $identifier
	 * @return \Illuminate\Contracts\Auth\Authenticatable|null
	 */
	public function retrieveById($identifier)
	{
		dd('retrieveById');
		//return Usuario::find(3);
	}
	/**
	 * @param  mixed   $identifier
	 * @param  string  $token
	 * @return \Illuminate\Contracts\Auth\Authenticatable|null
	 */
	public function retrieveByToken($identifier, $token)
	{
		// Get and return a user by their unique identifier and "remember me" token
	}
	/**
	 * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
	 * @param  string  $token
	 * @return void
	 */
	public function updateRememberToken(Authenticatable $user, $token)
	{
		// Save the given "remember me" token for the given user
	}
	/**
	 * Retrieve a user by the given credentials.
	 *
	 * @param  array  $credentials
	 * @return \Illuminate\Contracts\Auth\Authenticatable|null
	 */
	public function retrieveByCredentials(array $credentials)
	{
		dd('retrieveByCredentials');
		//return Usuario::find(3);
	}
	/**
	 * Validate a user against the given credentials.
	 *
	 * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
	 * @param  array  $credentials
	 * @return bool
	 */
	public function validateCredentials(Authenticatable $user, array $credentials)
	{
		dd('implementar validateCredentials');// Check that given credentials belong to the given user
	}

}
