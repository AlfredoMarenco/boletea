<?php

use App\Models\Refund;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->string('order');
            $table->string('platform');
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->float('amount');
            $table->string('type');
            $table->string('bank');
            $table->string('type_acount');
            $table->string('number_acount');
            $table->string('name_acount');
            $table->enum('status', [Refund::PENDING, Refund::PROCESS, Refund::COMPLETE, Refund::REJECTED])->default(Refund::PENDING);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('update_user_id');
            $table->foreign('update_user_id')->references('id')->on('users');

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
        Schema::dropIfExists('refunds');
    }
}
