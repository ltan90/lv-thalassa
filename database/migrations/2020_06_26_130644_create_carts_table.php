<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->double('total_price')->default(0);
            $table->timestamps();
        });

        Schema::create('cart_product', function($table)
        {
            $table->integer('cart_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->tinyInteger('quantity')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
        Schema::dropIfExists('cart_product');
    }
}
