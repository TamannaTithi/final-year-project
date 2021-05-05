<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventVenueBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('event_venue_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',100);
            $table->string('mobile_no',20)->default();
            $table->string('email',100)->nullable();
           
            $table->string('eventvenue_name',200)->nullable();
            $table->string('start',20)->nullable();
            $table->string('end',20)->nullable();
            $table->double('amount',200)->default();
            $table->string('message',500)->nullable();
           $table->unsignedBigInteger('event_venue_id');
           $table->foreign('event_venue_id')->references('id')->on('event_venues')->onDelete('No Action')->onUpdate('No Action');
           
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
        Schema::dropIfExists('event_venue_books');
    }
    
}
