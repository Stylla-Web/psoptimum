<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoFieldsToSliderSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slider_slides', function (Blueprint $table) {
            $table->boolean('video_auto_play')->default(1);
            $table->boolean('video_btn_play')->default(0);
            $table->boolean('video_btn_mute')->default(0);
            $table->string('caption_1_color')->nullable();
            $table->string('caption_2_color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slider_slides', function (Blueprint $table) {
            $table->dropColumn('video_auto_play');
            $table->dropColumn('video_btn_play');
            $table->dropColumn('video_btn_mute');
            $table->dropColumn('caption_1_color');
            $table->dropColumn('caption_2_color');
        });
    }
}
