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

        Schema::create('client_customizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('theme_id')->nullable()->constrained(); // Links to the selected theme
            $table->json('text_content');  // Stores {'hero_title': 'Client Title', 'body_text': '...'}
            $table->json('image_urls')->nullable(); // Stores {'hero_image': '/path/to/img.jpg'}
            $table->boolean('is_published')->default(false); // Only published version is public
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_customizations');
    }
};
