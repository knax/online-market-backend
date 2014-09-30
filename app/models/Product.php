<?php

class Product extends \Eloquent {
	protected $guarded = ['id'];

	public function category()
    {
        return $this->belongsTo('Category', 'category_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany('Photo', 'photo_id', 'id');
    }
}
