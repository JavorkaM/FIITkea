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
            $table->id();
            $table->string('name');
            $table->double('price', 8, 2);
            $table->integer('amount');
            $table->text('description');
            $table->timestamps();
            $table->string('image');
            $table->boolean('featured')->default(false);
            $table->unsignedBigInteger('color');
            $table->unsignedBigInteger('material');
            $table->unsignedBigInteger('category')->nullable();
            
            $table->foreign('color')->references('id')->on('colors');
            $table->foreign('material')->references('id')->on('materials');
            $table->foreign('category')->references('id')->on('categories');
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
