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
        Schema::create('thuephong', function (Blueprint $table) {
            $table->string('MaHopDong', 10)->primary();
            $table->string('MaSinhVien', 10)->nullable();
            $table->string('MaPhong', 10)->nullable();
            $table->date('BatDau');
            $table->date('KetThuc');
            $table->decimal('TienDatCoc', 10, 2);
            $table->decimal('GiaThueThucTe', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thuephong');
    }
};
