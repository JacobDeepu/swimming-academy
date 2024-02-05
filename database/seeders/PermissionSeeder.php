<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayOfPermissionNames = [
            'view a role', 'create a role', 'update a role', 'delete a role',
            'view a user', 'create a user', 'update a user', 'delete a user',
            'view a pool', 'create a pool', 'update a pool', 'delete a pool',
            'view a schedule', 'create a schedule', 'update a schedule', 'delete a schedule',
            'view a batch', 'create a batch', 'update a batch', 'delete a batch',
        ];
        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });

        Permission::insert($permissions->toArray());
    }
}
