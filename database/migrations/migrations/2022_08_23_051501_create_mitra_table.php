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
        Schema::create('mitra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jasa_pijat_id')->nullable()->constrained('jasa_pijat');
            $table->String('username');
            $table->String('email');
            $table->String('password');
            $table->String('gender');
            $table->String('number');
            $table->String('alamat');
            $table->String('foto_mitra')->nullable();
            $table->String('foto_ktp')->nullable();
            $table->String('foto_skck')->nullable();
            $table->String('foto_rekening_bank')->nullable();
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
        Schema::dropIfExists('mitra');
    }
};
