<?php

namespace App\Repositories;

use App\Models\ContactMessage;

class ContactRepository
{

    protected $Contact;

    public function __construct(ContactMessage $Contact)
	{
		$this->Contact = $Contact;
	}

	private function save(ContactMessage $Contact, Array $inputs)
	{
		$Contact->raison = $inputs['raison'];
		$Contact->importance = $inputs['importance'];
		$Contact->message = $inputs['message'];
		$Contact->progression = $inputs['progression'];


		$Contact->save();
	}

	public function getPaginate($n)
	{
		return $this->Contact->paginate($n);
	}

	public function store(Array $inputs)
	{
		$Contact = new $this->Contact;
		
		$this->save($Contact, $inputs);

		return $Contact;
	}

	public function getById($id)
	{
		return $this->Contact->findOrFail($id);
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