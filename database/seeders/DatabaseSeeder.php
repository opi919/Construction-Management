<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::factory()->create([
            'name' => 'super_admin'
        ]);
        Role::factory()->create([
            'name' => 'expert'
        ]);

        Role::factory()->create([
            'name' => 'company'
        ]);
        Role::factory()->create([
            'name' => 'agent'
        ]);
        Role::factory()->create([
            'name' => 'user'
        ]);

        User::factory()->create([
            'name' => 'Momen Khandoker',
            'email' => 'khandokermomen919@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 1,
        ]);
    }
}
