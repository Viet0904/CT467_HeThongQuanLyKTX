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
        Schema::create('tt_thuephong', function (Blueprint $table) {
            $table->string('MaHopDong', 10);
            $table->date('ThangNam');
            $table->decimal('SoTien', 10, 2);
            $table->date('NgayThanhToan');
            $table->string('MaNhanVien', 10)->nullable();
            $table->primary(['MaHopDong', 'ThangNam']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tt_thuephong');
    }
};
