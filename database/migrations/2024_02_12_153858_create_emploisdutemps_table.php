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
        Schema::create('emploisdutemps', function (Blueprint $table) {
            $table->id();
            $table->dateTime('horaire');
            $table->foreign("matricule")
               ->references("matricule")
               ->on("professeurs");
            $table->foreign("nom")
               ->references("nom")
               ->on("professeurs");
            $table->foreign("prenom")
               ->references("prenom")
               ->on("professeurs");
            $table->foreign("noms_filieres")
               ->references("noms_filieres")
               ->on("filieres");
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
        Schema::dropIfExists('emploisdutemps');
    }
};
