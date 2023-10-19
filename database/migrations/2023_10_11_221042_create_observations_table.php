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
        Schema::create('observations', function (Blueprint $table) {
            $table->id();
            $table->string("message",80);
            $table->timestamps();
            $table->foreignId("computer")->nullable();
            $table->foreign('computer')
                        ->references('id')
                        ->on('computers')
                        ->cascadeOnUpdate('cascade')
                        ->cascadeOnDelete('cascade');

            $table->foreignId('category')->nullable();
            $table->foreign('category')
                        ->references('id')
                        ->on('categories')
                        ->cascadeOnUpdate('cascade')
                        ->nullOnDelete();

            $table->foreignId('owner')->nullable();
            $table->foreign('owner')
                        ->references('id')
                        ->on('users')
                        ->cascadeOnUpdate('cascade')
                        ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observations');
    }
};
