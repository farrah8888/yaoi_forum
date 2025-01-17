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
	protected $table = 'users';
    protected $guard = array('email', 'password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


		public function posts()
		{
    	return $this->hasMany('Post');
		}

		public function faverate_posts()
		{
    	return $this->belongsToMany('Post');
		}


	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($remember_token)
	{
		$this->remember_token = $remember_token;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function isAdmin()
	{
		return($this->isAdmin ==1);
	}

}
