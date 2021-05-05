<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',200);
            $table->string('address',500)->nullable();
            $table->text('description')->nullable();
            $table->string('experience',50)->nullable();
            $table->string('profile_img',500)->nullable();
            $table->string('background_img',500)->nullable();
            $table->string('image',500)->nullable();
            $table->string('isAvailable',5)->default('yes');
            $table->string('slug',500)->nullable();
            
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
        Schema::dropIfExists('photographers');
    }
}
