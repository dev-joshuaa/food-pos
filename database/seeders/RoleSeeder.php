<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'cashier']);
        Role::firstOrCreate(['name' => 'kitchen']);


        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
            ]
        );

        $admin->assignRole('admin');
        $cashier = User::firstOrCreate(
            ['email' => 'cashier@example.com'],
            [
                'name' => 'Cashier',
                'password' => bcrypt('password'),
            ]
        );

        $cashier->assignRole('cashier');
        $kitchen = User::firstOrCreate(
            ['email' => 'kitchen@example.com'],
            [
                'name' => 'Kitchen',
                'password' => bcrypt('password'),
            ]
        );

        $kitchen->assignRole('kitchen');
    }
}
