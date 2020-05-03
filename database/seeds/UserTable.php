<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin'),
        ]);

        $panitia = User::create([
            'name' => 'Panitia',
            'email' => 'panitia@mail.com',
            'password' => bcrypt('panitia'),
        ]);

        $peserta = User::create([
            'name' => 'Peserta',
            'email' => 'peserta@mail.com',
            'password' => bcrypt('peserta'),
        ]);

        $admin->assignRole('Administrator');
        $panitia->assignRole('Panitia');
        $peserta->assignRole('Peserta');
    }
}
