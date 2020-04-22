<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'prenom' => 'Michael',
            'nom' => 'Smith',
            'img' => 'avatar/01.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'aaaaLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'prenom' => 'Aneke',
            'nom' => 'Smith',
            'img' => 'avatar/02.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'prenom' => 'Jean',
            'nom' => 'Smith',
            'img' => 'avatar/03.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'prenom' => 'Luc',
            'nom' => 'Smith',
            'img' => 'avatar/01.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'prenom' => 'Momo',
            'nom' => 'Smith',
            'img' => 'avatar/02.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'prenom' => 'Rachid',
            'nom' => 'Smith',
            'img' => 'avatar/03.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'prenom' => 'Khalid',
            'nom' => 'Smith',
            'img' => 'avatar/01.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'prenom' => 'Vanessa',
            'nom' => 'Smith',
            'img' => 'avatar/02.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);
        DB::table('testimonials')->insert([
            'prenom' => 'Frank',
            'nom' => 'Smith',
            'img' => 'avatar/03.jpg',
            'role' => 'CEO',
            'company' => 'Company',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        ]);

    }
}
