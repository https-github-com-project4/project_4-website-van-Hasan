<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('emailadres');
            $table->integer('phone')->length(10);
            $table->string('address');
            $table->string('zipcode');

            $table->unsignedBigInteger("status_id")->nullable();
            $table->foreign('status_id')->references('id')->on('states');

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
        Schema::dropIfExists('order');
    }
}
