<?php

class Product extends \Eloquent {
	protected $guarded = ['id'];

	public function scopeSortByMostExpensive($query)
	{
		return $query->orderBy('price', 'DESC');
	}

	public function scopeSortByMostCheap($query)
	{
		return $query->orderBy('price', 'ASC');
	}

	public function scopeSortByNewest($query)
	{
		return $query->orderBy('updated_at');
	}

	public static function sortBy($type, Array $param)
	{
		$products = Product::with('category')->with('photos');
		switch ($type) {
			case 'newest':
			$products = $products->sortByNewest();
			break;
			case 'most_expensive':
			$products = $products->sortByMostExpensive();
			break;
			case 'most_cheap':
			$products = $products->sortByMostCheap();
			break;
			default:
			throw new Exception('Not valid sort by type', 1);
			break;
		}


		$paramDefault = array(
			'limit' => '5',
			'offset' => '0'
		);
		$param = array_merge($paramDefault, $param);
		if($param['limit'] != 0) {
			$data = $products->take($param['limit'])->skip($param['offset']);
		}

		return $products->get();
	}

	public function category()
	{
		return $this->belongsTo('Category', 'category_id', 'id');
	}

	public function photos()
	{
		return $this->hasMany('Photo', 'product_id', 'id');
	}
}
