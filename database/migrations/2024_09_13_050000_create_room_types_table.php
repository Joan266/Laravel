<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id(); 
            $table->string('name')->unique(); 
            $table->decimal('price_per_night', 8, 0); 
            $table->string('bed_type'); 
            $table->string('image')->nullable(); 
            $table->integer('sqm');
            $table->unsignedTinyInteger('adults_capacity');
            $table->unsignedTinyInteger('children_capacity'); 
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('room_types');
    }
};
