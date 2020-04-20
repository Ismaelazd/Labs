<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            
            'role' => 'Admin',
            
        ]);
        
       
        DB::table('roles')->insert([
            
            'role' => 'Webmaster',
            
        ]);
        
       
        DB::table('roles')->insert([
            
            'role' => 'CEO',
            
        ]);
        
       
        DB::table('roles')->insert([
            
            'role' => 'Developper',
            
        ]);
        
       
        DB::table('roles')->insert([
            
            'role' => 'Designer',
            
        ]);
        
       
        DB::table('roles')->insert([
            
            'role' => 'Rédacteur',
            
        ]);
        
       
        DB::table('roles')->insert([
            
            'role' => 'Utilisateur',
            
        ]);
        
       
        
    }
}
