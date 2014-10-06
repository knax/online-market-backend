<?php

class Contact extends \Eloquent {
	protected $guarded = ['id'];
	public $timestamps = false;

	public function user()
	{
		return $this->hasMany('User', 'id', 'user_id');
	}

	public static function byType($type)
	{
		return self::with('user')->where('type', '=', $type)->get();
	}
}
