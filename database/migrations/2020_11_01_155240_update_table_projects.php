<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('client', 50)->change();
            $table->string('power_system', 4)->change();
        });

        \DB::statement('ALTER TABLE projects MODIFY power_system INTEGER;');
        \DB::statement('ALTER TABLE projects MODIFY economy_co2 decimal(6,2);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement('ALTER TABLE projects MODIFY power_system varchar;');
        \DB::statement('ALTER TABLE projects MODIFY economy_co2 varchar;');

        Schema::table('projects', function (Blueprint $table) {
            $table->string('client', 80)->change();
            $table->string('power_system', 40)->change();
        });
    }
}
