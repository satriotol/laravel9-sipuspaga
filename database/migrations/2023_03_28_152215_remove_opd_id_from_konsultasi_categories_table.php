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
        Schema::table('konsultasi_categories', function (Blueprint $table) {
            $table->dropColumn('network_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('konsultasi_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('network_id')->nullable();
        });
    }
};
