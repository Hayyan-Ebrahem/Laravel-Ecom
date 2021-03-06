<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('parent_id')->default(0);
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('cover')->nullable();
            $table->integer('status')->default(0);
            NestedSet::columns($table);
            $table->timestamps();

        });

        // Schema::table('categories', function (Blueprint $table) 
        // {
        //     $table->foreign('parent_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('categories');
        Schema::table('categories', function (Blueprint $table) {
            $table->dropNestedSet();
        });
    }
}
