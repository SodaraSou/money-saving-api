<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        // Wallet Permission
        Permission::create(['name' => 'view_wallet']);
        Permission::create(['name' => 'create_wallet']);
        Permission::create(['name' => 'update_wallet']);
        Permission::create(['name' => 'delete_wallet']);
        // User Permission
        Permission::create(['name' => 'view_users']);
        Permission::create(['name' => 'create_users']);
        Permission::create(['name' => 'update_users']);
        Permission::create(['name' => 'delete_users']);
        // Transaction Permission
        Permission::create(['name' => 'view_transaction']);
        Permission::create(['name' => 'create_transaction']);
        Permission::create(['name' => 'update_transaction']);
        Permission::create(['name' => 'delete_transaction']);
    }
}
