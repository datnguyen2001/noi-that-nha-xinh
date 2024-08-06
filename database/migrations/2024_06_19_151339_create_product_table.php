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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('category_id');
            $table->string('guarantee')->nullable();
            $table->string('material')->nullable();
            $table->string('size')->nullable();
            $table->string('sectors')->nullable();
            $table->string('producer')->nullable();
            $table->string('other_materials')->nullable();
            $table->string('src');
            $table->integer('price')->nullable();
            $table->integer('price_promotional')->nullable();
            $table->integer('pricing')->default(0);
            $table->integer('quantity')->default(0);
            $table->longText('describe')->nullable();
            $table->longText('why_choose_us')->nullable();
            $table->integer('display')->default(1);
            $table->integer('is_sale')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
