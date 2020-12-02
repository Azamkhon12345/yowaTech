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
            $table->string("name",200);
            $table->text("description");
            $table->integer("price");
            $table->integer("quantity")->nullable();
            $table->boolean("visible")->default(1);
            $table->string("category",255)->nullable();
            $table->string("subcategory",255)->nullable();
            $table->string("prime_status",255)->nullable();
            $table->string("main_image",255)->nullable();
            $table->json("image")->nullable();
            $table->integer("rating")->nullable();
            $table->json("size")->nullable();
            $table->json("color")->nullable();

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
        Schema::dropIfExists('products');
    }
}
