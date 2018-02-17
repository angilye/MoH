<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class imageGallery extends Model
{
    protected $table = 'image_gallery';


    protected $fillable = ['title','image'];
}
