<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'resume', 'client', 'power_system','economy_money','economy_co2', 'type_id'
    ];

    /**
     * @param $file
     */
    public function saveImage($file)
    {
        $image = getImage($file);
        Storage::disk('local')->put("public/projects/{$this->id}.jpg", $image->getEncoded());
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return asset("storage/projects/{$this->id}.jpg");
    }

    /**
     * @return BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(\App\ProjectTypes::class, 'type_id');
    }
}
