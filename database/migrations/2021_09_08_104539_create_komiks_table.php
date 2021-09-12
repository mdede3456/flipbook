<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komiks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("genre_id")->index();
            $table->text("meta")->nullable();
            $table->string("thumbnail")->default("uploads/image.jpg");
            $table->string("name");
            $table->enum("status",["ongoing","selesai"])->default("ongoing");
            $table->longText("description")->nullable();
            $table->string("rate")->default("1");
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
        Schema::dropIfExists('komiks');
    }
}
