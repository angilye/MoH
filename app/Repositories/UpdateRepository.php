<?php

namespace App\Repositories;

use App\Models\update;

class UpdateRepository
{

    protected $update;

    public function __construct(update $update)
	{
		$this->update = $update;
	}

	private function save(update $update, Array $inputs)
	{
		
		$update->title = $inputs['title'];
		$update->date = $inputs['date'];	
		$update->sousTitre = $inputs['sousTitre'];
		$update->image = $inputs['image'];		
		$update->contend = $inputs['contend'];		

		$update->save();
	}

	public function getPaginate($n)
	{
        return $this->update->paginate($n);
	}

	public function store(Array $inputs)
	{
		$update = new $this->update;
		
		$this->save($update, $inputs);

		return $update;
	}

	public function getById($id)
	{
		return $this->update->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

}