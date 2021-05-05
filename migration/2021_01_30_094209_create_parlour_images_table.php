<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParlourImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parlour_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('default.jpg');
            $table->unsignedBigInteger('parlour_id');
            $table->foreign('parlour_id')->references('id')->on('parlours')->onDelete('No Action')->onUpdate('No Action');
           
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
        Schema::dropIfExists('parlour_images');
    }
}
