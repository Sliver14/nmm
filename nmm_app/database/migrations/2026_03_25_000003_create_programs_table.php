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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique(); // Free-surgeries, wound-care
            $table->text('short_description');
            $table->longText('full_content'); // Stores dynamic details
            $table->string('featured_image')->nullable();
            $table->string('organizer_name')->default('Network for Medical Missions');
            $table->string('organizer_email')->default('info@networkformedicalmissions.org');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
