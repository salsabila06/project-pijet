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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('pengguna');
            $table->foreignId('jasa_pijat_id')->nullable()->constrained('jasa_pijat');
            $table->date('waktu_booking')->nullable();
            $table->time('durasi_waktu')->nullable();
            $table->string('alamat');
            $table->string('jenis_pijat');
            $table->string('jenis_kelamin');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('pemesanan');
    }
};
