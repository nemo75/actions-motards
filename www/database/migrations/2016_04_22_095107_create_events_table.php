<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('region_id');
            $table->integer('prix');
            $table->string('lieux');
            $table->date('date');
            $table->time('time');
            $table->string('description');
            $table->string('association');
            $table->string('email_asso');
            $table->string('telephone_asso');
            $table->string('site_asso');
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
        Schema::drop('events');
    }
}
