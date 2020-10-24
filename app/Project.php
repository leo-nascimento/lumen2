<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Project extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'resume', 'client', 'power_system','economy_money','economy_co2'
    ];

    /**
     * @param $file
     */
    public function saveImage($file)
    {
        $image = getImage($file);
        Storage::disk('local')->put("public/projects/{$this->id}.jpg", $image->getEncoded());
    }
}
