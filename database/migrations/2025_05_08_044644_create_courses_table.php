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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_key')->unique();
            $table->string('name');
            $table->text('description');
            $table->string('cover_image')->nullable();
            $table->text('content');
            $table->foreignId('robotics_kit_id')->constrained();
            $table->timestamps();
        });

        Schema::create('course_group', function (Blueprint $table) {
            $table->foreignId('course_id')->constrained();
            $table->foreignId('group_id')->constrained();
            $table->primary(['course_id', 'group_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
