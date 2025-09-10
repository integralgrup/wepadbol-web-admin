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
        Schema::create('club_features', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->integer('club_id')->nullable(false);
            $table->string('lang', 10)->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('description')->nullable(false);
            $table->string('icon')->nullable(false);
            $table->string('image')->nullable(false);
            $table->string('alt')->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_features');
    }
};
