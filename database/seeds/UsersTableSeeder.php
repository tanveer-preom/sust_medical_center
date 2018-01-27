<?php

use App\User;
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
        User::create([
            'email' => 'admin@sust.edu',
            'password' => bcrypt('aaaaaa'),
            'role' => 'admin'
        ]);
    }
}
