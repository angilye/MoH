<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests\UserCreateAdminRequest;
use App\Http\Requests\UserUpdateAdminRequest;

use App\Repositories\UserRepository;

use App\Models\pages;
use App\Http\Requests\PagesCreateRequest;

class AdminController extends Controller
{
    public function gestion()
    {
        $users = DB::table('users')->get();
        return view('pages.admin.Admingestion', ['users' => $users]);
    }

    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
		$links = $users->render();

		
        return view('pages.admin.Adminindex', ['links' => $links]);
    }

    public function createPages()
    {
        return view('pages.admin.AdminPages');
    }

    public function storePages(PagesCreateRequest $request)
    {
        // regle de validation dans ContactRequest au niveau de APP
        $page = new pages;
        $page->title = $request->title;
        $page->contend = $request->contend;
        $page->save();

        flashy()->success('Votre page à bien été créé.');

        return redirect()->route('root_path');
        
    }

    //gestion des modifications utilisateur.

     protected $userRepository;

    protected $nbrPerPage = 4;

    public function __construct(UserRepository $userRepository)
    {
		$this->userRepository = $userRepository;
	}

    public function gestionUser()
    {
        $users = DB::table('users')->get();
        return view('layouts.gestionUsers.gestionUsers', ['users' => $users]);
    }
	

	public function create()
	{
		return view('layouts.gestionUsers.create');
	}

	public function store(UserCreateAdminRequest $request)
	{
        dd('test');
		$user = $this->userRepository->store($request->all());

		return redirect('layouts.gestionUsers.user')->withOk("L'utilisateur " . $user->name . " a été créé.");
	}

	public function show($id)
	{
		$user = $this->userRepository->getById($id);

		return view('layouts.gestionUsers.show',  compact('user'));
	}

	public function edit($id)
	{
		$user = $this->userRepository->getById($id);

		return view('layouts.gestionUsers.edit',  compact('user'));
	}

	public function update(UserUpdateAdminRequest $request, $id)
	{
		$this->userRepository->update($id, $request->all());
		
		return redirect('layouts.gestionUsers.user')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
	}

	public function destroy($id)
	{
		$this->userRepository->destroy($id);

		return back();
	}


    //FIN gestion des modifications utilisateur.


}
