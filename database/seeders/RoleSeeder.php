<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::create(['name' => 'Super-Admin']);
        $superAdmin->givePermissionTo(Permission::all());

        $userRole = Role::create(['name' => 'User']);
        $userRole->givePermissionTo([
            'view_wallet',
            'create_wallet',
            'update_wallet',
            'delete_wallet'
        ]);
    }
}
