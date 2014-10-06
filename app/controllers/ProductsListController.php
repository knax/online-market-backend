<?php

class ProductsListController extends \BaseController {

	public function sortBy($type)
	{
		$products = Product::sortBy($type, array(
			'limit' => Input::get('limit', 5),
			'offset' => Input::get('offset', 0)
		));
		return Response::json(array(
			'data' => $products
		));
	}

	public function getAll()
	{
		return Response::json(array(
			'data' => Product::all()
		));
	}

	public function test()
	{
		// return User::where('user_type_id', '=', UserType::where('name', '=', 'Customer Service')->get())->get();
		$customerServices = User::where('user_type_id', '=', UserType::where('name', '=', 'Customer Service')->first()->id)->get();
		return $customerServices[rand(1,count($customerServices)) - 1];
	}

}
