<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'name' => 'Quentin',
            'email' => 'quentin.bisiaux@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'isAdmin' => now(),
            'city' => 'Lyon',
            'birthday' => '1992-06-17',
            'remember_token' => Str::random(10),
        ]);
        $this->call([
            NBATeamsSeeder::class
        ]);
    }
}
