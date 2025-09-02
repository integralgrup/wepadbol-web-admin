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
        Schema::create('main_slider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lang', 10);
            $table->integer('slider_id');
            $table->string('title', 100);
            $table->string('description', 255);
            $table->string('thumbnail', 255);
            $table->string('image', 255);
            $table->string('alt', 255);
            $table->integer('sort')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes(); // adds nullable deleted_at timestamp column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_slider');
    }
}
?>