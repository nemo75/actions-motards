<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('region_id');
            $table->string('name');
            $table->string('poste');
            $table->string('contact');
            $table->string('description');
            $table->string('email');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('date_creation');
            $table->string('site');
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
        Schema::drop('associations');
    }
}
