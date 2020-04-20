<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); 
        User::truncate();
        DB::table('users')->insert([
            
            'name' => 'Isma',
            'email' => 'leamssi39@gmail.com',
            'password' => Hash::make('azertyuiop'),
            'role_id' => 1,
            'image' => 'avatar.jpeg'
   
        ]);
        DB::table('users')->insert([
            
            'name' => 'Angela',
            'email' => 'angela@gmail.com',
            'password' => Hash::make('azertyuiop'),
            'role_id' => 3,
            'image' => '/team/2.jpg'
   
        ]);
        DB::table('users')->insert([
            
            'name' => 'Anna',
            'email' => 'anna@gmail.com',
            'password' => Hash::make('azertyuiop'),
            'role_id' => 4,
            'image' => '/team/1.jpg'
   
        ]);
        DB::table('users')->insert([
            
            'name' => 'Jack',
            'email' => 'jack@gmail.com',
            'password' => Hash::make('azertyuiop'),
            'role_id' => 5,
            'image' => '/team/3.jpg'
   
        ]);
    }
}
