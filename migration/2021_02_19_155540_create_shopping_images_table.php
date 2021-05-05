<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('default.jpg');
            $table->unsignedBigInteger('shopping_id');
            $table->foreign('shopping_id')->references('id')->on('shoppings')->onDelete('No Action')->onUpdate('No Action');
            
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
        Schema::dropIfExists('shopping_images');
    }
}
