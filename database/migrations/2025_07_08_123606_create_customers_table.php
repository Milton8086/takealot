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
       
        Schema::create('customers', function (Blueprint $table) {
        $table->id();                    // Automatically creates 'id' column
        $table->string('name');         // Creates 'name' column (text)
        $table->string('email')->unique();  // 'email' column, must be unique
        $table->string('phone')->nullable(); // 'phone' column (can be empty)
        $table->timestamps(); // ✅ Adds created_at and updated_at
       });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
