<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->string('app_name');
            $table->text('app_baseline');
            $table->string('banner');
            $table->string('logo');
            $table->string('favicon');
            $table->string('google_analytics_code');
            $table->string('disqus_shortname');
            $table->text('post_bottom_scripts')->nullable();
            $table->string('show_on_front')->default('posts');
            $table->string('theme');
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
        Schema::drop('settings');
    }
}
