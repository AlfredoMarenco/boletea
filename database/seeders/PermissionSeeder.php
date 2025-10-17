<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Create permissions with spatie/laravel-permission */

        // Permissions for Refunds
        Permission::create(['name' => 'refunds.index']);

        // Permissions for Calendar
        Permission::create(['name' => 'calendar.index']);
        Permission::create(['name' => 'calendar.index.showcase']);
        Permission::create(['name' => 'calendar.filter']);
        Permission::create(['name' => 'calendar.show']);
        Permission::create(['name' => 'calendar.show.showcase']);
    }
}
