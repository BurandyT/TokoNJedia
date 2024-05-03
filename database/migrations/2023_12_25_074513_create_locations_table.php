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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('city', 255);
            $table->string('country', 255);
            $table->string('address', 255);
            $table->string('notes', 255)->nullable();
            $table->string('postal_code', 255);
            $table->double('latitude', 10, 6);
            $table->double('longitude', 10, 6);
            $table->uuid('locationable_id');
            $table->string('locationable_type', 255);
            $table->timestamps();

            $table->index(['locationable_id', 'locationable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
