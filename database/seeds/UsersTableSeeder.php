<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'UIDSteam' => 'a remplir',
            'name' => 'angilye',
            //'email' => str_random(10).'@gmail.com',
            'email' => 'admin@hot.fr',
            'password' => bcrypt('admin'),
            'role' => 'superadmin',
            'adminlevel' => '0',
        ]);
        // DB::table('users')->insert([
        //     'name' => str_random(10),
        //     'email' => str_random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);
    }
}
