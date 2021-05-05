<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_books', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->string('username',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('mobile_no',100)->nullable();
            $table->string('start',40)->nullable();
            $table->string('end',40)->nullable();
          //  $table->string('event_type',100)->nullable();
            $table->string('package_name',100)->nullable();
            $table->string('message',500)->nullable();
          $table->unsignedBigInteger('event_page_id');
          $table->foreign('event_page_id')->references('id')->on('event_pages')->onDelete('No Action')->onUpdate('No Action');
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
        Schema::dropIfExists('package_books');
    }
}
