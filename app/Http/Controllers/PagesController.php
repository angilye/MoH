<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $pages = DB::table('pages')->where('title', 'Annonce')->first();
        return view('acceuilSite', ['pages' => $pages]);
    }

    public function moh()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function arma()
    {
        $pages = DB::table('pages')->where('title', 'arma')->first();
        // dd($pages);
        return view('pages.arma', ['pages' => $pages]);
    }

    public function warzonefr()
    {
        $pages = DB::table('pages')->where('title', 'warzone')->first();
        // dd($pages);
        return view('pagesWarzone.warzone', ['pages' => $pages]);
    }

    public function update()
    {
        $pages = DB::table('updates')->get();
        return view('pagesWarzone.updates', ['pages' => $pages]);
    }

    public function updateshow($id)
    {
        $pages = DB::table('updates')->where('id', $id )->first();
        return view('pagesWarzone.update', compact('pages'));
    }

    
}
