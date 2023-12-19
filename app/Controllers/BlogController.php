<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BlogController extends BaseController
{
    public function index()
	{
		return view('blog-form');
	}

	public function submitData()
	{
		$input = $this->request->getVar();

		$blogObject = new Blog();

		$data = [
			'title' => $input['title'],
			'author_name'    => $input['author_name'],
			'description' => $input['description']
		];

		$blogObject->insert($data);

		$session = session();

		$session->setFlashdata('success', 'Data saved successfully!');

		return redirect()->to('form'); 
	}
}
