<?php

class Photo extends \Eloquent {
	protected $guarded = ['id'];

	public function product()
    {
        return $this->belongsTo('Product', 'product_id', 'id');
    }
}
