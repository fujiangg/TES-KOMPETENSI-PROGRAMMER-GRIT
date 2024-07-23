<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() === 0) {
            User::create([
                'role_name' => 1,
                'username' => 'siti01', 
                'email' => 'siti@gmail.com',
                'password'=>Hash::make('sitipw'),
                'created_at' => now(),
                'updated_at' => now()
                ]);
            User::create([
                'role_name' => 2,
                'username' => 'ahmad02', 
                'email' => 'ahmad@gmail.com',
                'password'=>Hash::make('ahmadpw'),
                'created_at' => now(),
                'updated_at' => now()
                ]);
                $this->command->info('Successfully seeding.');
            } else {
                $this->command->info('Users table is not empty. Skipping seeding');
            }
    }
}
