<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    
    /*
    /////FIN/////
    */

    //
    // Acceuil
    //
    
    public function index()
    {
        return view('pages.admin.Adminindex');
    }

    /*
    /////FIN/////
    */

    //
    // gestion des sous pages de gestion
    //

    public function gestionUser()
    {
        $users = DB::table('users')->get();
        return view('layouts.gestionUsers.gestionUsers', ['users' => $users]);
    }

    /*
    /////FIN/////
    */

    
}

