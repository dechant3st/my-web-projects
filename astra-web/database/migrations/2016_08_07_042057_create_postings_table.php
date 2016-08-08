<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostingsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postings', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->integer('file_id')->unsigned();
            $table->foreign('file_id')->references('id')->on('fileentries');
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
        Schema::drop('postings');
    }
}
