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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->double('amount');
            $table->date('datesave');
            $table->date('dateedit');
            $table->integer('period');
            $table->string('transaction_id');
            $table->boolean('driver');
            $table->timestamps();

            $table->foreignId('periodicite_id')->constrained('periodicites');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('vehicule_id')->constrained('vehicules');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
