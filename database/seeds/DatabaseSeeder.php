<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('users')->insert([
            'email' => 'tanveer@student.sust.edu',
            'password' => bcrypt('aaaaaa'),
            'role' => 'student'
        ]);

         DB::table('users')->insert([
            'email' => 'a@student.sust.edu',
            'password' => bcrypt('aaaaaa'),
            'role' => 'doctor'
        ]);

         DB::table('users')->insert([
            'email' => 'b@student.sust.edu',
            'password' => bcrypt('aaaaaa'),
            'role' => 'doctor'
        ]);

         DB::table('users')->insert([
            'email' => 'c@student.sust.edu',
            'password' => bcrypt('aaaaaa'),
            'role' => 'doctor'
        ]);
         DB::table('users')->insert([
            'email' => 'd@student.sust.edu',
            'password' => bcrypt('aaaaaa'),
            'role' => 'doctor'
        ]);
         DB::table('users')->insert([
            'email' => 'e@student.sust.edu',
            'password' => bcrypt('aaaaaa'),
            'role' => 'doctor'
        ]);

         DB::table('users')->insert([
            'email' => 'f@student.sust.edu',
            'password' => bcrypt('aaaaaa'),
            'role' => 'doctor'
        ]);

         DB::table('students')->insert([
            'user_id' => 1,
            'name' => 'Tanveer Preom',
            'registration_no' => '2012331007',
            'date_of_birth' =>'04/14/1993',
            'dept' => 'CSE'
        ]);

         DB::table('doctors')->insert([
            'user_id' => 2,
            'name' => 'Dr Md Mahbub Ahmed',
            'designation' => 'Chief Medical Officer',
            'profile_picture'=> '/a0.jpg'
        ]);
         DB::table('doctors')->insert([
            'user_id' => 3,
            'name' => 'Dr Md Zahed Uddin(PRL)',
            'designation' => 'Additional Chief Medical Officer',
            'profile_picture'=> '/a1.jpg'
        ]);
         DB::table('doctors')->insert([
            'user_id' => 4,
            'name' => 'Dr Syeda Shamim Ara',
            'designation' => 'Deputy Chief Medical Officer',
            'profile_picture'=> '/a2.jpg'
        ]);
         DB::table('doctors')->insert([
            'user_id' => 5,
            'name' => 'Dr Krishnapada Acharjee',
            'designation' => 'Deputy Chief Medical Officer',
            'profile_picture'=> '/a3.jpg'
        ]);
         DB::table('doctors')->insert([
            'user_id' => 6,
            'name' => 'Dr Masraba Sultana',
            'designation' => 'Senior Medical Officer',
            'profile_picture'=> '/a4.jpg'
        ]);
         DB::table('doctors')->insert([
            'user_id' => 7,
            'name' => 'Dr Refat Rasul Srejon',
            'designation' => 'Senior Medical Officer',
            'profile_picture'=> '/a5.jpg'
        ]);

         DB::table('timeslot')->insert([
            'time_slot' => 7
        ]);
    }
}
