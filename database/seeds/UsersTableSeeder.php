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
        // create 10 users using the user factory
        factory(App\User::class, 10)->create();
        \App\User::create([
            'name'	=> 'Priatmoko',
            'email'	=> 'priatmoko.informatics@gmail.com',
            'password'	=> password_hash('bismillaah', PASSWORD_BCRYPT)
    ]);
    }
}