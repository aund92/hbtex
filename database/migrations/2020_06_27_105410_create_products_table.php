<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('product_name', 100);
            $table->string('image', 100);
            $table->string('image_2', 100)->nullable();
            $table->integer('category_id');
            $table->integer('brand');
            $table->integer('country_make');
            $table->decimal('origin_price', 13, 2);
            $table->decimal('price', 13, 2);
            $table->integer('discount')->nullable();
            $table->tinyInteger('pin')->nullable();
            $table->tinyInteger('hot')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index('id');
        });
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
}
