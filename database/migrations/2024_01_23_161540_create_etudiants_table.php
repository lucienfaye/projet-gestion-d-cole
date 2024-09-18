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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->integer("matricule");
            $table->string("prenom");
            $table->string("nom");
            $table->string("adresse");
            $table->date("datenaiss");
            $table->string("email");
            $table->integer("numerotel");
            $table->string("filieres");
            $table->foreignId("filieres_id");
            $table->foreign("noms_filieres")
               ->references("noms_filieres")
               ->on("filieres");
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
        Schema::dropIfExists('etudiants');
    }
};
