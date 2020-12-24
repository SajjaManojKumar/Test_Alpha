<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ramens', function (Blueprint $table) {
            // Order Id
            $table->id('order_id');
            $table->string('name');
            $table->string('phoneNumber', 10);
            $table->unsignedBigInteger('S_item_id');
            $table->foreign('S_item_id')->references('item_id')->on('items')->onDelete('cascade');
            $table->unsignedBigInteger('N_item_id');
            $table->foreign('N_item_id')->references('item_id')->on('items')->onDelete('cascade');
            $table->unsignedBigInteger('T_item_id');
            $table->foreign('T_item_id')->references('item_id')->on('items')->onDelete('cascade');
            $table->integer('totalCost');
            $table->boolean('completed');
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
        Schema::dropIfExists('ramens');
    }
}
