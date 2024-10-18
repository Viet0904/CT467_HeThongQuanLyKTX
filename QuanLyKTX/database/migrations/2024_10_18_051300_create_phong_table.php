<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Mockery\Matcher\Not;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phong', function (Blueprint $table) {
            $table->String('MaPhong', 10)->primary();
            $table->String('TenPhong', 100);
            $table->float('DienTich');
            $table->integer('SoGiuong');
            $table->decimal('GiaThue', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phong');
    }
};
