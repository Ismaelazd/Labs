<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_elements', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('bigLogo');
            $table->string('titreHeader');
            $table->string('titreAbout');
            $table->string('titreService');
            $table->string('titreTeam');
            $table->string('promotionTitre');
            $table->string('promotionDescription');
            $table->string('titreFeature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_elements');
    }
}
