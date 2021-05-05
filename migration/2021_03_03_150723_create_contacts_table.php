<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100)->nullable();
            $table->string('mobile_no',20)->nullable();
            $table->string('email',100)->nullable();
            $table->string('service_type',100)->nullable();
            $table->string('service_name',500)->nullable();
            $table->string('time_and_date',20)->nullable();
            $table->string('message',500)->nullable();
            $table->string('footer_email',500)->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
