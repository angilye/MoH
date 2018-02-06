<?php

namespace App\Repositories;

use App\Models\pages;

class PagesRepository
{

    protected $pages;

    public function __construct(pages $pages)
	{
		$this->pages = $pages;
	}

	private function save(pages $pages, Array $inputs)
	{
		
		$pages->title = $inputs['title'];
		$pages->sousTitre = $inputs['sousTitre'];
		$pages->contend = $inputs['contend'];

		$pages->save();
	}

	public function getPaginate($n)
	{
		return $this->pages->paginate($n);
	}

	public function store(Array $inputs)
	{
		$pages = new $this->pages;		
		$pages->password = bcrypt($inputs['password']);
		
		$this->save($pages, $inputs);

		return $pages;
	}

	public function getById($id)
	{
		return $this->pages->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

}