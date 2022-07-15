<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHousesTableAddMoreColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->mediumInteger('price')->nullable();
            $table->string('city', 50)->change();
            $table->string('street', 100);
            $table->boolean('is_rent')->default(true);
            $table->date('free_from');
            $table->tinyInteger('rooms')->nullable();
            $table->double('surface')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('city');
            $table->dropColumn('street');
            $table->dropColumn('is_rent');
            $table->dropColumn('free_from');
            $table->dropColumn('rooms');
            $table->dropColumn('surface');
        });
    }
}
