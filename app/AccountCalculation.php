<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountCalculation extends Model
{
    protected $table = 'account_calculation';

    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * TiLE TYPE
     */
    const TILE_TYPE_PLANE = 1;
}
