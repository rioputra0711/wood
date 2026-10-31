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
            $table->string('code')->unique(); // e.g. TW-A-25
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained()->onDelete('cascade');
            $table->string('name'); // e.g. Tectona Grandis
            $table->string('species')->nullable(); // e.g. Teak, Mahogany
            $table->string('grade')->nullable(); // e.g. Grade A, FAS
            $table->decimal('thickness', 8, 2)->nullable(); // mm
            $table->decimal('width', 8, 2)->nullable(); // mm
            $table->decimal('length', 8, 2)->nullable(); // m
            $table->decimal('moisture_content', 5, 2)->nullable(); // %
            $table->string('surface_type')->nullable(); // S4S, Rough Sawn
            $table->string('origin')->nullable(); // Country/Region
            $table->boolean('legal_wood')->default(true);
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2);
            $table->integer('stock')->default(0); // volume in m3
            $table->decimal('moq', 10, 2)->default(1); // Minimum Order Quantity
            $table->string('unit')->default('m3');
            $table->string('image_path')->nullable();
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
