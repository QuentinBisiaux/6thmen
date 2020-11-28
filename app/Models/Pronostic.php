<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pronostic extends Model
{
    /** @var string */
    protected $table = 'NBATeams';

    /** @var bool */
    public $timestamps = false;

    protected $guarded = [];
}
