<?php

class Catagory extends \Eloquent {
	protected $guarded = ['id'];

	public function products()
    {
        return $this->hasMany('Products', 'catagory_id', 'id');
    }
}
