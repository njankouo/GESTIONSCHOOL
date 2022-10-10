<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('telephone1')->nullable();
            $table->string('telephone2')->nullable();
            $table->string('sexe');
            $table->date('date_naissance');
            $table->string('lieu_naissance')->nullable();
            $table->string('status')->nullable();
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->string('profession_pere');
            $table->string('profession_mere');
            $table->string('telephone_pere');
             $table->string('telephone_mere');
            $table->string('image')->nullable();
            $table->string('estInscrit')->nullable();
            $table->foreignId('salle_id')->nullable()->constrained('salles');
            $table->foreignId('cycle_id')->constrained('cycles')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('annee_id')->constrained('annee_scolaires')->onDelete('cascade')->onUpdate('cascade')->nullable();

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
        Schema::dropIfExists('eleves');
    }
}
