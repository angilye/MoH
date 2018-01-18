<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function gestion()
    {
        $users = DB::table('users')->get();
        return view('page.Admingestion', ['users' => $users]);
    }

    public function index()
    {
        return view('pages.Adminindex');
    }
}