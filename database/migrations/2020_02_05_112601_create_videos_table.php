<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('meta_keywords');
            $table->string('meta_des');
            $table->text('des'); //هذا للوصف المطول لاسم المفيديو غير ال description
            $table->string('youtube');
            $table->boolean('published')->default(1);
            $table->integer('user_id'); //هذا خاص لل id تبع اليوزر الي عامل الفيديو
            $table->integer('cat_id'); //هذا راح نعمل store لل category id
            $table->string('image');
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
        Schema::dropIfExists('videos');
    }
}
