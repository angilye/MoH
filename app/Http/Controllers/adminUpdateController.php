<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\UpdateCreateAdminRequest;
use App\Http\Requests\UpdateUpdateAdminRequest;

use App\Models\update;

use App\Repositories\UpdateRepository;

class adminUpdateController extends Controller
{

    protected $updateRepository;

    protected $nbrPerPage = 6;

    public function __construct(UpdateRepository $updateRepository)
    {
		$this->updateRepository = $updateRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $update = $this->updateRepository->getPaginate($this->nbrPerPage);
		$links = $update->render();
		
        return view('layouts.gestionUpdates.gestionUpdate', compact('update', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.gestionUpdates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateCreateAdminRequest $request)
    {
		$update = $this->updateRepository->store($request->all());
        flashy()->success("L'update " . $update->title . " a été créé.");
        return redirect('/index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $update = $this->updateRepository->getById($id);

		return view('layouts.gestionUpdates.show',  compact('update'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$update = $this->updateRepository->getById($id);

		return view('layouts.gestionUpdates.edit',  compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUpdateAdminRequest $request, $id)
    {
        $this->updateRepository->update($id, $request->all());
		flashy()->success("L'update " . $request->input('title') . " a été modifié.");
        return redirect()->action('adminUpdateController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->updateRepository->destroy($id);
        flashy()->error("L'update " . $id . " a été supprimé.");
		return back();
    }
}
