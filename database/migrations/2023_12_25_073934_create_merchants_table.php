<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 255);
            $table->string('phone', 255);
            $table->string('status', 255)->default('active');
            $table->string('image', 255);
            $table->string('catch_phrase', 255);
            $table->string('process_time', 255)->nullable();
            $table->string('operational_time', 255)->nullable();
            $table->string('banner_image', 255);
            $table->string('description', 255);
            $table->text('full_description');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchants');
    }
};
