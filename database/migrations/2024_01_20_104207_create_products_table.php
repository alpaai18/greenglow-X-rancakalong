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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nama');
            $table->string('slug');
            $table->string('harga');
            $table->string('stok');
            $table->json('tags');
            $table->string('kategori');
            $table->text('deskripsi') -> nullable();
            $table->text('linktoko');
            $table->text('linkshop');
            $table->boolean('statusPosting') -> default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
