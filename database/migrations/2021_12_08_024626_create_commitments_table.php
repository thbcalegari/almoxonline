<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purveyor_id')->constrained('purveyors')->cascadeOnDelete();
            $table->date('commitment_date');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('commitment_products', function(Blueprint $table) {
            $table->foreignId('commitment_id')->constrained('commitments')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commitments');
        Schema::dropIfExists('commitment_products');
    }
}
