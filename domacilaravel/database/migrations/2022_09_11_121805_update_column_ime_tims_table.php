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
        Schema::table('tims', function (Blueprint $table) {
            $table->renameColumn('ime', 'ime_tima');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tims', function (Blueprint $table) {
            $table->renameColumn('ime_tima','ime');
        });
    }
};
