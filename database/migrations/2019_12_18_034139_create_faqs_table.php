<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('answer')->nullable(true);
            $table->unsignedInteger('user_asked_id');
            $table->unsignedInteger('user_answered_id')->nullable();
            $table->boolean('isFavorite')->default(false);
            $table->timestamps();

            $table->foreign('user_asked_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_answered_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
