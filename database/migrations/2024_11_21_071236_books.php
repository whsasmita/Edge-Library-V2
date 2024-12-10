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
        Schema::create('books', function (Blueprint $table) {
            $table->id('id_books'); // Primary key
            $table->string('title'); // Judul buku
            $table->binary('image')->nullable(); // Gambar buku
            $table->string('author'); // Nama penulis
            $table->string('publish_year'); // Tahun terbit
            $table->text('description')->nullable(); // Deskripsi buku
            $table->unsignedBigInteger('category_id'); // Foreign key ke tabel books_category
            $table->foreign('category_id')->references('id_category')->on('books_category')->onDelete('cascade'); // Relasi
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
