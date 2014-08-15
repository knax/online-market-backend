<?php

class Product extends \Eloquent {
	protected $guarded = ['id'];

	public function catagory()
    {
        return $this->belongsTo('Catagory', 'catagory_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany('Photo', 'photo_id', 'id');
    }
}
