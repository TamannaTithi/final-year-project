<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographyBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photography_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('mobile_no',20)->default();
            $table->string('email',100)->nullable();
            $table->string('package_name',100)->nullable();
            $table->string('start',20)->nullable();
            $table->string('end',20)->nullable();
            $table->string('message',500)->nullable();
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
        Schema::dropIfExists('photography_books');
    }
}
