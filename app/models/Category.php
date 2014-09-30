<?php

class Category extends \Eloquent {
	protected $guarded = ['id'];
    public $timestamps = false;

	public function products()
    {
        return $this->hasMany('Product', 'catagory_id', 'id');
    }
}
