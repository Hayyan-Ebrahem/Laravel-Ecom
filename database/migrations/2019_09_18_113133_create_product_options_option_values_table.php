<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOptionsOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_options_option_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('option_value_id');
            $table->foreign('option_value_id')->references('id')->on('option_values');
            $table->unsignedBigInteger('product_option_id');
            $table->foreign('product_option_id')->references('id')->on('product_options');
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_options_option_values');
    }
}
