<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountCalculationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_calculation', function (Blueprint $table) {
            $table->id();
            $table->integer('average_consumption');
            $table->decimal('average_bill_price', 6, 2);
            $table->decimal('power', 4, 2);
            $table->integer('tile_type')->default(1);
            $table->decimal('final_value', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_calculation');
    }
}
