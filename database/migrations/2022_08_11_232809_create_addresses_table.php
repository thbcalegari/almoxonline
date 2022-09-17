<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->string('CEP');
            $table->id();
            $table->string('type');
            $table->string('address');
            $table->foreignId('city_id')->constrained('cities')->cascadeOnDelete();
            $table->string('uf', 2);
            $table->string('complement')->nullable();
            $table->string('description_no_number')->nullable();
            $table->string('description_city')->nullable();
            $table->string('ibge_code')->nullable();
            $table->string('city_zone')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
