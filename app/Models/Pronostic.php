<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pronostic extends Model
{

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function initDetails(): void
    {
        foreach (NBATeams::all() as $team) {
            $details = new PronosticDetails(['wins' => 0]);
            $this->details()->save($details);
            $team->pronosticDetails()->save($details);
        }
    }

    public function details(): HasMany
    {
        return $this->hasMany(PronosticDetails::class);
    }
}
