<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'username'      => 'Admin Account',
            'first_name'    => 'Maynard',
            'last_name'     => 'Magallen',
            'contact_number'=> '09952247046',
            'email'         => 'maynardmagallen@gmail.com',
            'password'      => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];

        $new_user = \App\Models\User::create($user);

        // Put role here

        $new_user->assignRole('admin');
    }
}
