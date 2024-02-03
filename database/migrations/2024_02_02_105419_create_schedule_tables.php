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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('days', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('day_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId('day_id')
                ->cascadeOnDelete()
                ->constrained();
            $table->foreignId('schedule_id')
                ->cascadeOnDelete()
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_has_days');
        Schema::dropIfExists('days');
        Schema::dropIfExists('schedules');
    }
};
