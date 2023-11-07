<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\LoginUser_;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loginusers_', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name',50);
            $table->string('contact',20);
            $table->string('email',50)->unique();
            $table->string('password');
            $table->int('admin')->default('0');
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loginusers_');
    }
};
