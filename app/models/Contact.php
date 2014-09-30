<?php

class Contact extends \Eloquent {
	protected $guarded = ['id'];
	public $timestamps = false;

	public function users()
	{
		return $this->hasMany('User', 'user_id', 'id');
	}
}
