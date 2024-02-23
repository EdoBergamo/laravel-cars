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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 30);
            $table->string('modello', 40);
            $table->string('alimentazione', 15);
            $table->integer('prezzo');
            $table->tinyInteger('num_porte');
            $table->integer('chilometri')->nullable();
            $table->string('colore');
            $table->year('anno');
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
        Schema::dropIfExists('cars');
    }
};
