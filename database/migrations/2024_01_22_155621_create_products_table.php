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
            $table->text('name');
            $table->text('image');
            $table->text('slug');
            $table->text('category_id');
            $table->text('color');
            $table->text('hsn_code');
            $table->text('size');
            $table->text('sku');
            $table->text('gst');
            $table->text('describtion');
            $table->text('mrp');
            $table->text('price');
            $table->text('quentity');
            $table->text('condition');
            $table->text('status');
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
