<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Blog;

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

    public function viewEntries()
    {
        $blogModel = new Blog();
        $data['entries'] = $blogModel->findAll();

        return view('blog-entries', $data);
    }

    public function editEntry($entryId)
    {
        $blogModel = new Blog();
        $data['entry'] = $blogModel->find($entryId);

        return view('edit-entry', $data);
    }

    public function updateEntry()
    {
        $input = $this->request->getVar();

        $blogObject = new Blog();

        $data = [
            'title' => $input['title'],
            'author_name' => $input['author_name'],
            'content' => $input['content']
        ];

        $blogObject->update($input['id'], $data);

        $session = session();

        $session->setFlashdata('success', 'Entry updated successfully!');

        return redirect()->to('viewEntries');
    }

    public function viewEntry($entryId)
    {
        $blogModel = new Blog();
        $data['entry'] = $blogModel->find($entryId);

        return view('view-entry', $data);
    }



   
}
