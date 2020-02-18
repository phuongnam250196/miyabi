<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('address', 500)->nullable();
            $table->string('link_fb', 255)->nullable();
            $table->string('link_twitter', 255)->nullable();
            $table->string('link_instagram', 255)->nullable();
            $table->string('icon', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('logo_footer', 255)->nullable();
            $table->string('lat', 255)->nullable();
            $table->string('long', 255)->nullable();
            $table->string('time', 255)->nullable();
            $table->string('fb_id', 255)->nullable();
            $table->string('gg_id', 255)->nullable();
            $table->longtext('add_code')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
