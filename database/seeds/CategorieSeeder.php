<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            
            'categorie' => 'Animaux',
            
        ]);
        DB::table('categories')->insert([
            
            'categorie' => 'Art',
            
        ]);
        DB::table('categories')->insert([
            
            'categorie' => 'Paysage',
            
        ]);
        DB::table('categories')->insert([
            
            'categorie' => 'Plats',
            
        ]);
        DB::table('categories')->insert([
            
            'categorie' => 'Alimentation',
            
        ]);
        DB::table('categories')->insert([
            
            'categorie' => 'Technologie',
            
        ]);
        DB::table('categories')->insert([
            
            'categorie' => 'Culture',
            
        ]);
        DB::table('categories')->insert([
            
            'categorie' => 'Santé',
            
        ]);
    }
}
