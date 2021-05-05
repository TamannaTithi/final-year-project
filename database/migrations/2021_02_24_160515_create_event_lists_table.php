<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_lists', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('mobile_no',100)->nullable();
            $table->string('start',20)->nullable();
            $table->string('end',20)->nullable();
            $table->string('event_type',100)->nullable();
            $table->string('package_name',500)->nullable();
            $table->string('message',500)->nullable();
   
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
        Schema::dropIfExists('event_lists');
    }
}
