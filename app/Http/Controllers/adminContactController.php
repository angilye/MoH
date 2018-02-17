<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\ContactUpdateAdminRequest;

use App\Repositories\ContactRepository;
use App\Models\ContactMessage;


class adminContactController extends Controller
{

    protected $ContactRepository;

    protected $nbrPerPage = 8;

    public function __construct(ContactRepository $ContactRepository)
    {
		$this->ContactRepository = $ContactRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = $this->ContactRepository->getPaginate($this->nbrPerPage);
		$links = $contact->render();
		
        return view('layouts.gestionContact.gestionContact', compact('contact', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = $this->ContactRepository->getById($id);

		return view('layouts.gestionContact.edit',  compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactUpdateAdminRequest $request, $id)
    {
        $this->ContactRepository->update($id, $request->all());
		flashy()->success("Le ticket n°" . $id . " a été modifié.");
        return redirect()->action('adminContactController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ContactRepository->destroy($id);
        flashy()->error("L'utilisateur " . $id . " a été supprimé.");
        return back();
    }
}
