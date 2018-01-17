<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function gestion()
    {
        $users = DB::table('users')->get();
        return view('admin.gestion', ['users' => $users]);
    }

    public function index()
    {
        return view('admin.index');
    }
}