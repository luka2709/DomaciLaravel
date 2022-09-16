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
        Schema::table('igracs', function (Blueprint $table) {
            $table->after('summoner_name', function($table) {
                $table->string('pozicija')->charset('utf8mb4');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('igracs', function (Blueprint $table) {
            $table->dropColumn('pozicija');
        });
    }
};
