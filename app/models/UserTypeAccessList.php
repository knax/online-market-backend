<?php

class UserTypeAccessList extends \Eloquent {
	protected $guarded = ['id'];
	public $timestamps = false;
	public $table = 'user_type_access_list';
}
