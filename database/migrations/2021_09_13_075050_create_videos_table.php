<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger("category_id")->index();
            $table->unsignedBigInteger("author_id")->index();
            $table->text("tag")->nullable();
            $table->string("title")->nullable();
            $table->longText("description")->nullable();
            $table->string("thumbnail")->default("uploads/video/image.jpg");
            $table->string("video")->nullable();
            $table->enum("unggulan", ["ya", "tidak"])->default("ya");
            $table->integer("status")->default(0);
            $table->softDeletes();
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
