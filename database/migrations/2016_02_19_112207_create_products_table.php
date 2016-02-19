<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('sku');
            $table->index('sku');
            $table->integer('category_id')->nullable();
            $table->string('name');
            $table->decimal('price', 20, 2);
            $table->index('price');
            $table->string('slug');
            $table->text('description');
            $table->binary('image');
            $table->boolean('published')->default(0);
            $table->float('rating_cache', 2, 1)->default(0);
            $table->integer('rating_count')->default(0);
            $table->json('options')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
