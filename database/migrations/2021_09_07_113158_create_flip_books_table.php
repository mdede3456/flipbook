<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlipBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flip_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("category_id")->index();
            $table->unsignedBigInteger("author_id")->index();
            $table->text("tag")->nullable();
            $table->string("title")->nullable();
            $table->longText("description")->nullable();
            $table->string("file")->nullable();
            $table->enum("unggulan",["ya","tidak"])->default("ya");
            $table->integer("status")->default(0);
            $table->string("thumbnail")->default("uploads/flipbook/image.jpg");
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
        Schema::dropIfExists('flip_books');
    }
}
