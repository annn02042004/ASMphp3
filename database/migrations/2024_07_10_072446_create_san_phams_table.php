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
            $table->string('ten_san_pham');
            $table->integer('so_luong');
            $table->decimal('gia_san_pham', 8, 2);
            $table->decimal('gia_khuyen_mai', 8, 2)->nullable();
            $table->date('ngay_nhap');
            $table->text('mo_ta')->nullable();
            $table->foreignId('danh_muc_id')->constrained('danh_mucs'); // assuming there's a danh_mucs table
            $table->boolean('trang_thai');
            $table->timestamps();
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
