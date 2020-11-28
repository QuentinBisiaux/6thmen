<?php


namespace Database\Seeders;


use App\Models\NBATeams;
use Illuminate\Database\Seeder;

class NBATeamsSeeder extends Seeder
{

    private $teams = [
        [
            'name' => 'Boston Celtics',
            'tricode' => 'BOS',
            'conference' => 'East',
            'division' => 'Atlantic',
            'NBAId' => 1610612738
        ],
        [
            'name' => 'Brooklyn Nets',
            'tricode' => 'BKN',
            'conference' => 'East',
            'division' => 'Atlantic',
            'NBAId' => 1610612751
        ],
        [
            'name' => 'New York Knicks',
            'tricode' => 'NYK',
            'conference' => 'East',
            'division' => 'Atlantic',
            'NBAId' => 1610612752
        ],
        [
            'name' => 'Toronto Raptors',
            'tricode' => 'TOR',
            'conference' => 'East',
            'division' => 'Atlantic',
            'NBAId' => 1610612761
        ],
        [
            'name' => 'Philadelphia 76ers',
            'tricode' => 'PHI',
            'conference' => 'East',
            'division' => 'Atlantic',
            'NBAId' => 1610612755
        ],
        [
            'name' => 'Chicago Bulls',
            'tricode' => 'CHI',
            'conference' => 'East',
            'division' => 'Central',
            'NBAId' => 1610612741
        ],
        [
            'name' => 'Cleveland Cavaliers',
            'tricode' => 'CLE',
            'conference' => 'East',
            'division' => 'Central',
            'NBAId' => 1610612739
        ],
        [
            'name' => 'Detroit Pistons',
            'tricode' => 'DET',
            'conference' => 'East',
            'division' => 'Central',
            'NBAId' => 1610612765
        ],
        [
            'name' => 'Indiana Pacers',
            'tricode' => 'IND',
            'conference' => 'East',
            'division' => 'Central',
            'NBAId' => 1610612754
        ],
        [
            'name' => 'Milwaukee Bucks',
            'tricode' => 'MIL',
            'conference' => 'East',
            'division' => 'Central',
            'NBAId' => 1610612749
        ],
        [
            'name' => 'Atlanta Hawks',
            'tricode' => 'ATL',
            'conference' => 'East',
            'division' => 'Southeast',
            'NBAId' => 1610612737
        ],
        [
            'name' => 'Charlotte Hornets',
            'tricode' => 'CHA',
            'conference' => 'East',
            'division' => 'Southeast',
            'NBAId' => 1610612766
        ],
        [
            'name' => 'Miami Heat',
            'tricode' => 'MIA',
            'conference' => 'East',
            'division' => 'Southeast',
            'NBAId' => 1610612748
        ],
        [
            'name' => 'Orlando Magic',
            'tricode' => 'ORL',
            'conference' => 'East',
            'division' => 'Southeast',
            'NBAId' => 1610612753
        ],
        [
            'name' => 'Washington Wizards',
            'tricode' => 'WAS',
            'conference' => 'East',
            'division' => 'Southeast',
            'NBAId' => 1610612764
        ],
        [
            'name' => 'Denver Nuggets',
            'tricode' => 'DEN',
            'conference' => 'West',
            'division' => 'Northwest',
            'NBAId' => 1610612743
        ],
        [
            'name' => 'Minnesota Timberwolves',
            'tricode' => 'MIN',
            'conference' => 'West',
            'division' => 'Northwest',
            'NBAId' => 1610612750
        ],
        [
            'name' => 'Oklahoma City Thunder',
            'tricode' => 'OKC',
            'conference' => 'West',
            'division' => 'Northwest',
            'NBAId' => 1610612760
        ],
        [
            'name' => 'Portland Trail Blazers',
            'tricode' => 'POR',
            'conference' => 'West',
            'division' => 'Northwest',
            'NBAId' => 1610612757
        ],
        [
            'name' => 'Utah Jazz',
            'tricode' => 'UTA',
            'conference' => 'West',
            'division' => 'Northwest',
            'NBAId' => 1610612762
        ],
        [
            'name' => 'Golden State Warriors',
            'tricode' => 'GSW',
            'conference' => 'West',
            'division' => 'Pacific',
            'NBAId' => 1610612744
        ],
        [
            'name' => 'Los Angeles Clippers',
            'tricode' => 'LAC',
            'conference' => 'West',
            'division' => 'Pacific',
            'NBAId' => 1610612746
        ],
        [
            'name' => 'Los Angeles Lakers',
            'tricode' => 'LAL',
            'conference' => 'West',
            'division' => 'Pacific',
            'NBAId' => 1610612747
        ],
        [
            'name' => 'Phoenix Suns',
            'tricode' => 'PHX',
            'conference' => 'West',
            'division' => 'Pacific',
            'NBAId' => 1610612756
        ],
        [
            'name' => 'Sacramento Kings',
            'tricode' => 'SAC',
            'conference' => 'West',
            'division' => 'Pacific',
            'NBAId' => 1610612758
        ],
        [
            'name' => 'Dallas Mavericks',
            'tricode' => 'DAL',
            'conference' => 'West',
            'division' => 'Southwest',
            'NBAId' => 1610612742
        ],
        [
            'name' => 'Houston Rockets',
            'tricode' => 'HOU',
            'conference' => 'West',
            'division' => 'Southwest',
            'NBAId' => 1610612745
        ],
        [
            'name' => 'Memphis Grizzlies',
            'tricode' => 'MEN',
            'conference' => 'West',
            'division' => 'Southwest',
            'NBAId' => 1610612763
        ],
        [
            'name' => 'New Orleans Pelicans',
            'tricode' => 'NOP',
            'conference' => 'West',
            'division' => 'Southwest',
            'NBAId' => 1610612740
        ],
        [
            'name' => 'San Antonio Spurs',
            'tricode' => 'SAS',
            'conference' => 'West',
            'division' => 'Southwest',
            'NBAId' => 1610612759
        ],
    ];

    public function run()
    {
        foreach ($this->teams as $team) {
            NBATeams::create($team);
        }
    }
}
