<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acteur', function (Blueprint $table) {
            $table->string('user_login')->index();
            $table->unsignedInteger('role_id')->index();
            $table->unsignedInteger('projet_id')->index();



            $table->primary(['user_login', 'role_id', 'projet_id']);
            $table->foreign('user_login')->references('login')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acteur');
    }
}
