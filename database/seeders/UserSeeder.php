<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);

        $user = User::factory()->create([
            'email' => 'superadmin@admin.com',
            'password' => bcrypt('password')
        ]);

        $user->assignRole('Super Admin');
    }
}
