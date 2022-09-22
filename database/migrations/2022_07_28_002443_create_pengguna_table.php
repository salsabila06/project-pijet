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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verifikasi_id')->nullable()->constrained('verifikasi');
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('email', 64)->unique();
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan'])->nullable();
            $table->string('tanggal_lahir')->nullable();;
            $table->string('no_telp')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('domisili')->nullable();
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
        Schema::dropIfExists('pengguna');
    }
};
