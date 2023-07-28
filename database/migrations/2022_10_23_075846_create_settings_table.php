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
            $table->string('logo');
            $table->string('tab');
            $table->string('image');
            $table->text('map');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('youtube');
            $table->text('tiktok');
            $table->text('instgram');
            $table->text('phone1');
            $table->text('phone2');
            $table->text('email1');
            $table->text('email2');
            $table->text('phone3');
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
