<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class CreateAdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'is_super' => '1',
                'password' => bcrypt('12345678'),
            ];
        Admin::create($user);
    }
}
