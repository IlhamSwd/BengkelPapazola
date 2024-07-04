<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('url_customer');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('nomor_telepon');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_motor');
            $table->string('plat_kendaraan');
            $table->string('keluhan_servis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
