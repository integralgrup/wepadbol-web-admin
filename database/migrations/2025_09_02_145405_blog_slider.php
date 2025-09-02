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
        Schema::create('blog_slider', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id');
            $table->integer('slider_id');
            $table->string('lang', 10);
            $table->string('media_file', 255);
            $table->string('alt', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->integer('sort')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_slider');
    }
};
