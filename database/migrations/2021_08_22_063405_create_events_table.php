<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('visible')->nullable();
            $table->string('category')->nullable();
            $table->string('image')->nullable();
            $table->string('slider')->nullable();
            $table->string('fecha')->nullable();
            $table->string('hora')->nullable();
            $table->string('recinto')->nullable();
            $table->string('fechaBusqueda')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('lugar')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('events');
    }
}
