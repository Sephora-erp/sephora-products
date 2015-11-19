<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
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
            $table->integer('type');
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('vat', 5, 2);
            $table->decimal('price', 5, 2);
            $table->string('weigth')->nullable();
            $table->string('d_x')->nullable();
            $table->string('d_y')->nullable();
            $table->string('d_z')->nullable();
            $table->decimal('provider_price', 5, 2)->nullable();
            $table->integer('fk_user');
            //Timestamps
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
