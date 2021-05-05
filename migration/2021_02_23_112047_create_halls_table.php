<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100)->nullable();
            $table->string('description',1000)->nullable();
            $table->string('image',500)->nullable();
            $table->double('price',200)->default(0);
            $table->string('hall_type',500)->nullable();
            $table->string('slug',500)->nullable();
            $table->unsignedBigInteger('hall_id');
            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('No Action')->onUpdate('No Action');
            
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
        Schema::dropIfExists('halls');
    }
}
