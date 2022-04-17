<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->date('date');
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('create_user');
            $table->unsignedBigInteger('update_user')->nullable();
            $table->timestamps();

            // 外部キー制約
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('create_user')->references('id')->on('users');
            $table->foreign('update_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productions');
    }
}
