<?php

use App\Models\Konsultasi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('konsultasis', function (Blueprint $table) {
            $table->uuid('uuid')->after('id');
        });
        Konsultasi::all()->each(function ($user) {
            $user->uuid = Str::uuid();
            $user->save();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('konsultasis', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });
    }
};
