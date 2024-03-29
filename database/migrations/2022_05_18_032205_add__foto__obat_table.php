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
        Schema::table('_obat', function (Blueprint $table) {
            $table->string('Foto')->nullable();
            $table->string('Nama_Satuan');
            $table->dropColumn('Foto');
            $table->dropColumn('timestamps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
