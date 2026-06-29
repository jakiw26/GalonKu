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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamp('tanggal_pesan')->useCurrent();
            $table->enum('metode_pengambilan', [
                'antar',
                'ambil sendiri'
            ]);
            $table->text('alamat')->nullable();
            $table->text('catatan')->nullable();
            $table->enum('status', [
                'menunggu',
                'proses',
                'dikirim',
                'selesai',
                'dibatalkan'
            ])->default('proses');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
