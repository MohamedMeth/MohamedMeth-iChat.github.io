<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * ideas(text) limited to a number of characters:
     * varchar 240 char
     * likes: integer 0 by default
     * created_at
     * updated_at
     */
    public function up(): void
    {
        Schema::create('ichat', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedInteger('likes')->default(0);
            $table->timestamps(); //created at & updated at.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ichat');
    }
};
