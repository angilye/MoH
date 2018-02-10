<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterSteamController extends Controller
{

    public function handle()
    {

        $UIDSteamDB = DB::table('users')->where('UIDSteam', $_SESSION['steam_steamid'])->first();

        if (!empty($UIDSteamDB)) {

            Auth::attempt(['UIDSteam' => $_SESSION['steam_steamid'], 'password' => $_SESSION['steam_steamid'] ]);

            return redirect('/'); // redirect to site
        
        }
        
        $mb = User::create([
            'AuthViaSteam' => '1',
            'UIDSteam' => $_SESSION['steam_steamid'],
            'name' => $_SESSION['steam_personaname'],
            'email' => 'Non Renseigner'.str_random(10),
            'password' => bcrypt($_SESSION['steam_steamid']),
        ]);

        Auth::attempt(['UIDSteam' => $_SESSION['steam_steamid'], 'password' => $_SESSION['steam_steamid'] ]);

        return redirect('/');
    }
}
