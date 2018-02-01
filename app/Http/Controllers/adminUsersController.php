<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests\UserCreateAdminRequest;
use App\Http\Requests\UserUpdateAdminRequest;

use App\Repositories\UserRepository;

class adminUsersController extends Controller
{

    protected $userRepository;

    protected $nbrPerPage = 6;

    public function __construct(UserRepository $userRepository)
    {
		$this->userRepository = $userRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
		$links = $users->render();
		
        return view('layouts.gestionUsers.gestionUsers', compact('users', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.gestionUsers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateAdminRequest $request)
    {
		$user = $this->userRepository->store($request->all());
        flashy()->success("L'utilisateur " . $user->name . " a été créé.");
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
        $user = $this->userRepository->getById($id);

		return view('layouts.gestionUsers.show',  compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$user = $this->userRepository->getById($id);

		return view('layouts.gestionUsers.edit',  compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateAdminRequest $request, $id)
    {
        $this->userRepository->update($id, $request->all());
		flashy()->success("L'utilisateur " . $request->input('name') . " a été modifié.");
		return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->destroy($id);
        flashy()->error("L'utilisateur " . $id . " a été supprimé.");
		return back();
    }
}
