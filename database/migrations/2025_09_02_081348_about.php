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
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lang', 10);
            $table->string('title', 100);
            $table->string('title_1', 255);
            $table->text('description');
            $table->string('image', 255);
            $table->string('alt', 255);
            $table->string('mission_title', 100);
            $table->string('mission_text', 255);
            $table->string('mission_image', 255);
            $table->string('vision_title', 100);
            $table->string('vision_text', 255);
            $table->string('vision_image', 255);
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->string('seo_keywords', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
