<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle_projet')->unique();
            $table->string('code_projet');
            $table->unsignedInteger('meteo_id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('etat_id');
            $table->longtext('description');
            $table->integer('avancement');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();



            $table->foreign('meteo_id')->references('id')->on('meteos')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('etat_id')->references('id')->on('etats')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
