<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            
            'address' => 'C/ Libertad, 34',
            'email' => 'hello@company.com',
            'tel' => '0034 37483 2445 322',
            'ville' => '05200 Arévalo',
            'description' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. '
   
        ]);
    }
}
