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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level');
            $table->integer('capacity_min');
            $table->integer('capacity_max');
            $table->foreignId('schedule_id')
                ->cascadeOnDelete()
                ->constrained();
            $table->foreignId('instructor_id')
                ->cascadeOnDelete()
                ->constrained(table: 'users');
            $table->foreignId('pool_id')
                ->cascadeOnDelete()
                ->constrained();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};