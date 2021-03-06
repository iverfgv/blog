<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_pictures', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_album');
            $table->string('title',250);
            $table->text('description');
            $table->integer('order');
            $table->text('uri');
            $table->boolean('publish');
            $table->dateTime('publish_date');
            $table->text('path');
            $table->string('mime_type',20);
            $table->string('extension',20);
            $table->integer('hits');
            $table->boolean('active');
            $table->integer('register_by');
            $table->timestamp('register_date');
            $table->integer('modify_by');
            $table->dateTime('modify_date');
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
        Schema::drop('med_pictures');
    }
}
