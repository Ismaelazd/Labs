<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            
            'article_id' => 1,
            'user_id' => 4,
            'commentaire' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.'
            
        ]);
        DB::table('commentaires')->insert([
            
            'article_id' => 1,
            'user_id' => 3,
            'commentaire' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.'
            
        ]);
        DB::table('commentaires')->insert([
            
            'article_id' => 2,
            'user_id' => 2,
            'commentaire' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.'
            
        ]);
        DB::table('commentaires')->insert([
            
            'article_id' => 3,
            'user_id' => 2,
            'commentaire' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.'
            
        ]);
        DB::table('commentaires')->insert([
            
            'article_id' => 4,
            'user_id' => 3,
            'commentaire' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.'
            
        ]);
        DB::table('commentaires')->insert([
            
            'article_id' => 4,
            'user_id' => 2,
            'commentaire' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.'
            
        ]);
        DB::table('commentaires')->insert([
            
            'article_id' => 5,
            'user_id' => 4,
            'commentaire' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.'
            
        ]);
        DB::table('commentaires')->insert([
            
            'article_id' => 5,
            'user_id' => 2,
            'commentaire' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.'
            
        ]);
    }
}
