<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('description', 255);
            $table->string('condition', 255);
            $table->unsignedBigInteger('merchant_id');
            $table->unsignedBigInteger('product_category_id');
            $table->timestamps();

            $table->foreign('merchant_id')->references('id')->on('merchants')->onDelete('cascade')->collation('utf8mb4_unicode_ci');
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade')->collation('utf8mb4_unicode_ci');
        });

        DB::statement('ALTER TABLE products ENGINE = InnoDB');
        DB::statement('ALTER TABLE merchants ENGINE = InnoDB');
        DB::statement('ALTER TABLE product_categories ENGINE = InnoDB');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
