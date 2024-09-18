<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->integer("matricule");
            $table->string("prenom");
            $table->string("nom");
            $table->string("adresse");
            $table->date("datenaiss");
            $table->string("email");
            $table->integer("numerotel");
            $table->string("modules");
            $table->foreignId("modules_id");
            $table->foreign("nom_modules")
               ->references("nom_modules")
               ->on("modules");
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
        Schema::dropIfExists('professeurs');
    }
};
