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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname')->nullable();
            $table->string('name_manager')->nullable();
            $table->string('fname_manager')->nullable();
            $table->string('email')->unique();
            $table->string('sex')->nullable();
            $table->string('old')->nullable();
            $table->string('numtel')->nullable();
            $table->integer('numifu')->nullable();
            $table->string('structure')->nullable();
            $table->double('solde')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
