<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_lots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('manufactorer_id')->constrained('manufactorers')->cascadeOnDelete();
            $table->string('trademark');
            $table->string('lot');
            $table->double('unit_price', 10, 2);
            $table->date('manufacturing_date');
            $table->date('expiration_date')->nullable();
            $table->string('bar_code');
            $table->timestamps();
        });

        Schema::create('stock_lots', function(Blueprint $table){
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('lot_id')->constrained('product_lots')->cascadeOnDelete();
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_lots');
        Schema::dropIfExists('stock_lots');
    }
}
