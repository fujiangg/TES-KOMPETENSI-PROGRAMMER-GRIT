<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Role::count() === 0) {
            Role::create([
                'name' => 'Admin', 
            ]);

            Role::create([
                'name' => 'Dokter', 
            ]);

            $this->command->info('Successfully seeding.');
        } else {
            $this->command->info('Users table is not empty. Skipping seeding');
        }
    }
}
