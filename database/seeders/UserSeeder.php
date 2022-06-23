<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin'
        ]);
        
        User::create([
            'name' => 'Alfredo Gonzalez Marenco',
            'email' => 'alfredomarenco@boletea.com',
            'password' => bcrypt('marencos6359:D'),
        ])->assignRole('admin');
    }
}
