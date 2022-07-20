<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name_section');
            $table->string('name_real');
            $table->unsignedBigInteger('capacity');
            $table->boolean('type')->default(0);
            $table->unsignedBigInteger('cols')->nullable();
            $table->unsignedBigInteger('rows')->nullable();
            /* $table->unsignedBigInteger('price_category_id')->nullable();
            $table->foreign('price_category_id')->references('id')->on('price_categories'); */
            $table->foreignId('price_category_id')->nullable()->constrained();
            $table->foreignId('map_id')->constrained();
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
        Schema::dropIfExists('sections');
    }
}
