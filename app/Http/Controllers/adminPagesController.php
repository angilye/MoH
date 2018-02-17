<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests\UserCreateAdminRequest;
use App\Http\Requests\UserUpdateAdminRequest;

use App\Repositories\PagesRepository;

use App\Models\pages;
use App\Http\Requests\PagesUpdateAdminRequest;

class adminPagesController extends Controller
{

    public function __construct(PagesRepository $PagesRepository)
    {
		$this->PagesRepository = $PagesRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = DB::table('pages')->get();
        return view('layouts.gestionPages.gestionPages', ['pages' => $pages]);
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
        $pages = DB::table('pages')->where('id', $id)->first();
//        dd($pages);
        foreach ($pages as $test) {

            if ($pages->partieSite == 'warzone') {

                return view('pagesWarzone.'.$pages->page, compact('pages'));

            }elseif ($pages->partieSite == 'moh'){

                return view('pages.'.$pages->page, compact('pages'));

            }elseif ($pages->partieSite == ''){

                return view($pages->page, compact('pages'));

            }

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = DB::table('pages')->where('id', $id)->first();

		return view('layouts.gestionPages.edit',  compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagesUpdateAdminRequest $request, $id)
    {
        $this->PagesRepository->update($id, $request->all());

        flashy()->success('Votre page à bien été mis à jour.');

        return redirect()->action('adminPagesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
