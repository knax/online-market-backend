<?php

class User extends \Eloquent {
	protected $guarded = ['id'];
	public $timestamps = false;
	protected $hidden = ['password', 'created_at', 'updated_at', 'remember_token'];

	public function userType()
	{
		return $this->belongsTo('UserType', 'user_type_id', 'id');
	}

	public function contacts()
	{
		return $this->hasMany('Contact', 'contact_id', 'id');
	}
}
