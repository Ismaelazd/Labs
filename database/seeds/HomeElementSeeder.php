<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_elements')->insert([  
            'logo' => 'logo.png',
            'bigLogo' => 'big-logo.png',
            'titreHeader' => 'Get your freebie template now!',
            'titreAbout' => 'Get in [the Lab] and discover the world',
            'titreService' => 'Get in [the Lab] and see the services',
            'titreTeam' => 'Get in [the Lab] and  meet the team',
            'promotionTitre' => 'Are you ready to stand out?',
            'promotionDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
            'titreFeature' => 'Get in [the Lab] and  discover the world',
         ]); 
    }
}
