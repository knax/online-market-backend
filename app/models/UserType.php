<?php

class UserType extends \Eloquent {
	protected $guarded = ['id'];
	public $timestamps = false;

	public function users()
	{
		return $this->hasMany('User', 'user_id', 'id');
	}

	public function accessLists()
	{
		return $this->belongsToMany('AccessList', 'user_type_access_list', 'access_list_id', 'user_type_id');
	}
}
