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
        Schema::create('sinhvien', function (Blueprint $table) {
            $table->string('MaSinhVien', 10)->primary();
            $table->string('HoTen', 100);
            $table->string('SoDienThoai', 15);
            $table->string('MaLop', 10)->nullable();
            $table->foreign('MaLop')->references('MaLop')->on('lop');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinhvien');
    }
};
