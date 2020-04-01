<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id')->unsigned();
            $table->string('family_name');
            $table->string('first_name');
            $table->string('family_name_eng');
            $table->string('first_name_eng');
            $table->string('base');
            $table->string('email');
            $table->text('performance', 100);
            $table->string('image', 100);
            $table->string('twitter', 1024)->nullable();
            $table->string('facebook', 1024)->nullable();
            $table->string('instagram', 1024)->nullable();
            $table->text('message');
            $table->timestamps();
            $table
              ->foreign('post_id')
              ->references('id')
              ->on('posts')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}