<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('engine_id');
            $table->unsignedBigInteger('engine_per');
            $table->unsignedBigInteger('airbag_id');
            $table->unsignedBigInteger('airbag_per');
            $table->unsignedBigInteger('tire_id');
            $table->unsignedBigInteger('tire_per');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
