<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PronosticDetails extends Model
{
    protected $guarded = [];

    public function team():BelongsTo
    {
        return $this->belongsTo(NBATeams::class);
    }

    public function pronostic(): BelongsTo
    {
        return $this->belongsTo(Pronostic::class);
    }
}
