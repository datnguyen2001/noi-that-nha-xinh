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
        Schema::create('video', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('investor')->nullable();
            $table->string('construction_address')->nullable();
            $table->string('type')->nullable();
            $table->string('design_style')->nullable();
            $table->string('main_material')->nullable();
            $table->string('design_unit')->nullable();
            $table->string('total_construction_area')->nullable();
            $table->string('year_implementation')->nullable();
            $table->longText('src');
            $table->integer('display')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video');
    }
};
