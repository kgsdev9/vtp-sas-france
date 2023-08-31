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
            $table->string('name');
            $table->string('slug');
            $table->string('statut')->default('disponible');
            $table->string('city')->default('inconnu');
            $table->string('country');
            $table->integer('price');
            $table->text('description');
            $table->string('cover_image');
            $table->string('img_two');
            $table->string('img_three');
            $table->string('img_for');
            $table->tinyInteger('popular')->nullable();
            $table->tinyInteger('tendance')->nullable();
            $table->integer('quantity');
            $table->integer('high_price')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('seller_id');
            $table->foreign('category_id')->on('categories')->references('id') ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('seller_id')->on('sellers')->references('id') ->onUpdate('cascade')
            ->onDelete('cascade');
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
