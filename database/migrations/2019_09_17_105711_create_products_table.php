<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->unsignedBigInteger('brand_id');
            $table->string('sku');
            $table->string('name');
            $table->string('stock_code')->nullable(); //It should be a valid code in inventory module.
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->boolean('active')->default(true);
            $table->boolean('availability')->default(true);
            $table->string('reviews')->nullable();
            $table->integer('rating')->nullable();

            $table->timestamps();

            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
