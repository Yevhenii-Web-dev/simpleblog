<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'AdminUser',
            'email' => 'admin.admin@example.com',
            'password' => bcrypt('Pa$$w0rd!'),
        ]);

        User::factory()->create([
            'name' => 'UserUser',
            'email' => 'user.user@example.com',
            'password' => bcrypt('Pa$$w0rdUser!'),
        ]);
    }
}
