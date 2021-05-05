<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParloursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parlours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30);
            $table->text('description')->nullable();
            $table->string('address',50)->nullable();
            $table->string('mobile_no',20)->nullable();
            $table->string('email',200)->nullable();
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
        Schema::dropIfExists('parlours');
    }
}
