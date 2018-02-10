<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'AuthViaSteam', 'UIDSteam', 'email', 'password', 'adminlevel', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role($role) {

        $role = (array)$role;
        return in_array($this->role, $role);
    }
    
    public function isSuperAdmin() {
        return $this->role === 'superadmin';
    }

    public function isAdmin() {
        return $this->role(['superadmin', 'admin']);
    }


}
