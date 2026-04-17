<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $team = Team::factory()->create([
            'name' => 'Secretaria da Cultura do Ceará',
            'slug' => 'secult',
            'email' => 'cotigd@gmail.com',
            'phone' => '(85) 3105-9069'
        ]);

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        $team->users()->attach($user->id);
    }
}
