<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('excerpt');
            $table->longText('body');
            $table->text('post_image');

            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->string('post_status')->nullable();
            $table->string('post_type')->nullable();
            $table->text('post_meta_tags')->nullable();
            $table->text('post_meta_title')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
