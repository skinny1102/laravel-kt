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
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id_product');
            $table->string('name_product')->nullable();
            $table->integer('price')->nullable();
            $table->integer('quanlity')->nullable();
            $table->string('title')->nullable();
            $table->longText('sumary')->nullable();
            $table->longText('content')->nullable();
            $table->string('image_product')->nullable();           
            $table->integer('status')->nullable();
            $table->integer('id_category')->nullable();
            $table->integer('id_suplier')->nullable();
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
        Schema::dropIfExists('product');
    }
};
