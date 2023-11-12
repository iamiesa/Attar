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
        Schema::create('add__prods', function (Blueprint $table) {
            $table->id('prod_id');
            $table->string('name',50);
            $table->Integer('price',20)->autoIncrement(false)->primaryKey(false);
            $table->string('description');
            $table->string('category',50);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add__prods');
    }
};
