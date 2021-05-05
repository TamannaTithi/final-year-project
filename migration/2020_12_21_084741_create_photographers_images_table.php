<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographersImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographers_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('default.jpg');
            $table->unsignedBigInteger('photographer_id');
            $table->foreign('photographer_id')->references('id')->on('photographers')->onDelete('No Action')->onUpdate('No Action');
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
        Schema::dropIfExists('photographers_images');
    }
}
