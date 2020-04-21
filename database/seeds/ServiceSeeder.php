<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([  
            'icon_id' => 1,  
            'titre' => 'GET IN THE LAB',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);    
        DB::table('services')->insert([  
            'icon_id' => 2,  
            'titre' => 'PROJECTS ONLINE            ',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon_id' => 3,  
            'titre' => 'SMART MARKETING            ',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon_id' => 4,  
            'titre' => 'SOCIAL MEDIA',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon_id' => 5,  
            'titre' => 'BRAINSTORMING',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon_id' => 6,  
            'titre' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon_id' => 7,  
            'titre' => 'RESPONSIVE',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon_id' => 8,  
            'titre' => 'RETINA READY',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);    
        DB::table('services')->insert([  
            'icon_id' => 9,  
            'titre' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);    
        DB::table('services')->insert([  
            'icon_id' => 6,  
            'titre' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]); 
        DB::table('services')->insert([  
            'icon_id' => 2,  
            'titre' => 'PROJECTS ONLINE            ',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]); 
        DB::table('services')->insert([  
            'icon_id' => 1,  
            'titre' => 'GET IN THE LAB',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',  
        ]);   
        DB::table('services')->insert([  
            'icon_id' => 6,  
            'titre' => 'DOCUMENTED',  
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',   
        ]);
    }
}
