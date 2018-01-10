<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ContactMessage extends Model
{
    protected $fillable = ['name', 'email', 'raison', 'importance', 'url', 'message', 'validation', 'progression'];

    public function scopeValidateBug(Builder $query)
    {
        $query->where('validation','=',1);
    }
}
