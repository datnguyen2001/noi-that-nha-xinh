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
        Schema::create('post_project', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('project_id');
            $table->string('investor')->nullable();
            $table->string('construction_address')->nullable();
            $table->string('type')->nullable();
            $table->string('design_style')->nullable();
            $table->string('main_material')->nullable();
            $table->string('design_unit')->nullable();
            $table->string('total_construction_area')->nullable();
            $table->string('year_implementation')->nullable();
            $table->longText('content')->nullable();
            $table->string('src')->nullable();
            $table->integer('display')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_project');
    }
};
