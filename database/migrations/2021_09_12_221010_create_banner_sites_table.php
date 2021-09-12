<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_sites', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("link")->nullable();
            $table->string("banner")->nullable();
            $table->enum("position",["home1","home2","majalah","komik"]);
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
        Schema::dropIfExists('banner_sites');
    }
}
