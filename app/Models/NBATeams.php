<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NBATeams extends Model
{
    /** @var string */
    protected $table = 'NBATeams';

    /** @var bool */
    public $timestamps = false;

    protected $guarded = [];

    /** @return array<string, Team> */
    public static function getByConference(): array
    {
        $teams = NBATeams::orderBy('conference', 'DESC')->orderBy('name')->get();
        $teamsByConference = [];
        foreach ($teams as $team) {
            $teamsByConference[$team->conference][] = $team;
        }
        return $teamsByConference;
    }


}
