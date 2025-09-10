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
        Schema::create('about_how_we_do', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('content_id');
            $table->string('lang', 10);
            $table->string('title', 255);
            $table->text('description');
            $table->string('image', 255);
            $table->string('alt', 255);
            $table->string('icon_image', 255);
            $table->integer('sort');
            $table->timestamp('created_at')->useCurrent();
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
        Schema::dropIfExists('about_how_we_do');
    }
};
