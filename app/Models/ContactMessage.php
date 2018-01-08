<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['name', 'email', 'raison', 'importance', 'url', 'message', 'validation', 'progression'];
}
