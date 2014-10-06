<?php

class ContactController extends \BaseController {

	public function getAll()
	{
		return Response::json(array('data' => Contact::all()));
	}

	public function getByType($type)
	{
		return Response::json(array('data' => Contact::byType($type)));
	}

}
