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
            $table->unsignedBigInteger('ticket_count')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->float('amount')->nullable();
            $table->float('amount_refund')->nullable();
            $table->string('event')->nullable();
            $table->string('bank')->nullable();
            $table->string('type_acount')->nullable();
            $table->string('number_acount')->nullable();
            $table->string('name_acount')->nullable();
            $table->enum('status', [Refund::PENDING, Refund::PROCESS, Refund::COMPLETE, Refund::REJECTED])->default(Refund::PENDING);

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('update_user_id')->nullable();
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
