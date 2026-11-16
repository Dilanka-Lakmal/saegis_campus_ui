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
    Schema::create('hero_slides', function (Blueprint $table) {
        $table->id();
        $table->enum('media_type', ['video', 'image'])->default('image');
        $table->string('media_path'); // e.g., videos/campus-hero.mp4 or images/banners/img_001.jpg
        $table->string('alt_text')->nullable();
        $table->string('badge')->nullable();
        $table->string('title');
        $table->text('subtitle')->nullable();
        $table->json('highlights')->nullable(); // Stores the bullet points array
        $table->string('cta_text')->default('Learn More');
        $table->string('cta_url')->default('#');
        $table->boolean('is_modal')->default(false); // True if it triggers #registerModal
        $table->integer('duration')->default(5000);
        $table->integer('order')->default(0);
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_slides');
    }
};
