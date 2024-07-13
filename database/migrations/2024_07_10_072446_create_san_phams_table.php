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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham', 100);
            $table->integer('so_luong');
            $table->float('gia_san_pham', 8, 2);
            $table->float('gia_khuyen_mai', 8, 2);
            $table->timestamp('ngay_nhap', $precision = 0);
            $table->text('mo_ta');
            $table->bigInteger('danh_muc_id');
            $table->bigInteger('trang_thai');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
