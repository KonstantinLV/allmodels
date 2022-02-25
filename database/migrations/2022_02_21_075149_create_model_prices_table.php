<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_id');
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');
            $table->char('user_id', 26);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('price');
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
        Schema::dropIfExists('model_prices');
    }
}
