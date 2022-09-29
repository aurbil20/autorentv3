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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation');
            $table->string('image');
            $table->integer('numberplace');
            $table->integer('numberdoor');
            $table->double('conso');
            $table->string('gearbox');
            $table->boolean('climatisation');
            $table->string('etat');
            $table->timestamps();

            $table->foreignId('agence_id')->constrained('agences');
            $table->foreignId('modele_vehicule_id')->constrained('modele_vehicules');
            $table->foreignId('type_vehicule_id')->constrained('type_vehicules');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
};
