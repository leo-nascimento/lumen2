<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Post extends Model
{
    protected $fillable = array('created_at');

    protected $appends = array('date_post');

    /**
     * @return string
     */
    public function getDatePostAttribute()
    {
        try {
            return $this->created_at->formatLocalized('%d/%m/%Y às %H:%m');
        } catch (\Exception $e) {
            Log::error($e);
            return Carbon::now()->formatLocalized('%d/%m/%Y às %H:%m');
        }
    }
}
