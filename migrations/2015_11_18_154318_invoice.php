<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Invoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_client');
            $table->integer('status');
            $table->string('facid')->nullable();
            $table->timestamp('date_creation');
            $table->timestamp('payed_at');
            $table->integer('fk_user')->nullable();
            $table->integer('type');
            $table->string('note_public')->nullable();
            $table->string('note_private')->nullable();
            $table->decimal('bi',5,2);
            $table->decimal('vat',5,2);
            $table->decimal('total',5,2);
            $table->integer('print_model')->nullable();
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
