<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InvoiceLines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('invoice_line', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product');
            $table->string('description');
            $table->integer('fk_product');
            $table->integer('fk_invoice');
            $table->decimal('bi',5,2);
            $table->integer('qty');
            $table->decimal('vat_qty',5,2);
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
