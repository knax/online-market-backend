<?php

class Photo extends \Eloquent {
	protected $guarded = ['id'];
	public $timestamps = false;

	public function product()
    {
        return $this->belongsTo('Product', 'product_id', 'id');
    }
}
