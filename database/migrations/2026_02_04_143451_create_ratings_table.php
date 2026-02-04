<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('blog_id'); // logical blog id

            $table->tinyInteger('rating');
            $table->string('ip_address')->nullable();
            $table->timestamps();

            $table->unique(['blog_id', 'ip_address']);
        });


    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
