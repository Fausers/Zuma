<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->text('desc_1');
            $table->string('image_1');
            $table->string('video_1');
            $table->string('button_1');
            $table->string('feature_1');
            $table->string('feature_1_desc');
            $table->string('feature_2');
            $table->string('feature_2_desc');
            $table->string('feature_3');
            $table->string('feature_3_desc');
            $table->string('feature_4');
            $table->string('feature_4_desc');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('front_contents');
    }
}
