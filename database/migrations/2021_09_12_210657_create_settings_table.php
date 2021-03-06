<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("name")->default("Nama Website");
            $table->string("logo")->default("uploads/image.jpg");
            $table->longText("about")->nullable();
            $table->string("instagram_link")->default("#");
            $table->string("twitter_link")->default("#");
            $table->string("facebook_link")->default("#");
            $table->string("youtube_link")->default("#");
            $table->string("copyright")->default("#");
            $table->string("notice")->nullable(); 
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->text("address")->nullable();
            $table->string("fax")->nullable();
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
        Schema::dropIfExists('settings');
    }
}
