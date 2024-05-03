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
        Schema::create('electric_transaction_details', function (Blueprint $table) {
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('electric_token');
            $table->string('subscription_number', 255);
            $table->integer('nominal');
            $table->timestamps();

            $table->primary(['transaction_id', 'electric_token']);

            $table->foreign('transaction_id')->references('id')->on('transaction_headers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electric_transaction_details');
    }
};
