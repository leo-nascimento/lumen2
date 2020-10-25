<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTypes extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title', 'slug'
    ];
}
